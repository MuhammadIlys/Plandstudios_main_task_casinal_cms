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
   <!-- about section start -->

   {{-- @include('casinal.casinal_search_form'); --}}


   
   <div class="news_section layout_padding">
      <div class="container">
         <h1 class="news_taital">{{$about_cms->about_title}}</h1>
         <p class="news_text">{{$about_cms->about_description}}</p>
         <div class="news_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="news_taital_box">
                     <p class="date_text">
                        @php
                         echo date_format($about_cms->created_at,'d-M-Y')   
                        @endphp
                     </p>
                     <h4 class="make_text">{{$about_cms->about_inner_title}}</h4>
                     <p class="lorem_text">{{$about_cms->about_inner_description}}</p>
                     <p class="post_text">Post By : Casinal</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="{{asset('images/')}}/{{$about_cms->about_image}}" class="image_6" style="width:100%">
                  <h6 class="plus_text">+</h6>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- footer section start -->
   @include('casinal.casinal_footer')

</body>

</html>