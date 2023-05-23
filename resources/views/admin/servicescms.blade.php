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


                @if ($count < 1)
                    
                
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>No Data in Services</strong> You should Insert some data first.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                @endif
                  
                

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title ">SERVICES PAGE CMS  </h3>
                                {{-- <p class="card-description"> Basic form layout </p> --}}
                                <form class="forms-sample" action="services_cms" method="POST">
                                    @csrf

                                    {{-- ////////// ABOUT SECTION ///////// --}}

                        

                                    <div class="form-group">
                                        <label for="servicestitle">Services Title</label>
                                        <input type="text" class="form-control text-light" id="servicestitle"
                                            name="servicestitle" placeholder="Enter services title">
                                            <span class="text-danger">
                                                @error('servicestitle')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="pagetype">Services Page type</label>
                                        <input type="text" class="form-control text-light" id="pagetype"
                                            name="pagetype" placeholder="Enter services Page Type">
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
                        <h3 class="card-title ">SERVICES PAGE DATA </h3>
                            
                        
                        <div class="table-responsive">
                            <table class="table table-striped table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Services Title</th>
                                    <th scope="col">Page Type</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
    
                                    @foreach ($data as $data)
                                        
                                   
                                  <tr>
                                    <th scope="row">{{$data->id}}</th>
                                    <td>{{$data->servicestitle}}</td>
                                    <td>{{$data->pagetype}}</td>

                                    <td>
                                        <a href="{{url('services_cms_edit')}}/{{$data->id}}" class="btn btn-success float-right ">Update</a>
                                        <a href="{{url('services_cms_delete')}}/{{$data->id}}" class="btn btn-danger float-right">Delete</a>
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