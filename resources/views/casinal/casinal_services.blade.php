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
   <!-- services section start -->

   {{-- @include('casinal.casinal_search_form'); --}}

   
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital"><span style="color: #fcce2d">
            @php
              $mystr = $services_cms->servicestitle;
              $st = substr($mystr,0,3);
              echo $st;
            @endphp
            </span>
   
            @php
              $mystr = $services_cms->servicestitle;
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
   <!-- footer section start -->
   @include('casinal.casinal_footer')

</body>

</html>