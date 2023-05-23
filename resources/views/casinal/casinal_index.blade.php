<!DOCTYPE html>
<html lang="en">

<head>
   @include('casinal.casinal_header')
</head>

<body>



   <!--header section start -->
   <div class="header_section">
      <div class="header_bg">
         @include('casinal.casinal_nav')
      </div>
      
      {{-- @include('casinal.casinal_search_form'); --}}


      <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
               @foreach ($home_slider as $key=>$slider)

               <div class="carousel-item  <?= $key == 0 ? 'active' : '' ?>">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">{{$slider->slider_title}}</h1>
                              <p class="banner_text">{{$slider->slider_description}}</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a
                                       href="{{$slider->slider_btn_one_link}}">{{$slider->slider_btn_one_text}}</a>
                                 </div>

                                 <div class="quote_bt"><a
                                       href="{{$slider->slider_btn_two_link}}">{{$slider->slider_btn_two_text}}</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="{{asset('images/')}}/{{$slider->slider_image}}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach


            </div>



            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right" style="font-size:24px"></i>
            </a>

         </div>



      </div>
      <!--banner section end -->

   </div>
   <!--header section end -->
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital"><span style="color: #fcce2d">
               @php
               $mystr = $home_cms->coursesectiontitle;
               $st = substr($mystr,0,3);
               echo $st;
               @endphp
            </span>

            @php
            $mystr = $home_cms->coursesectiontitle;
            $st = substr($mystr,3);
            echo $st;
            @endphp
         </h1>
         <div class="services_section_2">
            <div class="row">

               @foreach ($courses as $course)


               <div class="col-md-6">
                  <div class="image_main">
                     <img src="{{asset('images')}}/{{$course->course_image}}" class="image_8" style="width:100%">
                     <div class="text_main">
                        <div class="seemore_text">{{$course->course_title}}</div>
                     </div>
                  </div>
               </div>

               @endforeach

            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->
   <!-- about section start -->
   <div class="news_section layout_padding">
      <div class="container">
         <h1 class="news_taital">{{$home_cms->aboutsectiontitle}}</h1>
         <p class="news_text">{{$home_cms->aboutsectiondescription}}</p>
         <div class="news_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="news_taital_box">
                     <p class="date_text">
                        @php
                        echo date_format($home_cms->created_at,'d-M-Y')
                        @endphp
                     </p>
                     <h4 class="make_text">{{$home_cms->aboutsectioninnertitle}}</h4>
                     <p class="lorem_text">{{$home_cms->aboutsectioninnerdescription}}</p>
                     <p class="post_text">Post By : Casinal</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="{{asset('images')}}/{{$home_cms->aboutsectionimage}}" class="image_6" style="width:100%">
                  <h6 class="plus_text">+</h6>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- blog section start -->
   <div class="blog_section layout_padding">
      <div class="container">
         <h1 class="news_taital">{{$home_cms->blogsectiontitle}}</h1>
         <p class="news_text">{{$home_cms->blogsectiondescription}}</p>
         <div class="blog_section_2">
            <div class="row">
               <div class="col-md-6">
                  <img src="{{asset('images')}}/{{$homepage_blog->blog_image}}" class="image_7" style="width:100%">
               </div>
               <div class="col-md-6">
                  <h4 class="classes_text">{{$homepage_blog->blog_title}}</h4>
                  <p class="ipsum_text">{{$homepage_blog->blog_description}} </p>
               </div>
            </div>
         </div>
         <div class="read_bt"><a href="">Read more</a></div>
      </div>
   </div>
   <!-- blog section end -->
   <!-- client section start -->
   <div class="client_section layout_padding">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <h1 class="client_taital">{{$home_cms->testimonialsectiontitle}}</h1>
            @foreach ($testimonial as $key=>$item)


            <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
               <div class="container">

                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="{{asset('images')}}/{{$item->testimonial_image}}" class="client_img"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="client_name">{{$item->testimonial_title}}</h3>
                        <p class="client_text">{{$item->testimonial_description}} </p>
                     </div>
                  </div>

               </div>
            </div>
            @endforeach


         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right" style="font-size:24px"></i>
         </a>
      </div>
   </div>
   <!-- client section end -->
   <!-- newsletter section start -->
   <div class="newsletter_section layout_padding">
      <div class="container">
         <div class="newsletter_main">
            <h1 class="newsletter_taital">
               @php
               $mystr = $home_cms->consultingsectiontitle;
               $st = substr($mystr,0,3);
               echo $st.'<br>';
               @endphp

               @php
               $mystr = $home_cms->consultingsectiontitle;
               $st = substr($mystr,3);
               echo $st;
               @endphp
            </h1>
            <div class="get_quote_bt"><a
                  href="{{$home_cms->consultingsectionbtnlink}}">{{$home_cms->consultingsectionbtntext}}</a></div>
         </div>
         <p class="dolor_text">{{$home_cms->consultingsectiondescription}}</p>
      </div>
   </div>
   <!-- newsletter section end -->

   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 padding_left0">
               <div class="mail_section">
                  <div class="contact_img">
                     <h1 class="contact_taital">{{$home_cms->educationsectiontitle}}</h1>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="map_main"><img src="{{asset('images')}}/{{$home_cms->educationsectionimageright}}"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->
   <!-- footer section start -->

   @include('casinal.casinal_footer')

</body>

</html>