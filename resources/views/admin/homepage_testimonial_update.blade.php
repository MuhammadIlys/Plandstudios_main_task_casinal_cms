<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')





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
                                <h3 class="card-title ">HOME PAGE TESTIMONIAL SECTION UPDATE</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{route('homepage_testimonial_update',['id'=>$testimonial->id])}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf


                                    {{-- ////////// ABOUT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="testimonial_title">Testimonial Title</label>
                                        <input type="text" class="form-control text-light" id="testimonial_title"
                                            name="testimonial_title" placeholder="Enter Testimonial Title" value="{{$testimonial->testimonial_title}}">
                                        <span class="text-danger">
                                            @error('testimonial_title')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="testimonial_desc">Testimonial Description</label>

                                        <textarea class="form-control text-light" rows="3" id="testimonial_desc"
                                            name="testimonial_desc" ></textarea>

                                        <span class="text-danger">
                                            @error('testimonial_desc')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="testimonial_page">Testimonial Page</label>
                                        <input type="text" class="form-control text-light" id="testimonial_page"
                                            name="testimonial_page" placeholder="Enter Testimonial Page" value="{{$testimonial->testimonial_page}}">
                                        <span class="text-danger">
                                            @error('testimonial_page')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="testimonial_image"> Testimonial Image</label>
                                            <input type="file" class="form-control" id="testimonial_image" name="testimonial_image"
                                            placeholder="Enter Testimonial Image" >
                                            <span class="text-danger">
                                                @error('testimonial_image')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-md-6">
                                            <label for=""> Testimonial Image</label>
                                            <img src="{{asset('images/')}}/{{$testimonial->testimonial_image}}" alt="" style="width: 100px; height:100px;border-radius:50px">
                                        </div>
                                        
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
                
                {{-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}
</body>

</html>