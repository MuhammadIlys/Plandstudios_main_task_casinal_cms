<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        img{
            width: 100px;
            height: 100px;
            object-fit: contain;
            border-radius: 50px;

        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        <!-- partial -->
        @include('admin.top-navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">





                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title ">CASINAL NAVBAR EDIT</h3>
                                <hr style="background-color: white">
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{route('casinal_navbar_update',['id'=>$navbar->id])}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    {{-- ////////// ABOUT SECTION ///////// --}}



                                    <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="casinal_navbar_logo">Casinal Navbar Logo</label>
                                        <input type="file" class="form-control text-light" id="casinal_navbar_logo"
                                            name="casinal_navbar_logo" placeholder="Enter Casinal Navbar Logo" value="{{$navbar->casinal_navbar_logo}}">

                                        <span class="text-danger">
                                            @error('casinal_navbar_logo')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="col-md-5 offset-1">
                                        <label for="">Navbar Logo</label>
                                        <img src="{{asset('images/navbar')}}/{{$navbar->casinal_navbar_logo}}" alt="" style="margin-left: 50px">
                                    </div>


                                </div>

                                <div class="row mt-3">

                                    <div class="form-group col-md-6">
                                        <label for="casinal_navbar_fb_icon">Casinal Navbar FB Icon</label>
                                        <input type="file" class="form-control text-light" id="casinal_navbar_fb_icon"
                                            name="casinal_navbar_fb_icon"
                                            placeholder="Enter Casinal Navbar facebook Icon" value="{{$navbar->casinal_navbar_fb_icon}}">
                                        <span class="text-danger">
                                            @error('casinal_navbar_fb_icon')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="col-md-5 offset-1">
                                        <label for="">Facebook Logo</label>
                                        <img src="{{asset('images/navbar')}}/{{$navbar->casinal_navbar_fb_icon}}" alt="" style="margin-left: 50px">
                                    </div>

                                </div>



                                    <div class="form-group col-md-6">
                                        <label for="casinal_navbar_fb_link">Casinal Navbar FB Link</label>
                                        <input type="text" class="form-control text-light" id="casinal_navbar_fb_link"
                                            name="casinal_navbar_fb_link"
                                            placeholder="Enter Casinal Navbar facebook Link" value="{{$navbar->casinal_navbar_fb_link}}">
                                        <span class="text-danger">
                                            @error('casinal_navbar_fb_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="casinal_navbar_insta_icon">Casinal Navbar INSTAGRAM Icon</label>
                                        <input type="file" class="form-control text-light"
                                            id="casinal_navbar_insta_icon" name="casinal_navbar_insta_icon"
                                            placeholder="Enter Casinal Navbar instagram Icon" value="{{$navbar->casinal_navbar_insta_icon}}">
                                        <span class="text-danger">
                                            @error('casinal_navbar_insta_icon')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="col-md-5 offset-1">
                                        <label for="">Instagram Logo</label>
                                        <img src="{{asset('images/navbar')}}/{{$navbar->casinal_navbar_insta_icon}}" alt="" style="margin-left: 50px">
                                    </div>

                                </div>

                                    <div class="form-group col-md-6">
                                        <label for="casinal_navbar_insta_link">Casinal Navbar INSTAGRAM Link</label>
                                        <input type="text" class="form-control text-light"
                                            id="casinal_navbar_insta_link" name="casinal_navbar_insta_link"
                                            placeholder="Enter Casinal Navbar instagram Link"  value="{{$navbar->casinal_navbar_insta_link}}">
                                        <span class="text-danger">
                                            @error('casinal_navbar_insta_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>



                                    <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="casinal_navbar_twitter_icon">Casinal Navbar TWITTER Icon</label>
                                        <input type="file" class="form-control text-light"
                                            id="casinal_navbar_twitter_icon" name="casinal_navbar_twitter_icon"
                                            placeholder="Enter Casinal Navbar twitter Icon" value="{{$navbar->casinal_navbar_twitter_icon}}">
                                        <span class="text-danger">
                                            @error('casinal_navbar_twitter_icon')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="col-md-5 offset-1">
                                        <label for="">Twitter Logo</label>
                                        <img src="{{asset('images/navbar')}}/{{$navbar->casinal_navbar_twitter_icon}}" alt="" style="margin-left: 50px">
                                    </div>

                                </div>



                                    <div class="form-group col-md-6">
                                        <label for="casinal_navbar_twitter_link">Casinal Navbar TWITTER Link</label>
                                        <input type="text" class="form-control text-light"
                                            id="casinal_navbar_twitter_link" name="casinal_navbar_twitter_link"
                                            placeholder="Enter Casinal Navbar twitter Link" value="{{$navbar->casinal_navbar_twitter_link}}">
                                        <span class="text-danger">
                                            @error('casinal_navbar_twitter_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>



                                    <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="casinal_navbar_linkedin_icon">Casinal Navbar LINKEDIN Icon</label>
                                        <input type="file" class="form-control text-light"
                                            id="casinal_navbar_linkedin_icon" name="casinal_navbar_linkedin_icon"
                                            placeholder="Enter Casinal Navbar linkedin Icon" value="{{$navbar->casinal_navbar_linkedin_icon}}">
                                        <span class="text-danger">
                                            @error('casinal_navbar_linkedin_icon')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="col-md-5 offset-1">
                                        <label for="">Linkedin Logo</label>
                                        <img src="{{asset('images/navbar')}}/{{$navbar->casinal_navbar_linkedin_icon}}" alt="" style="margin-left: 50px">
                                    </div>

                                </div>




                                    <div class="form-group col-md-6">
                                        <label for="casinal_navbar_linkedin_link">Casinal Navbar LINKEDIN Link</label>
                                        <input type="text" class="form-control text-light"
                                            id="casinal_navbar_linkedin_link" name="casinal_navbar_linkedin_link"
                                            placeholder="Enter Casinal Navbar linkedin Link" value="{{$navbar->casinal_navbar_linkedin_link}}">
                                        <span class="text-danger">
                                            @error('casinal_navbar_linkedin_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <button type="submit" class="btn btn-primary float-right">Submit</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


             





                <!-- container-scroller -->
                <!-- plugins:js -->
                @include('admin.script')
                <!-- End custom js for this page -->
</body>

</html>



<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>

</html>