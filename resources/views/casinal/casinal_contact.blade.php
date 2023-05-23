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
   <!-- newsletter section start -->

   {{-- @include('casinal.casinal_search_form'); --}}


   
   <div class="newsletter_section layout_padding">
      <div class="container">
         <div class="newsletter_main">
            <h1 class="newsletter_taital">
               @php
               $mystr = $contact_cms->consultingtitle;
               $st = substr($mystr,0,3);
               echo $st.'<br>';
             @endphp
    
             @php
               $mystr = $contact_cms->consultingtitle;
               $st = substr($mystr,3);
               echo $st;
             @endphp
              </h1>
            <div class="get_quote_bt"><a href="{{$contact_cms->consultingbtnlink}}">{{$contact_cms->consultingbtntext}}</a></div>
         </div>
         <p class="dolor_text">{{$contact_cms->consultingdescription}}</p>
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
                     <h1 class="contact_taital">{{$contact_cms->educationtitle}}</h1>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="map_main"><img src="{{asset('images')}}/{{$contact_cms->educationrightimage}}"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->
   <!-- footer section start -->
   @include('casinal.casinal_footer')

</body>

</html>