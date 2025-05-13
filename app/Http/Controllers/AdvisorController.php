<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use App\Http\Requests\StoreAdvisorRequest;
use App\Http\Requests\UpdateAdvisorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advisors = Advisor::latest()->paginate(config('myConfig.count'));
        
        if(request()->ajax()) {
            return view('admin.advisor.ajax-search', compact('advisors'))->render();
        }
        
        return view('admin.advisor.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advisor.create' , get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdvisorRequest $request)
    {
        $data = $request->validated();
        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('advisors', $newImageName, 'public');
        $data['image'] = $newImageName;

        Advisor::create($data);

        return to_route('admin.advisor.index')->with('success' , __('shard.success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Advisor $advisor)
    {
        return view('admin.advisor.show' , get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advisor $advisor)
    {
        return view('admin.advisor.edit' , get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdvisorRequest $request, Advisor $advisor)
    {
        //
        $data = $request->validated();
        if ($request->hasFile('image')) {
            Storage::delete("public/advisors/$advisor->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('advisors', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        $advisor->update($data);

        return to_route('admin.advisor.index')->with('success' , __('shard.success-eite'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advisor $advisor)
    {
        //
        Storage::delete("public/advisor/$advisor->image");
        $advisor->delete();
        return to_route('admin.advisor.index')->with('success' , __('shard.success-delete'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', config('myConfig.count'));
        
        if(!empty($query)){
            $advisors = Advisor::where('name', 'like', "%{$query}%")
                             ->orWhere('name_ar', 'like', "%{$query}%")
                             ->paginate($perPage);
        } else {
            $advisors = Advisor::latest()->paginate($perPage);
        }
        
        return view('admin.advisor.ajax-search', compact('advisors'))->render();
    }
}