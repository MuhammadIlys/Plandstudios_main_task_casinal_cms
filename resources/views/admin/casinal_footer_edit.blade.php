<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            border-radius: 50px;

        }
    </style>
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
                                <h3 class="card-title ">CASINAL FOOTER</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample"
                                    action="{{route('casinal_footer_update',['id'=>$casinal_footer->id])}}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf

                                    {{-- ////////// ABOUT SECTION ///////// --}}



                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="casinal_footer_phone_icon">Casinal Footer Contact Icon</label>
                                            <input type="file" class="form-control text-light"
                                                id="casinal_footer_phone_icon" name="casinal_footer_phone_icon"
                                                placeholder="Enter Casinal Footer Contact Icon">
                                            <span class="text-danger">
                                                @error('casinal_footer_phone_icon')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-md-5 offset-1">
                                            <label for="">Footer Contact Icon</label>
                                            <img src="{{asset('images/footer')}}/{{$casinal_footer->contact_icon}}"
                                                alt="" style="margin-left: 50px; border:1px solid white">
                                        </div>


                                    </div>

                                    <div class="form-group ">
                                        <label for="casinal_footer_phone_number">Casinal Footer Contact Number</label>
                                        <input type="text" class="form-control text-light"
                                            id="casinal_footer_phone_number" name="casinal_footer_phone_number"
                                            placeholder="Enter Casinal Footer Phone Number" value="{{$casinal_footer->contact}}">
                                        <span class="text-danger">
                                            @error('casinal_footer_phone_number')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="casinal_footer_email_icon">Casinal Footer Email Icon</label>
                                            <input type="file" class="form-control text-light"
                                                id="casinal_footer_email_icon" name="casinal_footer_email_icon"
                                                placeholder="Enter Casinal Footer Contact Icon">
                                            <span class="text-danger">
                                                @error('casinal_footer_email_icon')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="col-md-5 offset-1">
                                            <label for="">Footer Email Icon</label>
                                            <img src="{{asset('images/footer')}}/{{$casinal_footer->email_icon}}" alt=""
                                                style="margin-left: 50px; border:1px solid white">
                                        </div>


                                    </div>




                                    <div class="form-group">
                                        <label for="casinal_footer_email">Casinal Footer Email</label>
                                        <input type="text" class="form-control text-light" id="casinal_footer_email"
                                            name="casinal_footer_email" placeholder="Enter Casinal Footer Email" value="{{$casinal_footer->email}}">
                                        <span class="text-danger">
                                            @error('casinal_footer_email')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>



                                    <div class="form-group">
                                        <label for="casinal_footer_information">Casinal Footer Information</label>
                                        <textarea type="text" class="form-control text-light"
                                            id="casinal_footer_information"
                                            name="casinal_footer_information"></textarea>
                                        <span class="text-danger">
                                            @error('casinal_footer_information')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="casinal_footer_logo">Casinal Footer Logo</label>
                                            <input type="file" class="form-control text-light" id="casinal_footer_logo"
                                                name="casinal_footer_logo">
                                            <span class="text-danger">
                                                @error('casinal_footer_logo')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-5 offset-1">
                                            <label for="">Footer Logo</label>
                                            <img src="{{asset('images/footer')}}/{{$casinal_footer->footer_logo}}"
                                                alt="" style="margin-left: 50px; border:1px solid white">
                                        </div>


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



<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>

</html>