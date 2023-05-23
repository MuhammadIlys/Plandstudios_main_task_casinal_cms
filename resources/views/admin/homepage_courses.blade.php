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
                                <form class="forms-sample" action="homepage_courses_create" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf


                                    {{-- ////////// ABOUT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="course_title">Course Title</label>
                                        <input type="text" class="form-control text-light" id="course_title"
                                            name="course_title" placeholder="Enter Course Title" value="">
                                        <span class="text-danger">
                                            @error('course_title')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="course_page">Course Page</label>
                                        <input type="text" class="form-control text-light" id="course_page"
                                            name="course_page" placeholder="Enter Course Page" value="">
                                        <span class="text-danger">
                                            @error('course_page')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="course_image"> Course Image</label>
                                        <input type="file" class="form-control text-light" id="course_image"
                                            name="course_image" placeholder="Enter Course Image" value="">
                                        <span class="text-danger">
                                            @error('course_image')
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
                                <h3 class="card-title ">ALL COURSES</h3>
                         

                        <table class="table table-striped table-dark" id="mytable" >
                            <thead>
                                <tr>
                                    <th scope="col" class="text-light">Course ID</th>
                                    <th scope="col" class="text-light">Course Title</th>
                                    <th scope="col" class="text-light">Course Page</th>
                                    <th scope="col" class="text-light">Course Image</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)


                                <tr>
                                    <th scope="row" class="text-light">{{$course->id}}</th>
                                    <td class="text-light">{{$course->course_title}}</td>
                                    <td class="text-light">{{$course->course_page}}</td>

                                    <td class="text-light">
                                        <img src="{{asset('images/')}}/{{$course->course_image}}" alt=""
                                            style="width: 100px; height:100px; border-radius:50px">
                                    </td>

                                    <td class="text-light">
                                        <a href="{{route('course_edit',['id'=>$course->id])}}"
                                            class="btn btn-success">Update</a>
                                        <a href="{{route('course_delete',['id'=>$course->id])}}"
                                            class="btn btn-danger">Delete</a>
                                    </td>

                                    @endforeach

                                </tr>

                            </tbody>
                        </table>
                    </div>

                    </div>
                </div>









                <!-- container-scroller -->
                <!-- plugins:js -->

               
                @include('admin.script')

                <!-- End custom js for this page -->
</body>

</html>