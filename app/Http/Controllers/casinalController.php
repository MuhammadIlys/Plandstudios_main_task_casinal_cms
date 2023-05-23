<?php

namespace App\Http\Controllers;

use App\Models\Aboutcms;
use App\Models\Blogcms;
use App\Models\CasinalFooter;
use App\Models\CasinalNavbar;
use App\Models\Contactcms;
use App\Models\Homecms;
use App\Models\Homepage_courses;
use App\Models\HomepageBlog;
use App\Models\Servicescms;
use App\Models\Slidercms;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class casinalController extends Controller
{
    //
    public function casinal_index(){
        $home_slider = Slidercms::all();
        $courses = Homepage_courses::all()->where('course_page','home');
        $home_cms = Homecms::first();
        $homepage_blog = HomepageBlog::first();
        $casinal_nav = CasinalNavbar::first();  
        $casinal_footer = CasinalFooter::first();
        $testimonial = Testimonial::all()->where('testimonial_page','home');

        return view('casinal.casinal_index',compact('home_slider','home_cms','courses','homepage_blog','testimonial','casinal_nav','casinal_footer'));
    }

    public function casinal_about(){
        $about_cms = Aboutcms::first();
        $casinal_nav = CasinalNavbar::first();  
        $casinal_footer = CasinalFooter::first();
        return view('casinal.casinal_about',compact('about_cms','casinal_nav','casinal_footer'));
    }

    public function casinal_services(){
        $services_cms = Servicescms::first();
        $casinal_nav = CasinalNavbar::first();  
        $casinal_footer = CasinalFooter::first();
        $courses = Homepage_courses::all()->where('course_page','services');
        return view('casinal.casinal_services',compact('services_cms','courses','casinal_nav','casinal_footer'));
    }

    public function casinal_blog(){
        // $blog_cms = Blogcms::first();
        $casinal_nav = CasinalNavbar::first();  
        $casinal_footer = CasinalFooter::first();
        $blogs = DB::table('homepage_blogs')->where('page', 'blog')->get();
        return view('casinal.casinal_blog',compact('blogs','casinal_nav','casinal_footer'));
    }

    public function casinal_contact(){
        $contact_cms = Contactcms::first();
        $casinal_nav = CasinalNavbar::first();  
        $casinal_footer = CasinalFooter::first();
        return view('casinal.casinal_contact',compact('contact_cms','casinal_nav','casinal_footer')); 
    }

    public function casinal_blog_details($id){
        $casinal_nav = CasinalNavbar::first();  
        $casinal_footer = CasinalFooter::first();
        $blogs = DB::table('homepage_blogs')->where('id','=',$id)->where('page','=', 'blog')->first();return view('casinal.casinal_blog_details',compact('casinal_nav','casinal_footer','blogs'));
    }

    public function search($text){
        // $casinal_nav = CasinalNavbar::first();  
        // $casinal_footer = CasinalFooter::first();
        // $blogs = DB::table('homepage_blogs')->where('id','=',$id)->where('page','=', 'blog')->first();
        return $text;

    }

}
