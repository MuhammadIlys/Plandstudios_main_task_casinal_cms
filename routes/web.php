<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\casinalController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CasinalFooter;
use App\Http\Controllers\HomepageBlog;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/////////////////////// ADMIN ROUTES //////////////////
// Route::get('index',[adminController::class,'index'])->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('index', [adminController::class, 'index'])->name('index');
    Route::get('homecms', [adminController::class, 'homecms'])->name('homecms');
    Route::get('homepage_courses', [adminController::class, 'homepage_courses'])->name('homepage_courses');
    Route::get('aboutcms', [adminController::class, 'aboutcms'])->name('aboutcms');
    Route::get('servicescms', [adminController::class, 'servicescms'])->name('servicescms');  
    Route::get('blogcms', [adminController::class, 'blogcms'])->name('blogcms');
    Route::get('contactcms', [adminController::class, 'contactcms'])->name('contactcms');
    Route::get('homeslider', [adminController::class, 'homeslider'])->name('homeslider');
    Route::get('casinal_navbar', [adminController::class, 'casinal_navbar'])->name('casinal_navbar');
    Route::get('casinal_footer', [adminController::class, 'casinal_footer'])->name('casinal_footer');
    Route::get('homepage_testimonial', [adminController::class, 'homepage_testimonial'])->name('homepage_testimonial');
    Route::get('homepage_blog', [adminController::class, 'homepage_blog'])->name('homepage_blog');
    
    Route::get('test', [adminController::class, 'test']);
    Route::resource('employe',EmployeController::class)
->except('create');


});
Route::get('logout', [adminController::class, 'logout']);
// Route::get('test',[adminController::class,'test']);




//////////// FORMS ROUTES //////////
Route::post('home_cms', [adminController::class, 'home_cms'])->name('home_cms');
Route::post('about_cms', [adminController::class, 'about_cms'])->name('about_cms');
Route::post('services_cms', [adminController::class, 'services_cms'])->name('services_cms');
Route::post('blog_cms', [adminController::class, 'blog_cms'])->name('blog_cms');
Route::post('contact_cms', [adminController::class, 'contact_cms'])->name('contact_cms');
Route::post('homeslider_cms', [adminController::class, 'homeslider_cms'])->name('homeslider_cms');
Route::post('sidebar', [adminController::class, 'sidebar'])->name('sidebar');


Route::get('services_cms_edit/{id}', [adminController::class, 'services_cms_edit'])->name('services_cms_edit');
Route::get('services_cms_delete/{id}', [adminController::class, 'services_cms_delete'])->name('services_cms_delete');
Route::post('services_cms_update/{id}', [adminController::class, 'services_cms_update'])->name('services_cms_update');

Route::get('home_cms_edit/{id}', [adminController::class, 'home_cms_edit'])->name('home_cms_edit');
Route::get('home_cms_delete/{id}', [adminController::class, 'home_cms_delete'])->name('home_cms_delete');
Route::post('home_cms_update/{id}', [adminController::class, 'home_cms_update'])->name('home_cms_update');

Route::get('about_cms_edit/{id}', [adminController::class, 'about_cms_edit'])->name('about_cms_edit');
Route::get('about_cms_delete/{id}', [adminController::class, 'about_cms_delete'])->name('about_cms_delete');
Route::post('about_cms_update', [adminController::class, 'about_cms_update'])->name('about_cms_update');

Route::get('blog_cms_edit/{id}', [adminController::class, 'blog_cms_edit'])->name('blog_cms_edit');
Route::post('blog_cms_update/{id}', [adminController::class, 'blog_cms_update'])->name('blog_cms_update');
Route::get('blog_cms_delete/{id}', [adminController::class, 'blog_cms_delete'])->name('blog_cms_delete');

Route::get('contact_cms_edit/{id}', [adminController::class, 'contact_cms_edit'])->name('contact_cms_edit');
Route::post('contact_cms_update/{id}', [adminController::class, 'contact_cms_update'])->name('contact_cms_update');
Route::get('contact_cms_delete/{id}', [adminController::class, 'contact_cms_delete'])->name('contact_cms_delete');

