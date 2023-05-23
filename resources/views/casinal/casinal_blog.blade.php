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
   </div>
   <!--header section end -->
   <!-- blog section start -->

   {{-- @include('casinal.casinal_search_form'); --}}


   
   <div class="blog_section layout_padding">
    
      <div class="container">
         <h1 class="news_taital">Our Blogs</h1>
         <p class="news_text">do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam

         </p>
         @foreach ($blogs as $blogs)
             
        
         <div class="blog_section_2" style="margin-top: 150px">
            <div class="row">
               <div class="col-md-6">
                  <img src="{{asset('images')}}/{{$blogs->blog_image}}" class="image_7" style="width:100%">
               </div>
               <div class="col-md-6">
                  <h4 class="classes_text">{{$blogs->blog_title}}</h4>
                  <p class="ipsum_text">{{$blogs->blog_description}}</p>
               </div>
            </div>
         </div>
         
         <div class="read_bt"><a href="{{route('casinal_blog_details',['id'=>$blogs->id])}}">Read more</a></div>
         @endforeach
      </div>
   </div>
   <!-- blog section end -->
   <!-- footer section start -->
   @include('casinal.casinal_footer')

</body>

</html>