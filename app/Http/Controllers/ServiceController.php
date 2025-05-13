<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate(config('myConfig.count'));
        
        if(request()->ajax()) {
            return view('admin.services.ajax-search', compact('services'))->render();
        }
        
        return view('admin.services.index', get_defined_vars());
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();

        $image = $request->image;

        $newImageName = time() . '-' . $image->getClientOriginalName();

        $image->storeAs('services', $newImageName, 'public');

        $data['image'] = $newImageName;

        Service::create($data);
        return redirect()->route('admin.service.index')->with('success', __('shard.success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            Storage::delete("public/services/$service->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('services', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        $service->update($data);

        return to_route('admin.service.index')->with('success-update', __('shard.success-update'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {

        Storage::delete("public/services/$service->image");
        $service->delete();
        return to_route('admin.service.index')->with('success-delete', __('shard.success-delete'));
    }


    /**
     * search serivce from services table.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', config('myConfig.count'));
        
        if(!empty($query)){
            $services = Service::where('title', 'LIKE', "%{$query}%")
                             ->orWhere('title_ar', 'LIKE', "%{$query}%")
                             ->paginate($perPage);
        } else {
            $services = Service::latest()->paginate($perPage);
        }
        
        return view('admin.services.ajax-search', compact('services'))->render();
    }
}