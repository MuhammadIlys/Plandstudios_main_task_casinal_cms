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
                    <strong>No Data in Testimonial</strong> You should Insert some data first.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>

            @endif


                <div class="row">

                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title ">HOME PAGE TESTIMONIAL SECTION</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{route('homepage_testimonial_store')}}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf


                                    {{-- ////////// ABOUT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="testimonial_title">Testimonial Title</label>
                                        <input type="text" class="form-control text-light" id="testimonial_title"
                                            name="testimonial_title" placeholder="Enter Testimonial Title" value="">
                                        <span class="text-danger">
                                            @error('testimonial_title')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="testimonial_desc">Testimonial Description</label>

                                        <textarea class="form-control text-light" rows="3" id="testimonial_desc"
                                            name="testimonial_desc"></textarea>

                                        <span class="text-danger">
                                            @error('testimonial_desc')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="testimonial_page">Testimonial Page</label>

                                        <input type="text" class="form-control text-light" rows="3"
                                            id="testimonial_page" name="testimonial_page">

                                        <span class="text-danger">
                                            @error('testimonial_page')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="testimonial_image"> Testimonial Image</label>
                                        <input type="file" class="form-control" id="testimonial_image"
                                            name="testimonial_image" placeholder="Enter Testimonial Image" value="">
                                        <span class="text-danger">
                                            @error('testimonial_image')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- <a href="homepage_testimonial_edit"
                                        class="btn btn-success ml-2 float-right">Update</a> --}}
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>

                                </form>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                
                                @if ($count > 0)
                                <h2 class="text-center mb-4">All Testimonials</h2>
                           

                                <div class="table-responsive">
                                    <table class="table table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Page</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($testimonial as $item)
                                                
                                           
                                            <tr>
                                                <td >{{$item->id}}</td>
                                                <td>{{$item->testimonial_title}}</td>
                                                <td>{{$item->testimonial_description}}</td>
                                                <td>{{$item->testimonial_page}}</td>
                                                <td>
                                                    <img src="{{asset('images')}}/{{$item->testimonial_image}}" alt="" style="width: 100px;height:100px; border-radius:50px">
                                                </td>
                                                <td>
                                                    <a href="{{route('homepage_testimonial_edit',['id'=>$item->id])}}" class="btn btn-primary">Update</a>
                                                    <a href="{{route('homepage_testimonial_delete',['id'=>$item->id])}}" class="btn btn-danger">Delete</a>
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

                {{-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}
</body>

</html>