<?php

use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Models\Blog;
use App\Models\Feedback;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::name('front.')->prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath' )->group(function () {
   
//     Route::view('/', 'front.index')->name('index');

//     Route::view('/about', 'front.about')->name('about');

//     Route::view('/service', 'front.service')->name('service');
    
//     Route::view('/projects', 'front.projects')->name('projects');

//     Route::view('/project-detail', 'front.project-detail')->name('project-detail');
    
//     Route::view('/blog', 'front.blog')->name('blog');

//     Route::view('/blog-detail', 'front.blog-detail')->name('blog-detail');
    
//     Route::view('/contact', 'front.contact')->name('contact');


  
    
//     Route::fallback(function(){
//         return view('front.404');
//     });
// });

Route::name('front.')->controller(FrontController::class)->prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath' )->group(function () {
   
    Route::get('/', 'index')->name('index');

    Route::get('/about', 'about')->name('about');

    Route::get('/service',  'service')->name('service');
    
    Route::get('/projects', 'projects')->name('projects');

    Route::get('/project-detail/{project}',  'projectDetail')->name('project-detail');
    
    Route::get('/blog',  'blog')->name('blog');

    Route::get('/blog-detail/{blog}',  'blogdDetail')->name('blog-detail');
    
    Route::get('/contact',  'contact')->name('contact');
    
    Route::post('/contact/feedback',  'storeFeedback')->name('contact.feedback');
    
    Route::post('/blog-detail/comment',  'comment')->name('comment');
    
    Route::get('/blogs/search',  'searchBlogs')->name('searchBlogs');
    
    // Route::fallback(function(){
    //     return view('front.404');
    // });
});


// Route::name('feedback.')->group(function(){
//     Route::post('feedback',[FeedbackController::class , 'store'])->name('store');
// });



// Route::group(function () {
//     Route::get('blog/search', [BlogController::class, 'search'])->name('blog.search');
// })->name('aaaaa.')->prefix(LaravelLocalization::setLocale());

Route::name('admin.') 
    ->prefix(LaravelLocalization::setLocale()) 
    ->group(function () {
        Route::get('blog/search', [BlogController::class, 'search'])->name('blog.search');
        Route::get('service/search', [ServiceController::class, 'search'])->name('service.search');
        Route::get('project/search', [ProjectController::class, 'search'])->name('project.search');
        Route::get('partner/search', [PartnerController::class, 'search'])->name('partner.search');
        Route::get('advisor/search', [AdvisorController::class, 'search'])->name('advisor.search');
        Route::get('certificate/search', [CertificateController::class, 'search'])->name('certificate.search');
        Route::get('feature/search', [FeatureController::class, 'search'])->name('feature.search');
        Route::get('feedback/search', [FeedbackController::class, 'search'])->name('feedback.search');
    });



Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath' )->group(function () {
     
    
    Route::middleware('auth')->group(function(){
        
      

        ############################################### HOME ROUTE
        Route::view('/' , 'admin.index')->name('index');
        
        ############################################### SERVICE ROUTE
        Route::controller(ServiceController::class)->group(function(){
            Route::resource('service' , ServiceController::class);
        });
        
        ############################################### BLOG ROUTE
         Route::controller(BlogController::class)->group(function(){
            Route::resource('blog', BlogController::class);
        });
        ############################################### PROGECT ROUTE
        Route::controller(ProjectController::class)->group(function(){
            Route::resource('project' , ProjectController::class);
        });
        
        ############################################### PARTNER ROUTE
        Route::controller(PartnerController::class)->group(function(){
            Route::resource('partner' , PartnerController::class);
        });
        
        ############################################### CERTIFICATE ROUTE
        Route::controller(CertificateController::class)->group(function(){
            Route::resource('certificate' , CertificateController::class);
        });
        
        ############################################### Feature ROUTE
        Route::controller(FeatureController::class)->group(function(){
            Route::resource('feature' , FeatureController::class);
        });
        
        ############################################### Advisor ROUTE
        Route::controller(AdvisorController::class)->group(function(){
            Route::resource('advisor' , AdvisorController::class);
        });
        ############################################### FEEDBACK ROUTE
        Route::controller(FeedbackController::class)->group(function(){
            Route::resource('feedback' , FeedbackController::class);
        });
        
    });
    // Route::view('/login' , 'admin.auth.login')->name('login');

    require __DIR__ . '/auth.php';

}
);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });