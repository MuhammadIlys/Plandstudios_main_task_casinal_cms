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

                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>EMPLOYE</strong> Update successfully !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Employe Data </h4>
                            <form class="forms-sample" action="{{route('employe.update',$data->id)}}" method="POST">
                                @csrf
                                @method('put')
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter employe name" value="{{$data->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter employe email" value="{{$data->email}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="role" name="role"
                                            placeholder="Enter employe role" value="{{$data->role}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="department" class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="department" name="department"
                                            placeholder="Enter employe department" value="{{$data->department}}">
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary float-right ">Submit</button>
                                
                            </form>
                        </div>
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