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
                                <h3 class="card-title ">CONTACT PAGE CMS UPDATE</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{url('contact_cms_update')}}/{{$data->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf


                                    {{-- ////////// CONTACT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="consultingtitle">Consulting Title</label>
                                        <input type="text" class="form-control text-light" id="consultingtitle"
                                            name="consultingtitle" placeholder="Enter Consulting Title" value="{{$data->consultingtitle}}">
                                        <span class="text-danger">
                                            @error('consultingtitle')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="consultingdescription">Consulting Description</label>
                                        <input type="text" class="form-control text-light" id="consultingdescription"
                                            name="consultingdescription" placeholder="Enter Consulting Description" value="{{$data->consultingdescription}}">
                                            <span class="text-danger">
                                                @error('consultingdescription')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="consultingbtntext">Consulting Button Text</label>
                                        <input type="text" class="form-control text-light" id="consultingbtntext"
                                            name="consultingbtntext" placeholder="Enter Consulting Button Text" value="{{$data->consultingbtntext}}">
                                            <span class="text-danger">
                                                @error('consultingbtntext')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="consultingbtnlink">Consulting Button Link</label>
                                        <input type="text" class="form-control text-light" id="consultingbtnlink"
                                            name="consultingbtnlink" placeholder="Enter Consulting Button Link" value="{{$data->consultingbtnlink}}">
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
                                            name="educationtitle" placeholder="Enter Education Section Title" value="{{$data->educationtitle}}">
                                            <span class="text-danger">
                                                @error('educationtitle')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="educationimage">Education Background Image</label>
                                            <input type="file" class="form-control text-light" id="educationimage"
                                            name="educationimage" placeholder="Enter Education Background Image" value="{{$data->educationbgimage}}">
                                            <span class="text-danger">
                                                @error('educationimage')
                                                {{$message}}   
                                                @enderror
                                            </span>
                                        </div>
                                        
                                        <div class="form-group col-md-6 d-flex align-items-center">
                                            <label for="pagetype" class="mr-2">Education Background Image</label>
                                            <img src="{{asset('images')}}/{{$data->educationbgimage}}" alt="" style="width:100px; height:100px; border-radius:50px">
                                        </div>
                                        
                                    </div>
                                    <div class="row">

                                        <div class="form-group  col-md-6">
                                            <label for="educationimageright" >Education Right Image</label>
                                            <input type="file" class="form-control text-light" id="educationimageright"
                                            name="educationimageright" placeholder="Enter Education Right Image" value="{{$data->educationrightimage}}">
                                            <span class="text-danger">
                                                @error('educationimageright')
                                                {{$message}}   
                                                @enderror
                                            </span>
                                        </div>
                                        
                                        <div class="form-group col-md-6 d-flex align-items-center">
                                            <label for="pagetype" class="mr-2">Education Right Image</label>
                                            <img src="{{asset('images')}}/{{$data->educationrightimage}}" alt="" style="width:100px; height:100px; border-radius:50px">
                                        </div>
                                    </div>


                             

                                        <div class="form-group ">
                                            <label for="pagetype">Contact Page Type</label>
                                            <input type="text" class="form-control text-light" id="pagetype"
                                            name="pagetype" placeholder="Enter Education Page Type" value="{{$data->pagetype}}">
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
           

               





                    <!-- container-scroller -->
                    <!-- plugins:js -->
                    @include('admin.script')
                    <!-- End custom js for this page -->
</body>

</html>