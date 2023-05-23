<div class="footer_section layout_padding mt-5">
    <div class="container">
       <div class="subscribe_bt"><a href="#">Subscribe</a></div>
       <input type="text" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
       <div class="footer_section_2">
          <div class="row">
             <div class="col-lg-3 margin_top">
                <div class="call_text"><a href="#"><img src="{{asset('images/footer')}}/{{$casinal_footer->contact_icon}}"><span class="padding_left_15">Call
                         Now {{$casinal_footer->contact}}</span></a></div>
                <div class="call_text"><a href="#"><img src="{{asset('images/footer')}}/{{$casinal_footer->email_icon}}"><span
                         class="padding_left_15">{{$casinal_footer->email}}</span></a></div>
             </div>
             <div class="col-lg-3">
                <div class="information_main">
                   <h4 class="information_text">Information</h4>
                   <p class="many_text">{{$casinal_footer->footer_information}}</p>
                </div>
             </div>
             <div class="col-lg-3 col-md-6">
                <div class="information_main">
                   <h4 class="information_text">Helpful Links</h4>
                   <div class="footer_menu">
                      <ul>
                         <li><a href="{{url('casinal_index')}}">Home</a></li>
                         <li><a href="{{url('casinal_about')}}">About</a></li>
                         <li><a href="{{url('casinal_services')}}">Services</a></li>
                         <li><a href="{{url('casinal_blog')}}">Blog</a></li>
                         <li><a href="{{url('casinal_contact')}}">Contact</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-lg-3">
                <div class="information_main">
                   <div class="footer_logo"><a href="{{url('casinal_index')}}"><img src="{{asset('images/footer')}}/{{$casinal_footer->footer_logo}}"></a></div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- footer section end -->
 <!-- copyright section start -->
 <div class="copyright_section">
    <div class="container">
       <p class="copyright_text">© 2020 All Rights Reserved. <a href="https://html.design">Free html Templates</a>
          Distribution <a href="https://themewagon.com">ThemeWagon</a></p>
    </div>
 </div>
 <!-- copyright section end -->
 <!-- Javascript files-->
 <script src="{{asset('casinal/js/jquery.min.js')}}"></script>
 <script src="{{asset('casinal/js/popper.min.js')}}"></script>
 <script src="{{asset('casinal/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('casinal/js/jquery-3.0.0.min.js')}}"></script>
 <script src="{{asset('casinal/js/plugin.js')}}"></script>
 <!-- sidebar -->
 <script src="{{asset('casinal/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
 <script src="{{asset('casinal/js/custom.js')}}"></script>
 <!-- javascript -->
 <script src="{{asset('casinal/js/owl.carousel.js')}}"></script>
 <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>