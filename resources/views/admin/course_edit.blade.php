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
                                <h3 class="card-title ">HOME PAGE COURSES SECTION</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{url('homepage_courses_update')}}/{{$course->id}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf


                                    {{-- ////////// ABOUT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="course_title">Course Title</label>
                                        <input type="text" class="form-control text-light" id="course_title"
                                            name="course_title" placeholder="Enter Course Title" value="{{$course->course_title}}">
                                        <span class="text-danger">
                                            @error('course_title')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="course_page">Course Page</label>
                                        <input type="text" class="form-control text-light" id="course_page"
                                            name="course_page" placeholder="Enter Course Page" value="{{$course->course_page}}">
                                        <span class="text-danger">
                                            @error('course_page')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="course_image"> Course Image</label>
                                            <input type="file" class="form-control text-light" id="course_image"
                                            name="course_image" placeholder="Enter Course Image" >
                                            <span class="text-danger">
                                                @error('course_image')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        

                                        <div class="col-md-6">
                                            <label for="course_image"> Slider Image</label>
                                            <img src="{{asset('images')}}/{{$course->course_image}}" alt="" style="width: 100px; height:100px; border-radius:50px">
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
</body>

</html>