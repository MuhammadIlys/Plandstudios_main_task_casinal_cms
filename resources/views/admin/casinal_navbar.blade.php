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
                                <h3 class="card-title ">CASINAL NAVBAR</h3>
                                <hr style="background-color: white">
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="casinal_navbar_store" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    {{-- ////////// ABOUT SECTION ///////// --}}



                                    <div class="form-group">
                                        <label for="casinal_navbar_logo">Casinal Navbar Logo</label>
                                        <input type="file" class="form-control text-light" id="casinal_navbar_logo"
                                            name="casinal_navbar_logo" placeholder="Enter Casinal Navbar Logo">
                                        <span class="text-danger">
                                            @error('casinal_navbar_logo')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="casinal_navbar_fb_icon">Casinal Navbar FB Icon</label>
                                        <input type="file" class="form-control text-light" id="casinal_navbar_fb_icon"
                                            name="casinal_navbar_fb_icon"
                                            placeholder="Enter Casinal Navbar facebook Icon">
                                        <span class="text-danger">
                                            @error('casinal_navbar_fb_icon')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="casinal_navbar_fb_link">Casinal Navbar FB Link</label>
                                        <input type="text" class="form-control text-light" id="casinal_navbar_fb_link"
                                            name="casinal_navbar_fb_link"
                                            placeholder="Enter Casinal Navbar facebook Link">
                                        <span class="text-danger">
                                            @error('casinal_navbar_fb_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="casinal_navbar_insta_icon">Casinal Navbar INSTAGRAM Icon</label>
                                        <input type="file" class="form-control text-light"
                                            id="casinal_navbar_insta_icon" name="casinal_navbar_insta_icon"
                                            placeholder="Enter Casinal Navbar instagram Icon">
                                        <span class="text-danger">
                                            @error('casinal_navbar_insta_icon')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="casinal_navbar_insta_link">Casinal Navbar INSTAGRAM Link</label>
                                        <input type="text" class="form-control text-light"
                                            id="casinal_navbar_insta_link" name="casinal_navbar_insta_link"
                                            placeholder="Enter Casinal Navbar instagram Link">
                                        <span class="text-danger">
                                            @error('casinal_navbar_insta_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="casinal_navbar_twitter_icon">Casinal Navbar TWITTER Icon</label>
                                        <input type="file" class="form-control text-light"
                                            id="casinal_navbar_twitter_icon" name="casinal_navbar_twitter_icon"
                                            placeholder="Enter Casinal Navbar twitter Icon">
                                        <span class="text-danger">
                                            @error('casinal_navbar_twitter_icon')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="casinal_navbar_twitter_link">Casinal Navbar TWITTER Link</label>
                                        <input type="text" class="form-control text-light"
                                            id="casinal_navbar_twitter_link" name="casinal_navbar_twitter_link"
                                            placeholder="Enter Casinal Navbar twitter Link">
                                        <span class="text-danger">
                                            @error('casinal_navbar_twitter_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>



                                    <div class="form-group">
                                        <label for="casinal_navbar_linkedin_icon">Casinal Navbar LINKEDIN Icon</label>
                                        <input type="file" class="form-control text-light"
                                            id="casinal_navbar_linkedin_icon" name="casinal_navbar_linkedin_icon"
                                            placeholder="Enter Casinal Navbar linkedin Icon">
                                        <span class="text-danger">
                                            @error('casinal_navbar_linkedin_icon')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="casinal_navbar_linkedin_link">Casinal Navbar LINKEDIN Link</label>
                                        <input type="text" class="form-control text-light"
                                            id="casinal_navbar_linkedin_link" name="casinal_navbar_linkedin_link"
                                            placeholder="Enter Casinal Navbar linkedin Link">
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


                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title ">CASINAL NAVBAR ALL DATA</h3>
                                <hr style="background-color: white">

                                <div class="table-responsive">
                                    <table class="table table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nav Logo</th>
                                                <th scope="col">Fb Icon</th>
                                                <th scope="col">Fb link</th>
                                                <th scope="col">Twitter Icon</th>
                                                <th scope="col">Twitter link</th>
                                                <th scope="col">Linkedin Icon</th>
                                                <th scope="col">Linkedin Link</th>
                                                <th scope="col">Instagram Icon</th>
                                                <th scope="col">Instagram Link</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $dat)
                                           
                                            <tr>
                                                <td >{{$dat->id }}</td>
                                                <td ><img src="{{asset('images/navbar')}}/{{$dat->casinal_navbar_logo }}" ></td>

                                                <td ><img src="{{asset('images/navbar')}}/{{$dat->casinal_navbar_fb_icon }}" alt=""></td>
                                                <td >{{$dat->casinal_navbar_fb_link }}</td>
                                                
                                                <td ><img src="{{asset('images/navbar')}}/{{$dat->casinal_navbar_twitter_icon }}" alt=""></td>
                                                <td >{{$dat->casinal_navbar_twitter_link }}</td>
   
                                                
                                                
                                                <td ><img src="{{asset('images/navbar')}}/{{$dat->casinal_navbar_linkedin_icon }}" alt=""></td>
                                                <td >{{$dat->casinal_navbar_linkedin_link }}</td>

                                                <td ><img src="{{asset('images/navbar')}}/{{$dat->casinal_navbar_insta_icon }}" alt=""></td>
                                                <td >{{$dat->casinal_navbar_insta_link }}</td>

                                                <td>
                                                    <a href="{{route('casinal_navbar_edit',['id'=>$dat->id])}}" class="btn btn-success">Update</a>
                                                    <a href="{{route('casinal_navbar_delete',['id'=>$dat->id])}}" class="btn btn-danger">Delete</a>
                                                </td>
                                                
                                            </tr>
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>



                                </div>
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