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
                                <h3 class="card-title ">HOME PAGE SLIDER CMS</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="homeslider_cms" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf


                                    {{-- ////////// ABOUT SECTION ///////// --}}

                                    <div class="form-group">
                                        <label for="slider_title">Slider Title</label>
                                        <input type="text" class="form-control text-light" id="slider_title"
                                            name="slider_title" placeholder="Enter Slider Title">
                                        <span class="text-danger">
                                            @error('slider_title')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="slider_description">Slider Description</label>
                                        <input type="text" class="form-control text-light" id="slider_description"
                                            name="slider_description" placeholder="Enter Slider Description">
                                        <span class="text-danger">
                                            @error('slider_description')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="slider_image"> Slider Image</label>
                                        <input type="file" class="form-control text-light" id="slider_image"
                                            name="slider_image" placeholder="Enter Slider Image">
                                        <span class="text-danger">
                                            @error('slider_image')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="slider_btn_one_text">Slider Button one text</label>
                                        <input type="text" class="form-control text-light" id="slider_btn_one_text"
                                            name="slider_btn_one_text" placeholder="Enter Slider Button one text">
                                        <span class="text-danger">
                                            @error('slider_btn_one_text')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="slider_btn_one_link"> Slider Button one link</label>
                                        <input type="text" class="form-control text-light" id="slider_btn_one_link"
                                            name="slider_btn_one_link" placeholder="Enter Slider Button one Link">
                                        <span class="text-danger">
                                            @error('slider_btn_one_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="slider_btn_two_text"> Slider Button two text</label>
                                        <input type="text" class="form-control text-light" id="slider_btn_two_text"
                                            name="slider_btn_two_text" placeholder="Enter Slider Button Two text">
                                        <span class="text-danger">
                                            @error('slider_btn_two_text')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="slider_btn_two_link"> Slider Button Two link</label>
                                        <input type="text" class="form-control text-light" id="slider_btn_two_link"
                                            name="slider_btn_two_link" placeholder="Enter Slider Button Two Link">
                                        <span class="text-danger">
                                            @error('slider_btn_two_link')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="slider_background_image">Home Slider Background Image</label>
                                        <input type="file" class="form-control text-light" id="slider_background_image"
                                            name="slider_background_image" placeholder="Enter Slider Background Image">
                                        <span class="text-danger">
                                            @error('slider_background_image')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="slider_page_type"> Slider Page type</label>
                                        <input type="text" class="form-control text-light" id="slider_page_type"
                                            name="slider_page_type" placeholder="Enter Slider Page Type">
                                        <span class="text-danger">
                                            @error('slider_page_type')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <a href="{{url('homeslider_cms_edit')}}"
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
                                <h3 class="card-title ">ALL SLIDERS </h3>

                                <div class="table-responsive">

                                    <table class="table table-striped table-dark" id="mytable">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-light">SLIDER ID</th>
                                                <th scope="col" class="text-light">Slider Title</th>
                                                <th scope="col" class="text-light">Slider Description</th>
                                                <th scope="col" class="text-light">Slider Image</th>
                                                <th scope="col" class="text-light">Slider Btn One Text</th>
                                                <th scope="col" class="text-light">Slider Btn One Link</th>
                                                <th scope="col" class="text-light">Slider Btn Two Text</th>
                                                <th scope="col" class="text-light">Slider Btn Two Link</th>
                                                <th scope="col" class="text-light">Slider Background Image</th>
                                                <th scope="col" class="text-light">Page type</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $data)


                                            <tr>
                                                <th scope="row" class="text-light">{{$data->id}}</th>
                                                <td class="text-light">{{$data->slider_title}}</td>
                                                <td class="text-light">{{$data->slider_description}}</td>

                                                <td class="text-light">
                                                    <img src="{{asset('images/')}}/{{$data->slider_image}}" alt=""
                                                        style="width: 100px; height:100px; border-radius:50px">
                                                </td>

                                                <td class="text-light">{{$data->slider_btn_one_text}}</td>
                                                <td class="text-light">{{$data->slider_btn_one_link}}</td>

                                                <td class="text-light">{{$data->slider_btn_two_text}}</td>
                                                <td class="text-light">{{$data->slider_btn_two_link}}</td>

                                                <td class="text-light">
                                                    <img src="{{asset('images/')}}/{{$data->slider_background_image}}"
                                                        alt="" style="width: 100px; height:100px; border-radius:50px">
                                                </td>

                                                <td class="text-light">{{$data->slider_page_type}}</td>



                                                <td class="text-light">
                                                    <a href="{{route('homeslider_cms_edit',['id'=>$data->id])}}"
                                                        class="btn btn-success">Update</a>
                                                    <a href="{{route('homeslider_cms_update',['id'=>$data->id])}}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>

                                                @endforeach

                                            </tr>

                                        </tbody>
                                    </table>
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