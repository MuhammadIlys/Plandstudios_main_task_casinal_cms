<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')



    {{--
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
    $('#myTable').DataTable();
});
    </script> --}}

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
                                <h3 class="card-title ">BLOG</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{url('homepage_blog_store')}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf


                                    {{-- ////////// ABOUT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="blog_title">Blog Title</label>
                                        <input type="text" class="form-control text-light" id="blog_title"
                                            name="blog_title" placeholder="Enter Blog Title" value="">
                                        <span class="text-danger">
                                            @error('blog_title')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="blog_desc">Blog Description</label>

                                        <textarea class="form-control text-light" rows="3" id="blog_desc"
                                            name="blog_desc"></textarea>

                                        <span class="text-danger">
                                            @error('blog_desc')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- <div class="form-group">
                                        <label for="blog_btn_text">Blog Button Text</label>
                                        <input type="text" class="form-control text-light" id="blog_btn_text"
                                            name="blog_btn_text" placeholder="Enter Blog Button text" value="">
                                        <span class="text-danger">
                                            @error('blog_btn_text')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="blog_btn_link">Blog Button Link</label>
                                        <input type="text" class="form-control text-light" id="blog_btn_link"
                                            name="blog_btn_link" placeholder="Enter Blog Button Link" value="">
                                        <span class="text-danger">
                                            @error('blog_btn_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div> --}}


                                    <div class="form-group">
                                        <label for="blog_page">Blog page Link</label>
                                        <input type="text" class="form-control text-light" id="blog_page"
                                            name="blog_page" placeholder="Enter Blog page" value="">
                                        <span class="text-danger">
                                            @error('blog_page')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="blog_image"> Blog Image</label>
                                        <input type="file" class="form-control" id="blog_image" name="blog_image"
                                            placeholder="Enter Blog Image" value="">
                                        <span class="text-danger">
                                            @error('blog_image')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>



                                    {{-- <a href="{{route('homepage_blog_edit')}}"
                                        class="btn btn-success float-right ml-2">Update</a> --}}
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>

                                </form>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title ">All Courses</h3>

                            <div class="table-responsive">
                                <table class="table p-4">
                                    <thead>
                                        <tr>
                                            <th>Blog ID</th>
                                            <th>Blog Title</th>
                                            <th>Blog Description</th>
                                            
                                            <th>Blog Page</th>
                                            <th>Blog Image</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($homepage_blog as $blog)


                                        <tr>
                                            <td class="">{{$blog->id}}</td>
                                            <td>{{$blog->blog_title}}</td>
                                            <td>{{$blog->blog_description}}</td>

                                            <td>{{$blog->page}}</td>

                                            <td>
                                                <img src="{{asset('images/')}}/{{$blog->blog_image}}" alt=""
                                                    style="width: 100px; height:100px; border-radius:50px">
                                            </td>

                                            <td>
                                                <a href="{{route('homepage_blog_edit',['id'=>$blog->id])}}"
                                                    class="btn btn-success p-2">Update</a>
                                                <a href="{{route('homepage_blog_delete',['id'=>$blog->id])}}"
                                                    class="btn btn-danger p-2">Delete</a>
                                            </td>

                                            @endforeach

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
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