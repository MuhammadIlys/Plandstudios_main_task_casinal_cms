<div class="container">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="logo" href="{{route('casinal_index')}}"><img
            src="{{asset('images/navbar')}}/{{$casinal_nav->casinal_navbar_logo}}"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="{{route('casinal_index')}}">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('casinal_about')}}">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('casinal_services')}}">Services</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('casinal_blog')}}">Blog</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('casinal_contact')}}">Contact Us</a>
            </li>

            {{-- <li class="nav-item">
               <a class="nav-link" href="{{route('casinal_blog_details')}}">Blog Details</a>
            </li> --}}

            <li class="nav-item d-flex align-items-center ml-4">
               <a href="#" class="mr-3" data-toggle="modal" data-target="#exampleModal"><img src="{{asset('casinal/images')}}/search-icon.png"></a>
            </li>

         </ul>
         <div class="call_section">
            <ul>
               {{-- <li><a href="{{$casinal_nav->casinal_navbar_fb_link}}"><img
                        src="{{asset('images/navbar')}}/{{$casinal_nav->casinal_navbar_fb_icon}}"></a></li>
               <li><a href="{{$casinal_nav->casinal_navbar_twitter_link}}"><img src="{{asset('images/navbar')}}/{{$casinal_nav->casinal_navbar_twitter_icon}}"></a>
               </li>
               <li><a href="{{$casinal_nav->casinal_navbar_linkedin_link}}"><img src="{{asset('images/navbar')}}/{{$casinal_nav->casinal_navbar_linkedin_icon}}"></a>
               </li>
               <li><a href="{{$casinal_nav->casinal_navbar_insta_link}}"><img src="{{asset('images/navbar')}}/{{$casinal_nav->casinal_navbar_insta_icon}}"></a>
               </li> --}}
               <div class=" d-flex flex-row align-items-center">
                  @if(Auth::user())
                  <a href="{{route('logout')}}" class="btn btn-primary">Logout</a>
                  @else
                  <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                  <a href="{{route('register')}}" class="btn btn-primary ml-2">Register</a>
                  @endif
               </div>
              
            </ul>
         </div>
      </div>
   </nav>
</div>