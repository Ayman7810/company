<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $certificates = Certificate::latest()->paginate(config('myConfig.count'));

        if (request()->ajax()) {
            return view('admin.certificate.ajax-search', compact('certificates'))->render();
        }

        return view('admin.certificate.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificate.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCertificateRequest $request)
    {
        $data = $request->validated();
        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('certificates', $newImageName, 'public');
        $data['image'] = $newImageName;

        Certificate::create($data);

        return to_route('admin.certificate.index')->with('success', __('shard.success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        return view('admin.certificate.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.certificate.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        //
        $data = $request->validated();
        if ($request->hasFile('image')) {
            Storage::delete("public/certificates/$certificate->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('certificates', $newImageName, 'public');
            $data['image'] = $newImageName;
        }


        $certificate->update($data);

        return to_route('admin.certificate.index')->with('success-eite', __('shard.success-eite'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
        Storage::delete("public/certificates/$certificate->image");
        $certificate->delete();
        return to_route('admin.certificate.index')->with('success-delete', __('shard.success-delete'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', config('myConfig.count'));

        if (!empty($query)) {
            $certificates = Certificate::where('name', 'like', "%{$query}%")
                ->orWhere('name_ar', 'like', "%{$query}%")
                ->paginate($perPage);
        } else {
            $certificates = Certificate::latest()->paginate($perPage);
        }

        return view('admin.certificate.ajax-search', compact('certificates'))->render();
    }
}