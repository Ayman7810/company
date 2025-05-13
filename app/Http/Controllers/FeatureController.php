<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::latest()->paginate(config('myConfig.count'));
        
        if(request()->ajax()) {
            return view('admin.feature.ajax-search', compact('features'))->render();
        }
        
        return view('admin.feature.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feature.create' , get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeatureRequest $request)
    {
        $data = $request->validated();
      
        Feature::create($data);
        return to_route('admin.feature.index')->with('success' , __('shard.success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        return view('admin.feature.show' , get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        return view('admin.feature.edit' , get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        //
        $data = $request->validated();
     

        $feature->update($data);

        return to_route('admin.feature.index')->with('success-update' , __('shard.success-eite'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        
        $feature->delete();
        return to_route('admin.feature.index')->with('success-delete' , __('shard.success-delete'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', config('myConfig.count'));
        
        if(!empty($query)){
            $features = Feature::where('title', 'like', "%{$query}%")
                             ->orWhere('title_ar', 'like', "%{$query}%")
                             ->paginate($perPage);
        } else {
            $features = Feature::latest()->paginate($perPage);
        }
        
        return view('admin.feature.ajax-search', compact('features'))->render();
    }
}