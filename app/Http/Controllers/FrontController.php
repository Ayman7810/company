<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Blog;
use App\Models\CategoryBlog;
use App\Models\CategoryProject;
use App\Models\Comment;
use App\Models\Feedback;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index()
   {
      $services = Service::latest()->take(3)->get();
    
      return view('front.index' , get_defined_vars());
   }

   public function about()
   {
      $projects = Project::latest()->take(4)->get();
      return view('front.about'  , get_defined_vars());
   }

   public function service()
   {
      $services = Service::all();
      return view('front.service' , get_defined_vars());
   }
   public function projects()
   {
      $projects = Project::all();
      $categories = CategoryProject::all();
      
      return view('front.projects', get_defined_vars());
   }
   public function projectDetail(Project $project)
   {
      
      $projects = Project::all();
      return view('front.project-detail' , get_defined_vars());
   }


   public function blog()
   {
      $blogs = Blog::paginate(5);
      $categories = CategoryBlog::all();
      $oldBlogs = Blog::oldest()->get();
      return view('front.blog', get_defined_vars());
   }

   public function blogdDetail(Blog $blog)
   {
      
      return view('front.blog-detail' , get_defined_vars());
   }

   public function contact()
   {
      return view('front.contact');
   }
   
   public function storeFeedback(StoreFeedbackRequest $request)
   {
      
      $date = $request->validated();
      Feedback::create($date);
      
      return back()->with('success-feedback', __('shard.success-feedback'));
   }
   
   public function comment(StoreCommentRequest $request , Blog $blog)
   {
      $data = $request->validated();
     
      Comment::create($data);

      return back()->with('success',__('shard.success-comment'));
   }
   
   public function searchBlogs(Request $request)
   {
       $query = $request->input('query');
       $language = app()->getLocale();
   
       if (!$query) {
           $blogs = Blog::latest()->paginate(5);
       } else {
           $blogs = Blog::where('title', 'LIKE', "%{$query}%")
                       ->orWhere('title_ar', 'LIKE', "%{$query}%")
                       ->paginate(5);
       } 
       
       if ($request->ajax()) {
           return view('front.partials.blogsAjax', compact('blogs', 'language'))->render();
       }
       
       return back();
   }
}