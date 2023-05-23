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
                                <h3 class="card-title ">HOME PAGE CMS UPDATE</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{asset('home_cms_update')}}/{{$data->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="coursesectiontitle">Course Section Main Title</label>
                                        <input type="text" class="form-control text-light" id="coursesectiontitle"
                                            name="coursesectiontitle" placeholder="Enter Course Section Title" value="{{$data->coursesectiontitle}}">
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
                                            name="aboutsectiontitle" placeholder="Enter Course title" value="{{$data->aboutsectiontitle}}">
                                            <span class="text-danger">
                                                @error('aboutsectiontitle')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="aboutsectiondescription">About Section Description</label>
                                        <input type="text" class="form-control text-light" id="aboutsectiondescription"
                                            name="aboutsectiondescription"
                                            placeholder="Enter About Section Description" value="{{$data->aboutsectiondescription}}">
                                            <span class="text-danger">
                                                @error('aboutsectiondescription')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="aboutsectioninnertitle">About Section Inner Title</label>
                                        <input type="text" class="form-control text-light" id="aboutsectioninnertitle"
                                            name="aboutsectioninnertitle" placeholder="Enter About Section Inner Title" value="{{$data->aboutsectioninnertitle}}">
                                            <span class="text-danger">
                                                @error('aboutsectioninnertitle')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="aboutsectioninnerdescription">About Section Inner
                                            Description</label>
                                        <input type="text" class="form-control text-light"
                                            id="aboutsectioninnerdescription" name="aboutsectioninnerdescription"
                                            placeholder="Enter About Section Inner Description" value="{{$data->aboutsectioninnerdescription}}">
                                            <span class="text-danger">
                                                @error('aboutsectioninnerdescription')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>
                                    

                                    <div class="row d-flex align-items-center">

                                   
                                    <div class="form-group col-md-6">
                                        <label for="aboutsectionimage">About Section Image</label>
                                        <input type="file" class="form-control text-light" id="aboutsectionimage"
                                            name="aboutsectionimage" placeholder="Enter About Section Image" value="{{$data->aboutsectionimage}}">
                                            <span class="text-danger">
                                                @error('aboutsectionimage')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group col-md-5 d-flex align-items-center" >
                                        <label for="aboutsectionimage" class="mr-2">About Section Image</label>
                                        <img src="{{asset('images')}}/{{$data->aboutsectionimage}}" alt="" style="width: 100px; height:100px; border-radius:50px">
                                    </div>

                                </div>

                                    {{-- ////////// BLOG SECTION ///////// --}}


                                    <div class="form-group">
                                        <label for="blogsectiontitle">Blog Section Title</label>
                                        <input type="text" class="form-control text-light" id="blogsectiontitle"
                                            name="blogsectiontitle" placeholder="Enter Blog Section Main Title" value="{{$data->blogsectiontitle}}">
                                            <span class="text-danger">
                                                @error('blogsectiontitle')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="blogsectiondescription">Blog Section Description</label>
                                        <input type="text" class="form-control text-light" id="blogsectiondescription"
                                            name="blogsectiondescription"
                                            placeholder="Enter Blog Section Main Description" value="{{$data->blogsectiondescription}}">
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
                                            name="testimonialsectiontitle"
                                            placeholder="Enter Testimonial Section Title" value="{{$data->testimonialsectiontitle}}">
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
                                            name="consultingsectiontitle" placeholder="Enter Consulting Section Title" value="{{$data->consultingsectiontitle}}">
                                            <span class="text-danger">
                                                @error('consultingsectiontitle')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="consultingsectiondescription">Consulting Section Description</label>
                                        <input type="text" class="form-control text-light"
                                            id="consultingsectiondescription" name="consultingsectiondescription"
                                            placeholder="Enter Consulting Section Description" value="{{$data->consultingsectiondescription}}">
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
                                            placeholder="Enter Consulting Section Button Text" value="{{$data->consultingsectionbtntext}}">
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
                                            placeholder="Enter Consulting Section Button Link" value="{{$data->consultingsectionbtnlink}}">
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
                                            name="educationsectiontitle" placeholder="Enter Education Section Title" value="{{$data->educationsectiontitle}}">
                                            <span class="text-danger">
                                                @error('educationsectiontitle')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="row">


                                        
                                        <div class="form-group col-md-6">
                                            <label for="educationsectionimage">Education Section Background Image</label>
                                            <input type="file" class="form-control text-light" id="educationsectionimage"
                                            name="educationsectionimage"
                                            placeholder="Enter Education Section Background Image" value="{{$data->educationsectionimage}}">
                                            <span class="text-danger">
                                                @error('educationsectionimage')
                                                {{$message}}   
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-group col-md-6 d-flex align-items-center" >
                                            <label for="aboutsectionimage" class="mr-2">About Section Image</label>
                                            <img src="{{asset('images')}}/{{$data->educationsectionimage}}" alt="" style="width: 100px; height:100px; border-radius:50px">
                                        </div>
                                        
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="educationsectionimageright">Education Section Right Image</label>
                                        <input type="file" class="form-control text-light"
                                            id="educationsectionimageright" name="educationsectionimageright"
                                            placeholder="Enter Education Section Right Image" value="{{$data->educationsectionimageright}}">
                                            <span class="text-danger">
                                                @error('educationsectionimageright')
                                                 {{$message}}   
                                                 @enderror
                                                </span>
                                            </div>


                                            <div class="form-group col-md-6 d-flex align-items-center" >
                                                <label for="aboutsectionimage" class="mr-2">About Section Image</label>
                                                <img src="{{asset('images')}}/{{$data->educationsectionimageright}}" alt="" style="width: 100px; height:100px; border-radius:50px">
                                            </div>

                                        </div>
                                            
                                            <div class="form-group">
                                                <label for="pagetype">Education Page Type</label>
                                                <input type="text" class="form-control text-light"
                                                id="pagetype" name="pagetype"
                                            placeholder="Enter Education Page Type" value="{{$data->pagetype}}">
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