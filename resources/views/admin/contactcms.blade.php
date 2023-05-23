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
                    <strong>No Data in Contact</strong> You should Insert some data first.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>

            @endif


            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title ">CONTACT PAGE CMS</h3>
                            {{-- <p class="card-description"> Basic form layout </p> --}}
                            <form class="forms-sample" action="contact_cms" method="POST" enctype="multipart/form-data">
                                @csrf


                                {{-- ////////// CONTACT SECTION ///////// --}}

                                <div class="form-group">
                                    <label for="consultingtitle">Consulting Title</label>
                                    <input type="text" class="form-control text-light" id="consultingtitle"
                                        name="consultingtitle" placeholder="Enter Consulting Title">
                                    <span class="text-danger">
                                        @error('consultingtitle')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="consultingdescription">Consulting Description</label>
                                    <input type="text" class="form-control text-light" id="consultingdescription"
                                        name="consultingdescription" placeholder="Enter Consulting Description">
                                    <span class="text-danger">
                                        @error('consultingdescription')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="consultingbtntext">Consulting Button Text</label>
                                    <input type="text" class="form-control text-light" id="consultingbtntext"
                                        name="consultingbtntext" placeholder="Enter Consulting Button Text">
                                    <span class="text-danger">
                                        @error('consultingbtntext')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="consultingbtnlink">Consulting Button Link</label>
                                    <input type="text" class="form-control text-light" id="consultingbtnlink"
                                        name="consultingbtnlink" placeholder="Enter Consulting Button Link">
                                    <span class="text-danger">
                                        @error('consultingbtnlink')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                {{-- //// EDUCATION /// --}}

                                <div class="form-group">
                                    <label for="educationtitle">Education title</label>
                                    <input type="text" class="form-control text-light" id="educationtitle"
                                        name="educationtitle" placeholder="Enter Education Section Title">
                                    <span class="text-danger">
                                        @error('educationtitle')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="educationimage">Education Background Image</label>
                                    <input type="file" class="form-control text-light" id="educationimage"
                                        name="educationimage" placeholder="Enter Education Background Image">
                                    <span class="text-danger">
                                        @error('educationimage')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="educationimageright">Education Right Image</label>
                                    <input type="file" class="form-control text-light" id="educationimageright"
                                        name="educationimageright" placeholder="Enter Education Right Image">
                                    <span class="text-danger">
                                        @error('educationimageright')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>


                                <div class="form-group">
                                    <label for="pagetype">Contact Page Type</label>
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
                                        <th scope="col">Consulting Title</th>
                                     
                                        <th scope="col">Consulting description</th>
                                        <th scope="col">Consulting Btn Text</th>
                                        <th scope="col">Consulting Btn Link</th>
                                        <th scope="col">Education Title</th>
                                        <th scope="col">Education Bg Image</th>
                                        <th scope="col">Education Right Image</th>
                                        <th scope="col">Page Type</th>
                                        
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
        
                                        @foreach ($data as $data)
                                            
                                       
                                      <tr>
                                        <th scope="row">{{$data->id}}</th>
                                        <td>{{$data->consultingtitle}}</td>
                                        <td>{{$data->consultingdescription}}</td>
                                        <td>{{$data->consultingbtntext}}</td>
                                        <td>{{$data->consultingbtnlink}}</td>
                                        <td>{{$data->educationtitle}}</td>

                                        <td><img src="{{asset('images')}}/{{$data->educationbgimage}}" alt="" style="width: 100px;
                                            height: 100px;
                                            object-fit: cover;
                                            border-radius: 50px;">
                                            </td>

                                            <td><img src="{{asset('images')}}/{{$data->educationrightimage}}" alt="" style="width: 100px;
                                                height: 100px;
                                                object-fit: cover;
                                                border-radius: 50px;">
                                                </td>
                                        

                                        <td>{{$data->pagetype}}</td>


                                        <td>
                                            <a href="{{url('contact_cms_edit')}}/{{$data->id}}" class="btn btn-success float-right ">Update</a>
                                            <a href="{{url('contact_cms_delete')}}/{{$data->id}}" class="btn btn-danger float-right">Delete</a>
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