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
                                <h3 class="card-title ">BLOG PAGE CMS </h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" method="POST"   action="{{url('blog_cms_update')}}/{{$data->id}}">
                                    @csrf

                                    
                                    {{-- ////////// ABOUT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="blogtitle">Blog Title</label>
                                        <input type="text" class="form-control text-light" id="blogtitle"
                                            name="blogtitle" placeholder="Enter Blog title" value="{{$data->blogtitle}}">
                                        <span class="text-danger">
                                            @error('blogtitle')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="blogdescription">Blog description</label>
                                        <input type="text" class="form-control text-light" id="blogdescription"
                                            name="blogdescription" placeholder="Enter Blog Description" value="{{$data->blogdescription}}">
                                        <span class="text-danger">
                                            @error('blogdescription')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="pagetype">Blog page type</label>
                                        <input type="text" class="form-control text-light" id="pagetype" name="pagetype"
                                            placeholder="Enter Blog Page type" value="{{$data->pagetype}}">
                                        <span class="text-danger">
                                            @error('pagetype')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>

                                </form>
                            </div>
                        </div>
                    </div>





                    <!-- container-scroller -->
                    <!-- plugins:js -->
                    @include('admin.script')
                    <!-- End custom js for this page -->
</body>

</html>