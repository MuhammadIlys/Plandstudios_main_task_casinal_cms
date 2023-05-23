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
                                <h3 class="card-title ">HOME PAGE BLOG SECTION</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{route('homepage_blog_update',['id'=>$blogs->id])}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf


                                    {{-- ////////// ABOUT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="blog_title">Blog Title</label>
                                        <input type="text" class="form-control text-light" id="blog_title"
                                            name="blog_title" placeholder="Enter Blog Title" value="{{$blogs->blog_title}}">
                                        <span class="text-danger">
                                            @error('blog_title')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="blog_desc">Blog Description</label>

                                        <textarea class="form-control text-light" rows="3" id="blog_desc"
                                            name="blog_desc" ></textarea>

                                        <span class="text-danger">
                                            @error('blog_desc')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- <div class="form-group">
                                        <label for="blog_btn_text">Blog Button Text</label>
                                        <input type="text" class="form-control text-light" id="blog_btn_text"
                                            name="blog_btn_text" placeholder="Enter Blog Button text" value="{{$blogs->blog_btn_text}}">
                                        <span class="text-danger">
                                            @error('blog_btn_text')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="blog_btn_link">Blog Button Link</label>
                                        <input type="text" class="form-control text-light" id="blog_btn_link"
                                            name="blog_btn_link" placeholder="Enter Blog Button Link" value="{{$blogs->blog_btn_link}}">
                                        <span class="text-danger">
                                            @error('blog_btn_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div> --}}

                                    <div class="form-group">
                                        <label for="blog_page">Blog page</label>
                                        <input type="text" class="form-control text-light" id="blog_page"
                                            name="blog_page" placeholder="Enter Blog page" value="{{$blogs->page}}">
                                        <span class="text-danger">
                                            @error('blog_page')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>



                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="blog_image"> Blog Image</label>
                                            <input type="file" class="form-control" id="blog_image" name="blog_image"
                                            placeholder="Enter Blog Image" value="">
                                            <span class="text-danger">
                                                @error('blog_image')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="blog_image"> Blog Image</label>
                                            <img src="{{asset('images/')}}/{{$blogs->blog_image}}" alt="" style="width: 100px; height:100px;border-radius:50px">
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