<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::latest()->paginate(config('myConfig.count'));
        
        if(request()->ajax()) {
            return view('admin.partner.ajax-search', compact('partners'))->render();
        }
        
        return view('admin.partner.index', get_defined_vars());
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partner.create' , get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartnerRequest $request)
    {
        $data = $request->validated();
        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('partners', $newImageName, 'public');
        $data['image'] = $newImageName;

        Partner::create($data);
        return to_route('admin.partner.index')->with('success' , __('shard.success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        return view('admin.partner.show' , get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
      
        return view('admin.partner.edit' , get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        
        $data = $request->validated();
        if ($request->hasFile('image')) {
            Storage::delete("public/partners/$partner->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('partners', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        $partner->update($data);

        return to_route('admin.partner.index')->with('success-eite' , __('shard.success-eite'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        //
        Storage::delete("public/partners/$partner->image");
        $partner->delete();
        return to_route('admin.partner.index')->with('success-delete' , __('shard.success-delete'));
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', config('myConfig.count'));
    
        $partners = Partner::when($query, function($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                  ->orWhere('name_ar', 'like', "%{$query}%");
            })
            ->latest()
            ->paginate($perPage)
            ->withQueryString();
    
        return view('admin.partner.ajax-search', compact('partners'))->render();
    }
}