Route::get('homeslider_cms_edit/{id}', [adminController::class, 'homeslider_cms_edit'])->name('homeslider_cms_edit');
Route::post('homeslider_cms_update/{id}', [adminController::class, 'homeslider_cms_update'])->name('homeslider_cms_update');




Route::post('homepage_courses_create', [adminController::class, 'homepage_courses_create'])->name('homepage_courses_create');
Route::get('course_edit/{id}', [adminController::class, 'course_edit'])->name('course_edit');
Route::get('homepage_courses_delete/{id}', [adminController::class, 'homepage_courses_delete'])->name('course_delete');
Route::post('homepage_courses_update/{id}', [adminController::class, 'homepage_courses_update'])->name('homepage_courses_update');


Route::post('homepage_blog_store', [adminController::class, 'homepage_blog_store'])->name('homepage_blog_store');
Route::get('homepage_blog_delete/{id}', [adminController::class, 'homepage_blog_delete'])->name('homepage_blog_delete');
Route::get('homepage_blog_edit/{id}', [adminController::class, 'homepage_blog_edit'])->name('homepage_blog_edit');
Route::post('homepage_blog_update/{id}', [adminController::class, 'homepage_blog_update'])->name('homepage_blog_update');



Route::post('homepage_testimonial_store', [adminController::class, 'homepage_testimonial_store'])->name('homepage_testimonial_store');
Route::get('homepage_testimonial_delete/{id}', [adminController::class, 'homepage_testimonial_delete'])->name('homepage_testimonial_delete');
Route::get('homepage_testimonial_edit/{id}', [adminController::class, 'homepage_testimonial_edit'])->name('homepage_testimonial_edit');
Route::post('homepage_testimonial_update/{id}', [adminController::class, 'homepage_testimonial_update'])->name('homepage_testimonial_update');


Route::post('casinal_navbar_store', [adminController::class, 'casinal_navbar_store'])->name('casinal_navbar_store');
Route::get('casinal_navbar_edit/{id}', [adminController::class, 'casinal_navbar_edit'])->name('casinal_navbar_edit');
Route::get('casinal_navbar_delete/{id}', [adminController::class, 'casinal_navbar_delete'])->name('casinal_navbar_delete');
Route::post('casinal_navbar_update/{id}', [adminController::class, 'casinal_navbar_update'])->name('casinal_navbar_update');


Route::post('casinal_footer_store', [adminController::class, 'casinal_footer_store'])->name('casinal_footer_store');
Route::get('casinal_footer_edit/{id}', [adminController::class, 'casinal_footer_edit'])->name('casinal_footer_edit');
Route::get('casinal_footer_delete/{id}', [adminController::class, 'casinal_footer_delete'])->name('casinal_footer_delete');
Route::post('casinal_footer_update/{id}', [adminController::class, 'casinal_footer_update'])->name('casinal_footer_update');








/////////////////////// CASINAL ROUTES //////////////////
Route::get('/', [casinalController::class, 'casinal_index'])->name('casinal_index');
Route::get('casinal_about', [casinalController::class, 'casinal_about'])->name('casinal_about');
Route::get('casinal_services', [casinalController::class, 'casinal_services'])->name('casinal_services');
Route::get('casinal_blog', [casinalController::class, 'casinal_blog'])->name('casinal_blog');
Route::get('casinal_contact', [casinalController::class, 'casinal_contact'])->name('casinal_contact');
Route::get('casinal_blog_details/{id}', [casinalController::class, 'casinal_blog_details'])->name('casinal_blog_details');

Route::get('search/{text}', [casinalController::class, 'search'])->name('search');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


////////////////////////////// EMPLOYE CONTROLLER .. TESTING PRACTICE

// Route::resource('employe',Employe::class);

// Route::resource('employe',Employe::class)
// ->missing(function (Request $request){
//     return redirect()->route('employe.index');
// });




