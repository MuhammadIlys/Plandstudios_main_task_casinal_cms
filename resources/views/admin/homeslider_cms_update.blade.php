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
                                <h3 class="card-title ">HOME PAGE SLIDER CMS UPDATE</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{url('homeslider_cms_update')}}/{{$data->id}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf


                                    {{-- ////////// ABOUT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="slider_title">Slider Title</label>
                                        <input type="text" class="form-control text-light" id="slider_title"
                                            name="slider_title" placeholder="Enter Slider Title"
                                            value="{{$data->slider_title}}">
                                        <span class="text-danger">
                                            @error('slider_title')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="slider_description">Slider Description</label>
                                        <input type="text" class="form-control text-light" id="slider_description"
                                            name="slider_description" placeholder="Enter Slider Description"
                                            value="{{$data->slider_description}}">
                                        <span class="text-danger">
                                            @error('slider_description')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="row">

                                        <div class="form-group">
                                            <label for="slider_image"> Slider Image</label>
                                            <input type="file" class="form-control text-light" id="slider_image"
                                            name="slider_image" placeholder="Enter Slider Image"
                                            value="{{$data->slider_image}}">
                                            <span class="text-danger">
                                                @error('slider_image')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class=" col-md-6 d-flex align-item-center">
                                            <label for="slider_background_image">Home Slider Image</label>
                                            <img src="{{asset('images')}}/{{$data->slider_image}}" alt=""
                                                style="width: 100px; height:100px; border-radius:50px">

                                        </div>
                                        
                                    </div>




                                    <div class="form-group">
                                        <label for="slider_btn_one_text">Slider Button one text</label>
                                        <input type="text" class="form-control text-light" id="slider_btn_one_text"
                                            name="slider_btn_one_text" placeholder="Enter Slider Button one text"
                                            value="{{$data->slider_btn_one_text}}">
                                        <span class="text-danger">
                                            @error('slider_btn_one_text')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="slider_btn_one_link"> Slider Button one link</label>
                                        <input type="text" class="form-control text-light" id="slider_btn_one_link"
                                            name="slider_btn_one_link" placeholder="Enter Slider Button one Link"
                                            value="{{$data->slider_btn_one_link}}">
                                        <span class="text-danger">
                                            @error('slider_btn_one_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="slider_btn_two_text"> Slider Button two text</label>
                                        <input type="text" class="form-control text-light" id="slider_btn_two_text"
                                            name="slider_btn_two_text" placeholder="Enter Slider Button Two text"
                                            value="{{$data->slider_btn_two_text}}">
                                        <span class="text-danger">
                                            @error('slider_btn_two_text')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="slider_btn_two_link"> Slider Button Two link</label>
                                        <input type="text" class="form-control text-light" id="slider_btn_two_link"
                                            name="slider_btn_two_link" placeholder="Enter Slider Button Two Link"
                                            value="{{$data->slider_btn_two_link}}">
                                        <span class="text-danger">
                                            @error('slider_btn_two_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="slider_background_image">Home Slider Background Image</label>
                                            <input type="file" class="form-control text-light"
                                                id="slider_background_image" name="slider_background_image"
                                                placeholder="Enter Slider Background Image"
                                                value="{{$data->slider_background_image}}">
                                            <span class="text-danger">
                                                @error('slider_background_image')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class=" col-md-6 d-flex align-item-center">
                                            <label for="slider_background_image">Home Slider Background Image</label>
                                            <img src="{{asset('images')}}/{{$data->slider_background_image}}" alt=""
                                                style="width: 100px; height:100px; border-radius:50px">

                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <label for="slider_page_type"> Slider Page type</label>
                                            <input type="text" class="form-control text-light" id="slider_page_type"
                                                name="slider_page_type" placeholder="Enter Slider Page Type"
                                                value="{{$data->slider_page_type}}">
                                            <span class="text-danger">
                                                @error('slider_page_type')
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