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
                                <h3 class="card-title ">SERVICES PAGE CMS UPDATE</h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="{{asset('services_cms_update')}}/{{$data->id}}" method="POST">
                                    @csrf

                                    {{-- ////////// ABOUT SECTION ///////// --}}

                        

                                    <div class="form-group">
                                        <label for="servicestitle">Services Title</label>
                                        <input type="text" class="form-control text-light" id="servicestitle"
                                            name="servicestitle" placeholder="Enter services title" value=" {{ $data->servicestitle}}">
                                            <span class="text-danger">
                                                @error('servicestitle')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="pagetype">Services Page type</label>
                                        <input type="text" class="form-control text-light" id="pagetype"
                                            name="pagetype" placeholder="Enter services Page Type" value=" {{ $data->pagetype}}">
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