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
                    <strong>No Data in About</strong> You should Insert some data first.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>

            @endif

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title ">ABOUT PAGE CMS {{$count}}</h3>
                            {{-- <p class="card-description"> Basic form layout </p> --}}
                            <form class="forms-sample" action="about_cms" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- ////////// ABOUT SECTION ///////// --}}

                                <div class="form-group">
                                    <label for="abouttitle">About Title</label>
                                    <input type="text" class="form-control text-light" id="abouttitle" name="abouttitle"
                                        placeholder="Enter About title" value="{{old('abouttitle')}}">
                                    <span class="text-danger">
                                        @error('abouttitle')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="aboutdescription">About Description</label>
                                    <input type="text" class="form-control text-light" id="aboutdescription"
                                        name="aboutdescription" placeholder="Enter About Description"
                                        value="{{old('aboutdescription')}}">
                                    <span class="text-danger">
                                        @error('aboutdescription')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="aboutinnertitle">About Inner Title</label>
                                    <input type="text" class="form-control text-light" id="aboutinnertitle"
                                        name="aboutinnertitle" placeholder="Enter About Inner Title"
                                        value="{{old('aboutinnertitle')}}">
                                    <span class="text-danger">
                                        @error('aboutinnertitle')
                                        {{$message}}
                                        @enderror
                                    </span>

                                </div>

                                <div class="form-group">
                                    <label for="aboutinnerdescription">About Section Inner Description</label>
                                    <input type="text" class="form-control text-light" id="aboutinnerdescription"
                                        name="aboutinnerdescription" placeholder="Enter About Inner Description"
                                        value="{{old('aboutinnerdescription')}}">
                                    <span class="text-danger">
                                        @error('aboutinnerdescription')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="aboutpagetype">About Page Type</label>
                                    <input type="text" class="form-control text-light" id="aboutpagetype"
                                        name="aboutpagetype" placeholder="Enter About Page Type"
                                        value="{{old('aboutpagetype')}}">
                                    <span class="text-danger">
                                        @error('aboutpagetype')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="aboutimage">About Image</label>
                                    <input type="file" class="form-control text-light" id="aboutimage" name="aboutimage"
                                        placeholder="Enter About Section Image" value="{{old('aboutimage')}}">
                                    <span class="text-danger">
                                        @error('aboutimage')
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
                            
                            @if ($count > 0)
                            <h3 class="card-title ">HOME PAGE Data </h3>
                                
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-dark">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">About Title</th>
                                     
                                        <th scope="col">About description</th>
                                        <th scope="col">About Inner Title</th>
                                        <th scope="col">About Inner Description</th>
                                        <th scope="col">About Image</th>
                                        <th scope="col">Page Type</th>
                                        
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
        
                                        @foreach ($data as $data)
                                            
                                       
                                      <tr>
                                        <th scope="row">{{$data->id}}</th>
                                        <td>{{$data->about_title}}</td>
                                        <td>{{$data->about_description}}</td>
                                        <td>{{$data->about_inner_title}}</td>
                                        <td>{{$data->about_inner_description}}</td>
                                        <td>{{$data->page_type}}</td>
                                       
                                        <td>
                                            <img src="{{asset('images')}}/{{$data->about_image}}" alt="" style="width: 100px;
                                            height: 100px;
                                            object-fit: cover;
                                            border-radius: 50px;">
                                        </td>
        
                                        
        
                                        <td>
                                            <a href="{{url('about_cms_edit')}}/{{$data->id}}" class="btn btn-success float-right ">Update</a>
                                            <a href="{{url('about_cms_delete')}}/{{$data->id}}" class="btn btn-danger float-right">Delete</a>
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