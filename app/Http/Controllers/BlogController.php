<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\CategoryBlog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $blogs = Blog::latest()->paginate(5);
        
        // إذا كان الطلب AJAX، نرجع العرض الجزئي فقط
        if(request()->ajax()) {
            return view('admin.blog.ajax-search', compact('blogs'))->render();
        }
        
        return view('admin.blog.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryBlog::all();
        return view('admin.blog.create' , get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request ,Blog $blog)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        // dd($data);
        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('blogs', $newImageName, 'public');
        $data['image'] = $newImageName;
        
        
        Blog::create($data);

        return to_route('admin.blog.index')->with('success-create-blog' , __('shard.success-create-blog'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    { $categories = CategoryBlog::all();
        return view('admin.blog.show' , get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        
        $categories = CategoryBlog::all();
        return view('admin.blog.edit' , get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $data = $request->validated();
        
         if ($request->hasFile('image')) {
            Storage::delete("public/blogs/$blog->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('blogs', $newImageName, 'public');
            $data['image'] = $newImageName;
        }
        
        $blog->update($data);

        return to_route('admin.blog.index')->with('success-update-blog' ,__('shard.success-update-blog'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Storage::delete("public/blogs/$blog->image");
        $blog->delete();
        return to_route('admin.blog.index')->with('success-blog-delete', __('shard.success-blog-delete'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', 5); 
        
        if (!$query) {
            $blogs = Blog::latest()->paginate($perPage);
        } else {
            $blogs = Blog::where('title', 'LIKE', "%{$query}%")
                         ->orWhere('title_ar', 'LIKE', "%{$query}%")
                         ->paginate($perPage);
        }
        
        return view('admin.blog.ajax-search', compact('blogs'))->render();
    }
    
}