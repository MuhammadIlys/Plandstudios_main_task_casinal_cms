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

                
              

                

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Enter Employe Data </h4>
                            <form class="forms-sample" action="{{route('employe.store')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter employe name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter employe email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="role" name="role"
                                            placeholder="Enter employe role" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="department" class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="department" name="department"
                                            placeholder="Enter employe department" required>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary float-right ">Submit</button>
                                <button class="btn btn-dark float-right mr-2">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Employe Data </h4>

                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">ROLE</th>
                                        <th scope="col">DEPARTMENT</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $employe)


                                    <tr>
                                        <th scope="row">{{$employe->id}}</th>
                                        <td>{{$employe->name}}</td>
                                        <td>{{$employe->email}}</td>
                                        <td>{{$employe->role}}</td>
                                        <td>{{$employe->department}}</td>
                                        <td>
                                            <a href="{{route('employe.show',$employe->id)}}"
                                                class="btn btn-success float-end">Show</a>
                                            
                                            <a href="{{route('employe.destroy',$employe->id)}}/edit"
                                                class="btn btn-primary float-end">Update</a>
                                        </td>
                                        <td>
                                            <form action="{{route('employe.destroy',$employe->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger float-end">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>

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