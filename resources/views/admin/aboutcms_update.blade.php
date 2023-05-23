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

                {{-- <pre>
                    @php
                     print_r($errors->all());   
                    @endphp
                </pre> --}}

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title ">ABOUT PAGE CMS UPDATE</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{route('about_cms_update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- ////////// ABOUT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="abouttitle">About Title</label>
                                        <input type="text" class="form-control text-light" id="abouttitle"
                                            name="abouttitle" placeholder="Enter About title"
                                            value="{{$data->about_title}}">
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
                                            value="{{$data->about_description}}">
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
                                            value="{{$data->about_inner_title}}">
                                            <span class="text-danger">
                                                @error('aboutinnertitle')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                            
                                    </div>

                                    <div class="form-group">
                                        <label for="aboutinnerdescription">About Section Inner Description</label>
                                        <input type="text" class="form-control text-light" id="aboutinnerdescription"
                                            name="aboutinnerdescription" placeholder="Enter About Inner Description" value="{{$data->about_inner_description}}">
                                            <span class="text-danger">
                                                @error('aboutinnerdescription')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="aboutpagetype">About Page Type</label>
                                        <input type="text" class="form-control text-light" id="aboutpagetype"
                                            name="aboutpagetype" placeholder="Enter About Page Type" value="{{$data->page_type}}">
                                            <span class="text-danger">
                                                @error('aboutpagetype')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="aboutimage">About Image</label>
                                        <input type="file" class="form-control text-light" id="aboutimage"
                                            name="aboutimage" placeholder="Enter About Section Image" value="{{$data->about_image}}">
                                            <span class="text-danger">
                                                @error('aboutimage')
                                                {{$message}}   
                                                @enderror
                                            </span>
                                        </div>

                                        <div class=" col-md-6">
                                            <label for="aboutimage">About Image</label>
                                        <img src="{{asset('images')}}/{{$data->about_image}}" alt="" style="width:100px; height:100px; border-radius:50px">
                                        </div>
                                        
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