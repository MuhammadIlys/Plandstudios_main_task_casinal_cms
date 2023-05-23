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


                @if ($count < 1) <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>No Data in Blog</strong> You should Insert some data first.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>

            @endif



                    <div class="row">

                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title ">BLOG PAGE CMS</h3>
                                    {{-- <p class="card-description"> Basic form layout </p> --}}
                                    <form class="forms-sample" action="blog_cms" method="POST">
                                        @csrf


                                        {{-- ////////// ABOUT SECTION ///////// --}}

                                        <div class="form-group">
                                            <label for="blogtitle">Blog Title</label>
                                            <input type="text" class="form-control text-light" id="blogtitle"
                                                name="blogtitle" placeholder="Enter Blog title">
                                            <span class="text-danger">
                                                @error('blogtitle')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="blogdescription">Blog description</label>
                                            <input type="text" class="form-control text-light" id="blogdescription"
                                                name="blogdescription" placeholder="Enter Blog Description">
                                            <span class="text-danger">
                                                @error('blogdescription')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="pagetype">Blog page type</label>
                                            <input type="text" class="form-control text-light" id="pagetype"
                                                name="pagetype" placeholder="Enter Blog Page type">
                                            <span class="text-danger">
                                                @error('pagetype')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <a href="{{url('blog_cms_edit')}}"
                                            class="btn btn-success float-right ml-2">Update</a>
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


                                    @if ($count > 0)
                                    <h3 class="card-title ">HOME PAGE Data </h3>


                                    <div class="table-responsive">
                                        <table class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Blog Title</th>
                                                    <th scope="col">Blog description</th>
                                                    <th scope="col">Page Type</th>

                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($data as $data)


                                                <tr>
                                                    <th scope="row">{{$data->id}}</th>
                                                    <td>{{$data->blogtitle}}</td>
                                                    <td>{{$data->blogdescription}}</td>
                                                    <td>{{$data->pagetype}}</td>



                                                    <td>
                                                        <a href="{{url('blog_cms_edit')}}/{{$data->id}}"
                                                            class="btn btn-success float-right ">Update</a>
                                                        <a href="{{url('blog_cms_delete')}}/{{$data->id}}"
                                                            class="btn btn-danger float-right">Delete</a>
                                                    </td>

                                                </tr>

                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                    @else
                                    <h3 class="card-title text-center">NO DATA FOUND </h3>

                                    @endif

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