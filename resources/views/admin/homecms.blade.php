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
                    <strong>No Data in Home</strong> You should Insert some data first.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>

            @endif



            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title ">HOME PAGE CMS </h3>
                            {{-- <p class="card-description"> Basic form layout </p> --}}
                            <form class="forms-sample" action="home_cms" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="coursesectiontitle">Course Section Main Title</label>
                                    <input type="text" class="form-control text-light" id="coursesectiontitle"
                                        name="coursesectiontitle" placeholder="Enter Course Section Title">
                                    <span class="text-danger">
                                        @error('coursesectiontitle')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>


                                {{-- ////////// ABOUT SECTION ///////// --}}

                                <div class="form-group">
                                    <label for="aboutsectiontitle">About Section Title</label>
                                    <input type="text" class="form-control text-light" id="aboutsectiontitle"
                                        name="aboutsectiontitle" placeholder="Enter Course title">
                                    <span class="text-danger">
                                        @error('aboutsectiontitle')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="aboutsectiondescription">About Section Description</label>
                                    <input type="text" class="form-control text-light" id="aboutsectiondescription"
                                        name="aboutsectiondescription" placeholder="Enter About Section Description">
                                    <span class="text-danger">
                                        @error('aboutsectiondescription')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="aboutsectioninnertitle">About Section Inner Title</label>
                                    <input type="text" class="form-control text-light" id="aboutsectioninnertitle"
                                        name="aboutsectioninnertitle" placeholder="Enter About Section Inner Title">
                                    <span class="text-danger">
                                        @error('aboutsectioninnertitle')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="aboutsectioninnerdescription">About Section Inner
                                        Description</label>
                                    <input type="text" class="form-control text-light" id="aboutsectioninnerdescription"
                                        name="aboutsectioninnerdescription"
                                        placeholder="Enter About Section Inner Description">
                                    <span class="text-danger">
                                        @error('aboutsectioninnerdescription')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="aboutsectionimage">About Section Image</label>
                                    <input type="file" class="form-control text-light" id="aboutsectionimage"
                                        name="aboutsectionimage" placeholder="Enter About Section Image">
                                    <span class="text-danger">
                                        @error('aboutsectionimage')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                {{-- ////////// BLOG SECTION ///////// --}}


                                <div class="form-group">
                                    <label for="blogsectiontitle">Blog Section Title</label>
                                    <input type="text" class="form-control text-light" id="blogsectiontitle"
                                        name="blogsectiontitle" placeholder="Enter Blog Section Main Title">
                                    <span class="text-danger">
                                        @error('blogsectiontitle')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="blogsectiondescription">Blog Section Description</label>
                                    <input type="text" class="form-control text-light" id="blogsectiondescription"
                                        name="blogsectiondescription" placeholder="Enter Blog Section Main Description">
                                    <span class="text-danger">
                                        @error('blogsectiondescription')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                {{-- ////////// TESTIMONIAL SECTION ///////// --}}


                                <div class="form-group">
                                    <label for="testimonialsectiontitle">Testimonial Section Title</label>
                                    <input type="text" class="form-control text-light" id="testimonialsectiontitle"
                                        name="testimonialsectiontitle" placeholder="Enter Testimonial Section Title">
                                    <span class="text-danger">
                                        @error('testimonialsectiontitle')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                {{-- ////////// CONSULTING SECTION ///////// --}}

                                <div class="form-group">
                                    <label for="consultingsectiontitle">Consulting Section Title</label>
                                    <input type="text" class="form-control text-light" id="consultingsectiontitle"
                                        name="consultingsectiontitle" placeholder="Enter Consulting Section Title">
                                    <span class="text-danger">
                                        @error('consultingsectiontitle')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="consultingsectiondescription">Consulting Section Description</label>
                                    <input type="text" class="form-control text-light" id="consultingsectiondescription"
                                        name="consultingsectiondescription"
                                        placeholder="Enter Consulting Section Description">
                                    <span class="text-danger">
                                        @error('consultingsectiondescription')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="consultingsectionbtntext">Consulting Section Button Text</label>
                                    <input type="text" class="form-control text-light" id="consultingsectionbtntext"
                                        name="consultingsectionbtntext"
                                        placeholder="Enter Consulting Section Button Text">
                                    <span class="text-danger">
                                        @error('consultingsectionbtntext')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="consultingsectionbtnlink">Consulting Section Button Link</label>
                                    <input type="text" class="form-control text-light" id="consultingsectionbtnlink"
                                        name="consultingsectionbtnlink"
                                        placeholder="Enter Consulting Section Button Link">
                                    <span class="text-danger">
                                        @error('consultingsectionbtnlink')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                {{-- ////////// EDUCATION SECTION ///////// --}}


                                <div class="form-group">
                                    <label for="educationsectiontitle">Education Section title</label>
                                    <input type="text" class="form-control text-light" id="educationsectiontitle"
                                        name="educationsectiontitle" placeholder="Enter Education Section Title">
                                    <span class="text-danger">
                                        @error('educationsectiontitle')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="educationsectionimage">Education Section Background Image</label>
                                    <input type="file" class="form-control text-light" id="educationsectionimage"
                                        name="educationsectionimage"
                                        placeholder="Enter Education Section Background Image">
                                    <span class="text-danger">
                                        @error('educationsectionimage')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="educationsectionimageright">Education Section Right Image</label>
                                    <input type="file" class="form-control text-light" id="educationsectionimageright"
                                        name="educationsectionimageright"
                                        placeholder="Enter Education Section Right Image">
                                    <span class="text-danger">
                                        @error('educationsectionimageright')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="pagetype">Education Page Type</label>
                                    <input type="text" class="form-control text-light" id="pagetype" name="pagetype"
                                        placeholder="Enter Education Page Type">
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
                                <th scope="col">Course Title</th>
                                <th scope="col">About Title</th>
                                <th scope="col">About description</th>
                                <th scope="col">About Inner Title</th>
                                <th scope="col">About Inner Description</th>
                                <th scope="col">About Image</th>
                                <th scope="col">Blog Title</th>
                                <th scope="col">Blog Description</th>
                                <th scope="col">Testimonial Title</th>
                                
                                <th scope="col">Consulting title</th>
                                <th scope="col">Consulting Description</th>
                                <th scope="col">Consulting Btn text</th>
                                <th scope="col">Consulting Btn link</th>
                                <th scope="col">Edu title</th>
                                <th scope="col">Edu Image</th>
                                <th scope="col">Edu image right</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $data)
                                    
                               
                              <tr>
                                <th scope="row">{{$data->id}}</th>
                                <td>{{$data->coursesectiontitle}}</td>
                                <td>{{$data->aboutsectiontitle}}</td>
                                <td>{{$data->aboutsectiondescription}}</td>
                                <td>{{$data->aboutsectioninnertitle}}</td>
                                <td>{{$data->aboutsectioninnerdescription}}</td>
                                <td>
                                    <img src="{{asset('images')}}/{{$data->aboutsectionimage}}" alt="" style="width: 100px;
                                    height: 100px;
                                    object-fit: cover;
                                    border-radius: 50px;">
                                </td>
                                <td>{{$data->blogsectiontitle}}</td>
                                <td>{{$data->blogsectiondescription}}</td>
                                <td>{{$data->testimonialsectiontitle}}</td>
                                <td>{{$data->consultingsectiontitle}}</td>
                                <td>{{$data->consultingsectiondescription}}</td>
                                <td>{{$data->consultingsectionbtntext}}</td>
                                <td>{{$data->consultingsectionbtnlink}}</td>
                                <td>{{$data->educationsectiontitle}}</td>

                                <td>
                                    <img src="{{asset('images')}}/{{$data->educationsectionimage}}" alt="" style="width: 100px;
                                    height: 100px;
                                    object-fit: cover;
                                    border-radius: 50px;">
                                </td>

                                <td>
                                    <img src="{{asset('images')}}/{{$data->educationsectionimageright}}" alt="" style="width: 100px;
                                    height: 100px;
                                    object-fit: cover;
                                    border-radius: 50px;">
                                </td>

                                <td>
                                    <a href="{{url('home_cms_edit')}}/{{$data->id}}" class="btn btn-success float-right ">Update</a>
                                    <a href="{{url('home_cms_delete')}}/{{$data->id}}" class="btn btn-danger float-right">Delete</a>
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

    </div>




    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>