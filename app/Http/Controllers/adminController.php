<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Aboutcms;
use App\Models\Blogcms;
use App\Models\CasinalFooter;
use App\Models\CasinalNavbar;
use App\Models\servicescms;
use App\Models\contactcms;
use App\Models\homecms;
use App\Models\Homepage_courses;
use App\Models\HomepageBlog;
use App\Models\Slidercms;
use App\Models\Testimonial;
use Facade\FlareClient\View;
use Monolog\Handler\RedisHandler;

class adminController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('admin.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    // public function test()
    // {
    //     $data = DB::connection()->getDatabaseName();
    //     return $data;
    // }


    //////////////////// HOME FUNCTIONS ///////////

    public function homecms()
    {
        $count = (int)homecms::count();
        $data = homecms::get();
        return view('admin.homecms',compact('count','data'));
    }

    public function home_cms_delete($id){
        $data = homecms::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function home_cms_edit($id)
    {
        $data = homecms::find($id);
        $count = (int)homecms::count();
        if ($count > 0) {
            return view('admin.homecms_update', compact('data','count'));
        } else {
            
            // return view('admin.homecms', compact('data', 'count'));
            return redirect()->route('homecms')->with('data','count');
        }
        
        // return view('admin.homecms_update', compact('data','count'));
    }

    public function home_cms_update(Request $request,$id)
    {

       
        $request->validate(
            [
                'coursesectiontitle' => 'required',
                'aboutsectiontitle' => 'required',
                'aboutsectiondescription' => 'required',
                'aboutsectioninnertitle' => 'required',
                'aboutsectioninnerdescription' => 'required',
                'aboutsectionimage' => 'required',
                'blogsectiontitle' => 'required',
                'blogsectiondescription' => 'required',
                'testimonialsectiontitle' => 'required',
                'consultingsectiontitle' => 'required',
                'consultingsectiondescription' => 'required',
                'consultingsectionbtntext' => 'required',
                'consultingsectionbtnlink' => 'required',
                'educationsectiontitle' => 'required',
                'educationsectionimage' => 'required',
                'educationsectionimageright' => 'required',
                'pagetype' => 'required',

            ]
        );

        $coursesectiontitle = $request->coursesectiontitle;
        $aboutsectiontitle = $request->aboutsectiontitle;
        $aboutsectiondescription = $request->aboutsectiondescription;
        $aboutsectioninnertitle = $request->aboutsectioninnertitle;
        $aboutsectioninnerdescription = $request->aboutsectioninnerdescription;

        $aboutsectionimage = $request->aboutsectionimage;
        $aboutsectionimage_original = $aboutsectionimage->getClientOriginalName();
        $aboutsectionimage_unique = time() . '_' . $aboutsectionimage_original;
        $destinationPath = public_path('/images');
        $aboutsectionimage->move($destinationPath, $aboutsectionimage_unique);

        $blogsectiontitle = $request->blogsectiontitle;
        $blogsectiondescription = $request->blogsectiondescription;
        $testimonialsectiontitle = $request->testimonialsectiontitle;
        $consultingsectiontitle = $request->consultingsectiontitle;
        $consultingsectiondescription = $request->consultingsectiondescription;
        $consultingsectionbtntext = $request->consultingsectionbtntext;
        $consultingsectionbtnlink = $request->consultingsectionbtnlink;
        $educationsectiontitle = $request->educationsectiontitle;

        $educationsectionimage = $request->educationsectionimage;
        $educationsectionimage_original = $educationsectionimage->getClientOriginalName();
        $educationsectionimage_unique = time() . '_' . $educationsectionimage_original;
        $destinationPath = public_path('/images');
        $educationsectionimage->move($destinationPath, $educationsectionimage_unique);

        $educationsectionimageright = $request->educationsectionimageright;
        $educationsectionimageright_original = $educationsectionimageright->getClientOriginalName();
        $educationsectionimageright_unique = time() . '_' . $educationsectionimageright_original;
        $destinationPath = public_path('/images');
        $educationsectionimageright->move($destinationPath, $educationsectionimageright_unique);

        $pagetype = $request->pagetype;

        $homecms = homecms::find($id);

        $homecms->coursesectiontitle = $coursesectiontitle;
        $homecms->aboutsectiontitle = $aboutsectiontitle;
        $homecms->aboutsectiondescription = $aboutsectiondescription;
        $homecms->aboutsectioninnertitle = $aboutsectioninnertitle;
        $homecms->aboutsectioninnerdescription = $aboutsectioninnerdescription;
        $homecms->aboutsectionimage = $aboutsectionimage_unique;
        $homecms->blogsectiontitle = $blogsectiontitle;
        $homecms->blogsectiondescription = $blogsectiondescription;
        $homecms->testimonialsectiontitle = $testimonialsectiontitle;
        $homecms->consultingsectiontitle = $consultingsectiontitle;
        $homecms->consultingsectiondescription = $consultingsectiondescription;
        $homecms->consultingsectionbtntext = $consultingsectionbtntext;
        $homecms->consultingsectionbtnlink = $consultingsectionbtnlink;
        $homecms->educationsectiontitle = $educationsectiontitle;
        $homecms->educationsectionimage = $educationsectionimage_unique;
        $homecms->educationsectionimageright = $educationsectionimageright_unique;
        $homecms->pagetype = $pagetype;

        $homecms->save();
        return redirect()->route('homecms');
    }
////////////////////// HOME CMS END /////////////


////////////////////// ABOUT CMS START /////////////

public function aboutcms()
{
    $count = (int)Aboutcms::count();
    $data = Aboutcms::get();
    return view('admin.aboutcms',compact('count','data'));
}

public function about_cms_edit($id)
    {
        $count = (int)Aboutcms::count();
        $data = Aboutcms::find($id);
        if($count > 0){
            return view('admin.aboutcms_update', compact('data','count'));
        }
        else{
            return redirect()->route('aboutcms')->with('data','count');
            // return view('admin.aboutcms_update', compact('data','count'));
        }
    }

    public function about_cms_update(Request $request)
    {

        $request->validate(
            [
                'abouttitle' => 'required',
                'aboutdescription' => 'required',
                'aboutinnertitle' => 'required',
                'aboutinnerdescription' => 'required',
                'aboutpagetype' => 'required',
                'aboutimage' => 'required',
            ]
        );

        $about_title = $request->abouttitle;
        $about_description = $request->aboutdescription;
        $about_innertitle = $request->aboutinnertitle;
        $aboutinner_description = $request->aboutinnerdescription;
        $about_pagetype = $request->aboutpagetype;

        $about_image = $request->aboutimage;
        $about_image_original = $about_image->getClientOriginalName();
        $about_image_unique = time() . '_' . $about_image_original;
        $destinationPath = public_path('/images');
        $about_image->move($destinationPath, $about_image_unique);

        $about_cms = aboutcms::first();

        $about_cms->about_title = $about_title;
        $about_cms->about_description = $about_description;
        $about_cms->about_inner_title = $about_innertitle;
        $about_cms->about_inner_description = $aboutinner_description;
        $about_cms->page_type = $about_pagetype;
        $about_cms->about_image = $about_image_unique;

        $about_cms->save();
        return redirect()->route('aboutcms');
    }  


public function about_cms_delete($id){
    $data = Aboutcms::find($id);
    $data->delete();
    return redirect()->back();
}


////////////////////// ABOUT CMS END /////////////


////////////////////// SERVICES CMS START /////////////

public function servicescms()
{
    $count = (int)servicescms::count();
    $data = servicescms::get();

    return view('admin.servicescms',compact('count','data'));
}

public function services_cms_edit($id)
{
    $services_count = (int)servicescms::count();
    $data = servicescms::find($id);
   
    if ($services_count > 0) {
        return view('admin.servicescms_update', compact('data','data'));
    } else {
        
        return redirect()->route('servicescms')->with('data','services_count');
        // return view('admin.servicescms', compact('services', 'services_count'));
    }
}

public function services_cms_update(Request $request,$id)
{

    $services_title = $request->servicestitle;
    $services_pagetype = $request->pagetype;

    $services = servicescms::find($id);
    $services->servicestitle = $services_title;
    $services->pagetype = $services_pagetype;

    $services->save();
    return redirect()->route('servicescms');
}

public function services_cms_delete($id){
    $data = servicescms::find($id);
    $data->delete();
    return redirect()->back();
}



////////////////////// SERVICES CMS END /////////////






    public function homepage_courses()
    {
        $courses = homepage_courses::get();
        $count = (int)homepage_courses::count();
        return view('admin.homepage_courses', compact('courses','count'));
    }

    public function blogcms()
    {
        $count = (int)Blogcms::count();
        $data = Blogcms::get();
        return view('admin.blogcms',compact('count','data'));
    }

    public function contactcms()
    {
        $count = (int)contactcms::count();
        $data = contactcms::get();
        return view('admin.contactcms',compact('count','data'));
    }

    public function casinal_navbar()
    {
        $data = CasinalNavbar::get();
        $count = (int)CasinalNavbar::count();
        return view('admin.casinal_navbar', compact('data','count'));
    }

    public function casinal_footer()
    {
        $casinal_footer = CasinalFooter::get();
        $count = (int)CasinalFooter::count();
        return view("admin.casinal_footer", compact('casinal_footer','count'));
    }

    public function homeslider()
    {
        $count = (int)Slidercms::count();
        $data = Slidercms::get();
        return view('admin.homeslider',compact('count','data'));
    }

 




    /////////////   GETTING FORMS DATA ///////////

    public function about_cms(Request $request)
    {
        $request->validate(
            [
                'abouttitle' => 'required',
                'aboutdescription' => 'required',
                'aboutinnertitle' => 'required',
                'aboutinnerdescription' => 'required',
                'aboutpagetype' => 'required',
                'aboutimage' => 'required',
            ]
        );
        $about_title = $request->abouttitle;
        $about_description = $request->aboutdescription;
        $about_inner_title = $request->aboutinnertitle;
        $about_inner_description = $request->aboutinnerdescription;
        $about_page_type = $request->aboutpagetype;

        $about_image = $request->aboutimage;
        $original_name = $about_image->getClientOriginalName();
        $img_unique_name = time() . '_' . $original_name;
        $destinationPath = public_path('/images');

        $about_image->move($destinationPath, $img_unique_name);

        $about_cms = new Aboutcms;
        $about_cms->about_title = $about_title;
        $about_cms->about_description = $about_description;
        $about_cms->about_inner_title = $about_inner_title;
        $about_cms->about_inner_description = $about_inner_description;
        $about_cms->page_type = $about_page_type;
        $about_cms->about_image = $img_unique_name;
        $about_cms->save();

        return redirect()->back();

        // dd($about_title, $about_description, $about_inner_title, $about_inner_description, $about_page_type, $about_image,$img_unique_name);
    }




    public function blog_cms(Request $request)
    {
        $request->validate(
            [
                'blogtitle' => 'required',
                'blogdescription' => 'required',
                'pagetype' => 'required',
            ]
        );
        $blog_title = $request->blogtitle;
        $blog_description = $request->blogdescription;
        $blog_page_type = $request->pagetype;

        $blog_cms = new Blogcms;

        $blog_cms->blogtitle = $blog_title;
        $blog_cms->blogdescription = $blog_description;
        $blog_cms->pagetype = $blog_page_type;

        $blog_cms->save();
        return redirect()->back();
    }





    public function contact_cms(Request $request)
    {
        $request->validate(
            [
                'consultingtitle' => 'required',
                'consultingdescription' => 'required',
                'consultingbtntext' => 'required',
                'consultingbtnlink' => 'required',
                'educationtitle' => 'required',
                'educationimage' => 'required',
                'educationimageright' => 'required',
                'pagetype' => 'required',
            ]
        );
        $consultingtitle = $request->consultingtitle;
        $consultingdescription = $request->consultingdescription;
        $consultingbtntext = $request->consultingbtntext;
        $consultingbtnlink = $request->consultingbtnlink;
        $educationtitle = $request->educationtitle;

        $educationimage = $request->educationimage;
        $educationimage_original = $educationimage->getClientOriginalName();
        $educationimage_unique = time() . '_' . $educationimage_original;
        $destinationPath = public_path('/images');
        $educationimage->move($destinationPath, $educationimage_unique);

        $educationimageright = $request->educationimageright;
        $educationimage_right_original = $educationimageright->getClientOriginalName();
        $educationimage_right_unique = time() . '_' . $educationimage_right_original;
        $educationimageright->move($destinationPath, $educationimage_right_unique);

        $pagetype = $request->pagetype;

        $contact_cms = new contactcms;

        $contact_cms->consultingtitle = $consultingtitle;
        $contact_cms->consultingdescription = $consultingdescription;
        $contact_cms->consultingbtntext = $consultingbtntext;
        $contact_cms->consultingbtnlink = $consultingbtnlink;
        $contact_cms->educationtitle = $educationtitle;
        $contact_cms->educationbgimage = $educationimage_unique;
        $contact_cms->educationrightimage = $educationimage_right_unique;
        $contact_cms->pagetype = $pagetype;
        $contact_cms->save();

        return redirect()->back();





        // dd($consultingtitle, $consultingdescription, $consultingbtntext, $consultingbtnlink, $educationtitle, $educationimage_unique, $educationimage_right_unique, $pagetype);
    }




    public function services_cms(Request $request)
    {
        $request->validate(
            [
                'servicestitle' => 'required',
                'pagetype' => 'required',
            ]
        );
        $services_title = $request->servicestitle;
        $pagetype = $request->pagetype;

        $services_cms = new servicescms;
        $services_cms->servicestitle = $services_title;
        $services_cms->pagetype = $pagetype;
        $services_cms->save();
        return redirect()->back();
    }



    public function home_cms(Request $request)
    {
        $request->validate(
            [
                'coursesectiontitle' => 'required',
                'aboutsectiontitle' => 'required',
                'aboutsectiondescription' => 'required',
                'aboutsectioninnertitle' => 'required',
                'aboutsectioninnerdescription' => 'required',
                'aboutsectionimage' => 'required',
                'blogsectiontitle' => 'required',
                'blogsectiondescription' => 'required',
                'testimonialsectiontitle' => 'required',
                'consultingsectiontitle' => 'required',
                'consultingsectiondescription' => 'required',
                'consultingsectionbtntext' => 'required',
                'consultingsectionbtnlink' => 'required',
                'educationsectiontitle' => 'required',
                'educationsectionimage' => 'required',
                'educationsectionimageright' => 'required',
                'pagetype' => 'required',
            ]
        );
        $course_section_title = $request->coursesectiontitle;
        $about_section_title = $request->aboutsectiontitle;
        $about_section_desc = $request->aboutsectiondescription;
        $about_section_innertitle = $request->aboutsectioninnertitle;
        $about_section_innerdesc = $request->aboutsectioninnerdescription;

        $about_section_img = $request->aboutsectionimage;
        $about_section_original = $about_section_img->getClientOriginalName();
        $about_section_unique = time() . '_' . $about_section_original;
        $destinationPath = public_path('/images');
        $about_section_img->move($destinationPath, $about_section_unique);


        $blog_section_title = $request->blogsectiontitle;
        $blog_section_desc = $request->blogsectiondescription;
        $testimonial_section_title = $request->testimonialsectiontitle;
        $consulting_section_title = $request->consultingsectiontitle;
        $consulting_section_desc = $request->consultingsectiondescription;
        $consulting_section_btntext = $request->consultingsectionbtntext;
        $consulting_section_btnlink = $request->consultingsectionbtnlink;
        $education_section_title = $request->educationsectiontitle;


        $education_section_image = $request->educationsectionimage;
        $education_section_original = $education_section_image->getClientOriginalName();
        $education_section_unique = time() . '_' . $education_section_original;
        $destinationPath = public_path('/images');
        $education_section_image->move($destinationPath, $education_section_unique);


        $education_section_image_right = $request->educationsectionimageright;
        $education_section_image_right_original = $education_section_image_right->getClientOriginalName();
        $education_section_image_right_unique = time() . '_' . $education_section_image_right_original;
        $education_section_image_right->move($destinationPath, $education_section_image_right_unique);

        $pagetype = $request->pagetype;

        $home_cms = new homecms;

        $home_cms->coursesectiontitle = $course_section_title;
        $home_cms->aboutsectiontitle = $about_section_title;
        $home_cms->aboutsectiondescription = $about_section_desc;
        $home_cms->aboutsectioninnertitle = $about_section_innertitle;
        $home_cms->aboutsectioninnerdescription = $about_section_innerdesc;
        $home_cms->aboutsectionimage = $about_section_unique;
        $home_cms->blogsectiontitle = $blog_section_title;
        $home_cms->blogsectiondescription = $blog_section_desc;
        $home_cms->testimonialsectiontitle = $testimonial_section_title;
        $home_cms->consultingsectiontitle = $consulting_section_title;
        $home_cms->consultingsectiondescription = $consulting_section_desc;
        $home_cms->consultingsectionbtntext = $consulting_section_btntext;
        $home_cms->consultingsectionbtnlink = $consulting_section_btnlink;
        $home_cms->educationsectiontitle = $education_section_title;
        $home_cms->educationsectionimage = $education_section_unique;
        $home_cms->educationsectionimageright = $education_section_image_right_unique;
        $home_cms->pagetype = $pagetype;

        $home_cms->save();
        return redirect()->back();

        // dd($course_section_title,$about_section_title,$about_section_desc,$about_section_innertitle,$about_section_innerdesc, $about_section_unique, $blog_section_title,$blog_section_desc, $testimonial_section_title, $consulting_section_title, $consulting_section_desc, $consulting_section_btntext, $consulting_section_btnlink, $education_section_title, $education_section_unique, $education_section_image_right_unique, $pagetype);
    }




    public function homeslider_cms(Request $request)
    {
        $request->validate(
            [
                'slider_title' => 'required',
                'slider_description' => 'required',
                'slider_image' => 'required',
                'slider_btn_one_text' => 'required',
                'slider_btn_one_link' => 'required',
                'slider_btn_two_text' => 'required',
                'slider_btn_two_link' => 'required',
                'slider_background_image' => 'required',
                'slider_page_type' => 'required',

            ]
        );

        $slider_title = $request->slider_title;
        $slider_description = $request->slider_description;

        $slider_image = $request->slider_image;
        $slider_image_original = $slider_image->getClientOriginalName();
        $slider_image_unique = time() . '_' . $slider_image_original;
        $destinationPath = public_path('/images');
        $slider_image->move($destinationPath, $slider_image_unique);

        $slider_btn_one_text = $request->slider_btn_one_text;
        $slider_btn_one_link = $request->slider_btn_one_link;
        $slider_btn_two_text = $request->slider_btn_two_text;
        $slider_btn_two_link = $request->slider_btn_two_link;

        $slider_background_image = $request->slider_background_image;
        $slider_background_original = $slider_background_image->getClientOriginalName();
        $slider_background_image_unique = time() . '_' . $slider_background_original;
        $destinationPath = public_path('/images');
        $slider_background_image->move($destinationPath, $slider_background_image_unique);

        $slider_page_type = $request->slider_page_type;

        $slider_cms = new Slidercms;

        $slider_cms->slider_title = $slider_title;
        $slider_cms->slider_description = $slider_description;
        $slider_cms->slider_image = $slider_image_unique;
        $slider_cms->slider_btn_one_text = $slider_btn_one_text;
        $slider_cms->slider_btn_one_link = $slider_btn_one_link;
        $slider_cms->slider_btn_two_text = $slider_btn_two_text;
        $slider_cms->slider_btn_two_link = $slider_btn_two_link;
        $slider_cms->slider_background_image = $slider_background_image_unique;
        $slider_cms->slider_page_type = $slider_page_type;

        $slider_cms->save();
        return redirect()->back();





        // dd($slider_title, $slider_description, $slider_image_unique, $slider_btn_one_text, $slider_btn_one_link, $slider_btn_two_text, $slider_btn_two_link, $slider_background_image_unique, $slider_page_type);
    }


    /////////////////////////  UPDATING FORMS DATA /////////////////



    public function blog_cms_edit($id)
    {
        
        $data = blogcms::find($id);
        // dd($data);
        // $count = (int)blogcms::count();
        
        if($data){
            // return view('admin.blogcms_update', compact('data','count'));
            return view('admin.blogcms_update')->with('data', $data);

        }
        else{
            return redirect()->route('blogcms')->with('data','count');
            
            // return view('admin.aboutcms_update', compact('data','count'));
        }
    }

    public function blog_cms_delete($id){
        $data = Blogcms::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function blog_cms_update(Request $request,$id)
    {

        $request->validate(
            [
                'blogtitle' => 'required',
                'blogdescription' => 'required',
                'pagetype' => 'required',

            ]
        );

        $blog_title = $request->blogtitle;
        $blog_description = $request->blogdescription;
        $blog_pagetype = $request->pagetype;
        
        $blog_cms = Blogcms::find($id);
        $blog_cms->blogtitle = $blog_title;
        $blog_cms->blogdescription = $blog_description;
        $blog_cms->pagetype = $blog_pagetype;
        $blog_cms->save();

        return redirect()->route('blogcms');
    }


    public function contact_cms_edit($id)
    {

        $data = contactcms::find($id);
        $count = (int)contactcms::count();
        if($count > 0){
            return view('admin.contactcms_update', compact('data','count'));

        }
        else{
            return redirect()->route('contactcms')->with('data','count');
            // return view('admin.aboutcms_update', compact('data','count'));
        }
    }

    public function contact_cms_delete($id){
        $data = contactcms::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function contact_cms_update(Request $request,$id)
    {

        
        $request->validate(
            [
                'consultingtitle' => 'required',
                'consultingdescription' => 'required',
                'consultingbtntext' => 'required',
                'consultingbtnlink' => 'required',
                'educationtitle' => 'required',
                'educationimage' => 'required',
                'educationimageright' => 'required',
                'pagetype' => 'required',

            ]
        );

        $consulting_title = $request->consultingtitle;
        $consulting_desc = $request->consultingdescription;
        $consulting_btntext = $request->consultingbtntext;
        $consulting_btnlink = $request->consultingbtnlink;
        $education_title = $request->educationtitle;

        $education_image = $request->educationimage;
        $education_image_original = $education_image->getClientOriginalName();
        $education_image_unique = time() . '_' . $education_image_original;
        $destinationPath = public_path('/images');
        $education_image->move($destinationPath, $education_image_unique);

        $education_imageright = $request->educationimageright;
        $education_imageright_original = $education_imageright->getClientOriginalName();
        $education_imageright_unique = time() . '_' . $education_imageright_original;
        $destinationPath = public_path('/images');
        $education_imageright->move($destinationPath, $education_imageright_unique);

        $pagetype = $request->pagetype;

        $contact_cms = contactcms::find($id);

        $contact_cms->consultingtitle = $consulting_title;
        $contact_cms->consultingdescription = $consulting_desc;
        $contact_cms->consultingbtntext = $consulting_btntext;
        $contact_cms->consultingbtnlink = $consulting_btnlink;
        $contact_cms->educationtitle = $education_title;
        $contact_cms->educationbgimage = $education_image_unique;
        $contact_cms->educationrightimage = $education_imageright_unique;
        $contact_cms->pagetype = $pagetype;
        $contact_cms->save();


        return redirect()->back();
    }




    public function homeslider_cms_edit($id)
    {
        $data = Slidercms::find($id);
        // return view('admin.homeslider_cms_update')->with('data');
        return view('admin.homeslider_cms_update',compact('data'));
    }

    public function homeslider_cms_update(Request $request, $id)
    {

        $request->validate(
            [
                'slider_title' => 'required',
                'slider_description' => 'required',
                'slider_image' => 'required',
                'slider_btn_one_text' => 'required',
                'slider_btn_one_link' => 'required',
                'slider_btn_two_text' => 'required',
                'slider_btn_two_link' => 'required',
                'slider_background_image' => 'required',
                'slider_page_type' => 'required',

            ]
        );


        $slidertitle = $request->slider_title;
        $slider_description = $request->slider_description;

        $slider_image = $request->slider_image;
        $slider_image_original = $slider_image->getClientOriginalName();
        $slider_image_unique = time() . '_' . $slider_image_original;
        $destinationPath = public_path('/images');
        $slider_image->move($destinationPath, $slider_image_unique);

        $slider_btn_one_text = $request->slider_btn_one_text;
        $slider_btn_one_link = $request->slider_btn_one_link;
        $slider_btn_two_text = $request->slider_btn_two_text;
        $slider_btn_two_link = $request->slider_btn_two_link;

        $slider_background_image = $request->slider_background_image;
        $slider_background_image_original = $slider_background_image->getClientOriginalName();
        $slider_background_image_unique = time() . '_' . $slider_background_image_original;
        $destinationPath = public_path('/images');
        $slider_background_image->move($destinationPath, $slider_background_image_unique);

        $slider_page_type = $request->slider_page_type;

        $slider_cms = Slidercms::find($id);

        $slider_cms->slider_title = $slidertitle;
        $slider_cms->slider_description = $slider_description;
        $slider_cms->slider_image = $slider_image_unique;
        $slider_cms->slider_btn_one_text = $slider_btn_one_text;
        $slider_cms->slider_btn_one_link = $slider_btn_one_link;
        $slider_cms->slider_btn_two_text = $slider_btn_two_text;
        $slider_cms->slider_btn_two_link = $slider_btn_two_link;
        $slider_cms->slider_background_image = $slider_background_image_unique;
        $slider_cms->slider_page_type = $slider_page_type;

        $slider_cms->save();
        return redirect()->back();
    }

    //////////////////////// REPEATING DATA FORMS //////////////////

    public function homepage_courses_create(Request $request)
    {
        $request->validate(
            [
                'course_title' => 'required',
                'course_page' => 'required',
                'course_image' => 'required',
            ]
        );

        $course_title = $request->course_title;
        $course_page = $request->course_page;

        $course_image = $request->course_image;
        $course_imageoriginal = $course_image->getClientOriginalName();
        $course_image_unique = time() . '_' . $course_imageoriginal;
        $destinationPath = public_path('/images');
        $course_image->move($destinationPath, $course_image_unique);

        $courses = new Homepage_courses;

        $courses->course_title = $course_title;
        $courses->course_image = $course_image_unique;
        $courses->course_page = $course_page;
        $courses->save();

        return redirect()->back();
    }

    public function homepage_courses_delete($id)
    {
        $course = Homepage_courses::find($id);
        $course->delete();
        return redirect()->back();
    }


    public function course_edit($id)
    {
        $course = Homepage_courses::find($id);
        return view('admin.course_edit', compact('course'));
    }

    public function homepage_courses_update(Request $request, $id)
    {
        $request->validate(
            [
                'course_title' => 'required',
                'course_page' => 'required',
                'course_image' => 'required',
            ]
        );

        $course_title = $request->course_title;
        $course_page = $request->course_page;

        $course_image = $request->course_image;
        $course_image_original = $course_image->getClientOriginalName();
        $course_image_unique = time() . '_' . $course_image_original;
        $destinationPath = public_path('/images');
        $course_image->move($destinationPath, $course_image_unique);


        $course = Homepage_courses::find($id);
        $course->course_title = $course_title;
        $course->course_page = $course_page;
        $course->course_image = $course_image_unique;
        $course->save();

        return redirect()->route('homepage_courses');
    }

    public function homepage_blog()
    {
        $homepage_blog = HomepageBlog::get();
        return view('admin.homepage_blog', compact('homepage_blog'));
    }

    public function homepage_blog_store(Request $request)
    {
        $request->validate(
            [
                'blog_title' => 'required',
                'blog_desc' => 'required',
                'blog_page' => 'required',
                'blog_image' => 'required',

            ]
        );
        $blog_title = $request->blog_title;
        $blog_desc = $request->blog_desc;
        // $blog_btn_text = $request->blog_btn_text;
        // $blog_btn_link = $request->blog_btn_link;
        $blog_page = $request->blog_page;

        $blog_image = $request->blog_image;
        $blog_image_original = $blog_image->getClientOriginalName();
        $blog_image_unique = time() . '_' . $blog_image_original;
        $destinationPath = public_path('/images');
        $blog_image->move($destinationPath, $blog_image_unique);

        $homepage_blog = new HomepageBlog;
        $homepage_blog->blog_title = $blog_title;
        $homepage_blog->blog_description = $blog_desc;
        // $homepage_blog->blog_btn_text = $blog_btn_text;
        // $homepage_blog->blog_btn_link = $blog_btn_link;
        $homepage_blog->page = $blog_page;
        $homepage_blog->blog_image = $blog_image_unique;
        $homepage_blog->save();

        return redirect()->back();

        ///// INSERTION DONE .. 

    }

    public function homepage_blog_edit($id)
    {
        $blogs = HomepageBlog::find($id);
        return view('admin.homepage_blog_edit', compact('blogs'));
    }

    public function homepage_blog_update(Request $request, $id)
    {
        $blogs = HomepageBlog::find($id);
        $request->validate(
            [
                'blog_title' => 'required',
                'blog_desc' => 'required',
                // 'blog_btn_text' => 'required',
                // 'blog_btn_link' => 'required',
                'blog_page' => 'required',
                'blog_image' => 'required',

            ]
        );

        $blog_title = $request->blog_title;
        $blog_desc = $request->blog_desc;
        // $blog_btn_text = $request->blog_btn_text;
        // $blog_btn_link = $request->blog_btn_link;
        $blog_page = $request->blog_page;

        $blog_image = $request->blog_image;
        $blog_image_original = $blog_image->getClientOriginalName();
        $blog_image_unique = time() . '_' . $blog_image_original;
        $destinationPath = public_path('/images');
        $blog_image->move($destinationPath, $blog_image_unique);

        $blog = HomepageBlog::find($id);
        $blog->blog_title = $blog_title;
        $blog->blog_description = $blog_desc;
        // $blog->blog_btn_text = $blog_btn_text;
        // $blog->blog_btn_link = $blog_btn_link;
        $blog->page = $blog_page;
        $blog->blog_image = $blog_image_unique;
        $blog->save();

        return redirect()->route('homepage_blog');
    }

    public function homepage_blog_delete($id)
    {
        $blog = HomepageBlog::find($id);
        $blog->delete();
        return redirect()->back();
    }



    /////////////// HOMEPAGE TESTIMONIAL /////////////

    public function homepage_testimonial()
    {
        $testimonial = Testimonial::get();
        $count = Testimonial::count();
        return view('admin.homepage_testimonial', compact('testimonial','count'));
    }

    public function homepage_testimonial_store(Request $request)
    {

        $request->validate(
            [
                'testimonial_title' => 'required',
                'testimonial_desc' => 'required',
                'testimonial_page' => 'required',
                'testimonial_image' => 'required',

            ]
        );

        $testimonial_title = $request->testimonial_title;
        $testimonial_desc = $request->testimonial_desc;
        $testimonial_page = $request->testimonial_page;

        $testimonial_img = $request->testimonial_image;
        $testimonial_img_original = $testimonial_img->getClientOriginalName();
        $testimonial_img_unique = time() . '_' . $testimonial_img_original;
        $destinationPath = public_path('/images');
        $testimonial_img->move($destinationPath, $testimonial_img_unique);


        $testimonial = new Testimonial;
        $testimonial->testimonial_title = $testimonial_title;
        $testimonial->testimonial_description = $testimonial_desc;
        $testimonial->testimonial_page = $testimonial_page;
        $testimonial->testimonial_image = $testimonial_img_unique;
        $testimonial->save();

        return redirect()->back();
    }


    public function homepage_testimonial_delete($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back();
    }

    public function homepage_testimonial_edit($id)
    {
        $count = Testimonial::count();
        $testimonial = Testimonial::find($id);
        if($count){
            return view('admin.homepage_testimonial_update', compact('testimonial'));
        }
        else{
            return view('admin.homepage_testimonial', compact('testimonial','count'));
        }

    }

    public function homepage_testimonial_update(Request $request, $id)
    {
        $request->validate(
            [
                'testimonial_title' => 'required',
                'testimonial_desc' => 'required',
                'testimonial_page' => 'required',
                'testimonial_image' => 'required',

            ]
        );

        $testimonial_title = $request->testimonial_title;
        $testimonial_desc = $request->testimonial_desc;
        $testimonial_page = $request->testimonial_page;

        $testimonial_img = $request->testimonial_image;
        $testimonial_img_original = $testimonial_img->getClientOriginalName();
        $testimonial_img_unique = time() . '_' . $testimonial_img_original;
        $destinationPath = public_path('/images');
        $testimonial_img->move($destinationPath, $testimonial_img_unique);


        $testimonial = Testimonial::find($id);
        $testimonial->testimonial_title = $testimonial_title;
        $testimonial->testimonial_description = $testimonial_desc;
        $testimonial->testimonial_page = $testimonial_page;
        $testimonial->testimonial_image = $testimonial_img_unique;
        $testimonial->save();

        return redirect()->route('homepage_testimonial');
    }

    public function casinal_navbar_store(Request $request)
    {

        $request->validate(
            [
                'casinal_navbar_logo' => 'required',
                'casinal_navbar_fb_icon' => 'required',
                'casinal_navbar_fb_link' => 'required',
                'casinal_navbar_insta_icon' => 'required',
                'casinal_navbar_insta_link' => 'required',
                'casinal_navbar_twitter_icon' => 'required',
                'casinal_navbar_twitter_link' => 'required',
                'casinal_navbar_linkedin_icon' => 'required',
                'casinal_navbar_linkedin_link' => 'required',

            ]
        );


        $casinal_navbar_logo = $request->casinal_navbar_logo;
        $casinal_navbar_logo_original = $casinal_navbar_logo->getClientOriginalName();
        $casinal_navbar_logo_unique = time() . '_' . $casinal_navbar_logo_original;
        $destinationPath = public_path('/images/navbar');
        $casinal_navbar_logo->move($destinationPath, $casinal_navbar_logo_unique);


        $casinal_navbar_fb_icon = $request->casinal_navbar_fb_icon;
        $casinal_navbar_fb_icon_original = $casinal_navbar_fb_icon->getClientOriginalName();
        $casinal_navbar_fb_icon_unique = time() . '_' . $casinal_navbar_fb_icon_original;
        $casinal_navbar_fb_icon->move($destinationPath, $casinal_navbar_fb_icon_unique);

        $casinal_navbar_fb_link = $request->casinal_navbar_fb_link;

        $casinal_navbar_insta_icon = $request->casinal_navbar_insta_icon;
        $casinal_navbar_insta_icon_original = $casinal_navbar_insta_icon->getClientOriginalName();
        $casinal_navbar_insta_icon_unique = time() . '_' . $casinal_navbar_insta_icon_original;
        $casinal_navbar_insta_icon->move($destinationPath, $casinal_navbar_insta_icon_unique);

        $casinal_navbar_insta_link = $request->casinal_navbar_insta_link;

        $casinal_navbar_twitter_icon = $request->casinal_navbar_twitter_icon;
        $casinal_navbar_twitter_icon_original = $casinal_navbar_twitter_icon->getClientOriginalName();
        $casinal_navbar_twitter_icon_unique = time() . '_' . $casinal_navbar_twitter_icon_original;
        $casinal_navbar_twitter_icon->move($destinationPath, $casinal_navbar_twitter_icon_unique);


        $casinal_navbar_twitter_link = $request->casinal_navbar_twitter_link;

        $casinal_navbar_linkedin_icon = $request->casinal_navbar_linkedin_icon;
        $casinal_navbar_linkedin_icon_original = $casinal_navbar_linkedin_icon->getClientOriginalName();
        $casinal_navbar_linkedin_icon_unique = time() . '_' . $casinal_navbar_linkedin_icon_original;
        $casinal_navbar_linkedin_icon->move($destinationPath, $casinal_navbar_linkedin_icon_unique);

        $casinal_navbar_linkedin_link = $request->casinal_navbar_linkedin_link;

        $casinal_navbar = new CasinalNavbar;
        $casinal_navbar->casinal_navbar_logo = $casinal_navbar_logo_unique;
        $casinal_navbar->casinal_navbar_fb_icon = $casinal_navbar_fb_icon_unique;
        $casinal_navbar->casinal_navbar_fb_link = $casinal_navbar_fb_link;
        $casinal_navbar->casinal_navbar_insta_icon = $casinal_navbar_insta_icon_unique;
        $casinal_navbar->casinal_navbar_insta_link = $casinal_navbar_insta_link;
        $casinal_navbar->casinal_navbar_twitter_icon = $casinal_navbar_twitter_icon_unique;
        $casinal_navbar->casinal_navbar_twitter_link = $casinal_navbar_twitter_link;
        $casinal_navbar->casinal_navbar_linkedin_icon = $casinal_navbar_linkedin_icon_unique;
        $casinal_navbar->casinal_navbar_linkedin_link = $casinal_navbar_linkedin_link;
        $casinal_navbar->save();
        return redirect()->back();
    }

    public function casinal_navbar_edit($id)
    {
        $navbar = CasinalNavbar::find($id);
        return view('admin.casinal_navbar_edit', compact('navbar'));
    }

    public function casinal_navbar_update(Request $request, $id)
    {

        $request->validate(
            [
                'casinal_navbar_logo' => 'required',
                'casinal_navbar_fb_icon' => 'required',
                'casinal_navbar_fb_link' => 'required',
                'casinal_navbar_insta_icon' => 'required',
                'casinal_navbar_insta_link' => 'required',
                'casinal_navbar_twitter_icon' => 'required',
                'casinal_navbar_twitter_link' => 'required',
                'casinal_navbar_linkedin_icon' => 'required',
                'casinal_navbar_linkedin_link' => 'required',

            ]
        );

        $casinal_navbar_logo = $request->casinal_navbar_logo;
        $casinal_navbar_logo_original = $casinal_navbar_logo->getClientOriginalName();
        $casinal_navbar_logo_unique = time() . '_' . $casinal_navbar_logo_original;
        $destinationPath = public_path('/images/navbar');
        $casinal_navbar_logo->move($destinationPath, $casinal_navbar_logo_unique);


        $casinal_navbar_fb_icon = $request->casinal_navbar_fb_icon;
        $casinal_navbar_fb_icon_original = $casinal_navbar_fb_icon->getClientOriginalName();
        $casinal_navbar_fb_icon_unique = time() . '_' . $casinal_navbar_fb_icon_original;
        $casinal_navbar_fb_icon->move($destinationPath, $casinal_navbar_fb_icon_unique);

        $casinal_navbar_fb_link = $request->casinal_navbar_fb_link;

        $casinal_navbar_insta_icon = $request->casinal_navbar_insta_icon;
        $casinal_navbar_insta_icon_original = $casinal_navbar_insta_icon->getClientOriginalName();
        $casinal_navbar_insta_icon_unique = time() . '_' . $casinal_navbar_insta_icon_original;
        $casinal_navbar_insta_icon->move($destinationPath, $casinal_navbar_insta_icon_unique);

        $casinal_navbar_insta_link = $request->casinal_navbar_insta_link;

        $casinal_navbar_twitter_icon = $request->casinal_navbar_twitter_icon;
        $casinal_navbar_twitter_icon_original = $casinal_navbar_twitter_icon->getClientOriginalName();
        $casinal_navbar_twitter_icon_unique = time() . '_' . $casinal_navbar_twitter_icon_original;
        $casinal_navbar_twitter_icon->move($destinationPath, $casinal_navbar_twitter_icon_unique);


        $casinal_navbar_twitter_link = $request->casinal_navbar_twitter_link;

        $casinal_navbar_linkedin_icon = $request->casinal_navbar_linkedin_icon;
        $casinal_navbar_linkedin_icon_original = $casinal_navbar_linkedin_icon->getClientOriginalName();
        $casinal_navbar_linkedin_icon_unique = time() . '_' . $casinal_navbar_linkedin_icon_original;
        $casinal_navbar_linkedin_icon->move($destinationPath, $casinal_navbar_linkedin_icon_unique);

        $casinal_navbar_linkedin_link = $request->casinal_navbar_linkedin_link;

        $navbar = CasinalNavbar::find($id);
        $navbar->casinal_navbar_logo = $casinal_navbar_logo_unique;
        $navbar->casinal_navbar_fb_icon = $casinal_navbar_fb_icon_unique;
        $navbar->casinal_navbar_fb_link = $casinal_navbar_fb_link;
        $navbar->casinal_navbar_insta_icon = $casinal_navbar_insta_icon_unique;
        $navbar->casinal_navbar_insta_link = $casinal_navbar_insta_link;
        $navbar->casinal_navbar_twitter_icon = $casinal_navbar_twitter_icon_unique;
        $navbar->casinal_navbar_twitter_link = $casinal_navbar_twitter_link;
        $navbar->casinal_navbar_linkedin_icon = $casinal_navbar_linkedin_icon_unique;
        $navbar->casinal_navbar_linkedin_link = $casinal_navbar_linkedin_link;
        $navbar->save();

        return redirect()->route('casinal_navbar');
    }

    public function casinal_navbar_delete($id)
    {
        $navbar = CasinalNavbar::find($id);
        $navbar->delete();
        return redirect()->back();
    }

    ///////////////////////// CASINAL FOOTER ///////////

    public function casinal_footer_store(Request $request)
    {

        $request->validate(
            [
                'casinal_footer_phone_icon' => 'required',
                'casinal_footer_phone_number' => 'required',
                'casinal_footer_email_icon' => 'required',
                'casinal_footer_email' => 'required',
                'casinal_footer_information' => 'required',
                'casinal_footer_logo' => 'required',
            ]
        );

        $casinal_footer_phone_icon = $request->casinal_footer_phone_icon;
        $casinal_footer_phone_icon_original = $casinal_footer_phone_icon->getClientOriginalName();
        $casinal_footer_phone_icon_unique = time() . '_' . $casinal_footer_phone_icon_original;
        $destinationPath = public_path('/images/footer');
        $casinal_footer_phone_icon->move($destinationPath, $casinal_footer_phone_icon_unique);

        $casinal_footer_phone_number = $request->casinal_footer_phone_number;

        $casinal_footer_email_icon = $request->casinal_footer_email_icon;
        $casinal_footer_email_icon_original = $casinal_footer_email_icon->getClientOriginalName();
        $casinal_footer_email_icon_unique = time() . '_' . $casinal_footer_email_icon_original;
        $destinationPath = public_path('/images/footer');
        $casinal_footer_email_icon->move($destinationPath, $casinal_footer_email_icon_unique);

        $casinal_footer_email = $request->casinal_footer_email;
        $casinal_footer_information = $request->casinal_footer_information;

        $casinal_footer_logo = $request->casinal_footer_logo;
        $casinal_footer_logo_original = $casinal_footer_logo->getClientOriginalName();
        $casinal_footer_logo_unique = time() . '_' . $casinal_footer_logo_original;
        $destinationPath = public_path('/images/footer');
        $casinal_footer_logo->move($destinationPath, $casinal_footer_logo_unique);

        $casinal_footer = new CasinalFooter;

        $casinal_footer->contact_icon = $casinal_footer_phone_icon_unique;
        $casinal_footer->contact = $casinal_footer_phone_number;
        $casinal_footer->email_icon = $casinal_footer_email_icon_unique;
        $casinal_footer->email = $casinal_footer_email;
        $casinal_footer->footer_information = $casinal_footer_information;
        $casinal_footer->footer_logo = $casinal_footer_logo_unique;
        $casinal_footer->save();
        return redirect()->back();

        /////////////// SEND TO DB ////////////


    }

    public function casinal_footer_edit($id)
    {
        $casinal_footer = CasinalFooter::find($id);
        return view('admin.casinal_footer_edit', compact('casinal_footer'));
    }

    public function casinal_footer_update(Request $request, $id)
    {
        $request->validate(
            [
                'casinal_footer_phone_icon' => 'required',
                'casinal_footer_phone_number' => 'required',
                'casinal_footer_email_icon' => 'required',
                'casinal_footer_email' => 'required',
                'casinal_footer_information' => 'required',
                'casinal_footer_logo' => 'required',
            ]
        );

        $casinal_footer_phone_icon = $request->casinal_footer_phone_icon;
        $casinal_footer_phone_icon_original = $casinal_footer_phone_icon->getClientOriginalName();
        $casinal_footer_phone_icon_unique = time() . '_' . $casinal_footer_phone_icon_original;
        $destinationPath = public_path('/images/footer');
        $casinal_footer_phone_icon->move($destinationPath, $casinal_footer_phone_icon_unique);

        $casinal_footer_phone_number = $request->casinal_footer_phone_number;

        $casinal_footer_email_icon = $request->casinal_footer_email_icon;
        $casinal_footer_email_icon_original = $casinal_footer_email_icon->getClientOriginalName();
        $casinal_footer_email_icon_unique = time() . '_' . $casinal_footer_email_icon_original;
        $destinationPath = public_path('/images/footer');
        $casinal_footer_email_icon->move($destinationPath, $casinal_footer_email_icon_unique);

        $casinal_footer_email = $request->casinal_footer_email;
        $casinal_footer_information = $request->casinal_footer_information;

        $casinal_footer_logo = $request->casinal_footer_logo;
        $casinal_footer_logo_original = $casinal_footer_logo->getClientOriginalName();
        $casinal_footer_logo_unique = time() . '_' . $casinal_footer_logo_original;
        $destinationPath = public_path('/images/footer');
        $casinal_footer_logo->move($destinationPath, $casinal_footer_logo_unique);

        $casinal_footer = CasinalFooter::find($id);

        $casinal_footer->contact_icon = $casinal_footer_phone_icon_unique;
        $casinal_footer->contact = $casinal_footer_phone_number;
        $casinal_footer->email_icon = $casinal_footer_email_icon_unique;
        $casinal_footer->email = $casinal_footer_email;
        $casinal_footer->footer_information = $casinal_footer_information;
        $casinal_footer->footer_logo = $casinal_footer_logo_unique;
        $casinal_footer->save();
        return redirect()->route('casinal_footer');
    }

    public function casinal_footer_delete($id)
    {
        $casinal_footer = CasinalFooter::find($id);
        $casinal_footer->delete();
        return redirect()->back();
    }




    public function test(Request $request)
    {
        // $data = DB::table('homepage_blogs')->pluck('id');
        // $data = DB::table('homepage_blogs')->where('id',3)->value('blog_title');
        // $data = DB::table('homepage_blogs')->orderby('id')->chunk(2,function ($data){
        //     foreach ($data as $d){
        //         print_r($d->id);
        //         echo '<br>';
        //     }
        //     return false;
        // });

        // $data = DB::table('homepage_blogs')
        // ->join('homecms','homepage_blogs.id','=','homecms.id')
        // ->get();

        // $data = DB::table('homepage_blogs')
        // ->where('id',13)
        // ->orwhere('blog_title','Best Classes and study')->get();

        // $data = DB::table('homepage_courses')
        // ->select('id')
        // ->groupBy('id')
        // ->having('id', '<' ,10)
        // ->get();

        // $data = DB::table('homepage_courses')->skip(1)->take(3)->get();
        $data = DB::table('homepage_courses')->offset(1)->limit(3)->get();

        // $data = DB::table('homepage_courses')->where('id',3)->update(['course_title'=>'Science']);

        return view('admin.test',['data'=>$data]);
    }
}
