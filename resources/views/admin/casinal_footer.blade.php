<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')

   <style>
    img{
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
                                <form class="forms-sample" action="{{route('casinal_footer_store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    {{-- ////////// ABOUT SECTION ///////// --}}

                        

                                   <div class="form-group">
                                        <label for="casinal_footer_phone_icon">Casinal Footer Contact Icon</label>
                                        <input type="file" class="form-control text-light" id="casinal_footer_phone_icon"
                                            name="casinal_footer_phone_icon" placeholder="Enter Casinal Footer Contact Icon">
                                            <span class="text-danger">
                                                @error('casinal_footer_phone_icon')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="casinal_footer_phone_number">Casinal Footer Contact Number</label>
                                        <input type="text" class="form-control text-light" id="casinal_footer_phone_number"
                                            name="casinal_footer_phone_number" placeholder="Enter Casinal Footer Phone Number">
                                            <span class="text-danger">
                                                @error('casinal_footer_phone_number')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="casinal_footer_email_icon">Casinal Footer Email Icon</label>
                                        <input type="file" class="form-control text-light" id="casinal_footer_email_icon"
                                            name="casinal_footer_email_icon" placeholder="Enter Casinal Footer Contact Icon">
                                            <span class="text-danger">
                                                @error('casinal_footer_email_icon')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="casinal_footer_email">Casinal Footer Email</label>
                                        <input type="text" class="form-control text-light" id="casinal_footer_email"
                                            name="casinal_footer_email" placeholder="Enter Casinal Footer Email">
                                            <span class="text-danger">
                                                @error('casinal_footer_email')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="casinal_footer_information">Casinal Footer Information</label>
                                        <textarea type="text" class="form-control text-light" id="casinal_footer_information"
                                            name="casinal_footer_information" ></textarea>
                                            <span class="text-danger">
                                                @error('casinal_footer_information')
                                                 {{$message}}   
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="casinal_footer_logo">Casinal Footer Logo</label>
                                        <input type="file" class="form-control text-light" id="casinal_footer_logo"
                                            name="casinal_footer_logo" >
                                            <span class="text-danger">
                                                @error('casinal_footer_logo')
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
                                <h3 class="card-title ">CASINAL FOOTER All DATA </h3>

                                <div class="table-responsive">
                                <table class="table table-striped table-dark">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">CONTACT ICON</th>
                                        <th scope="col">CONTACT NUMBER</th>
                                        <th scope="col">EMAIL ICON</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">FOOTER INFORMATION</th>
                                        <th scope="col">FOOTER LOGO</th>
                                        <th scope="col">ACTION</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($casinal_footer as $footer)
                                            
                                        
                                      <tr>
                                        <td >{{$footer->id}}</td>

                                        <td>
                                            <img src="{{asset('images/footer')}}/{{$footer->contact_icon}}" alt="">
                                        </td>

                                        <td>{{$footer->contact}}</td>

                                        <td><img src="{{asset('images/footer')}}/{{$footer->email_icon}}" alt=""></td>

                                        <td>{{$footer->email}}</td>
                                        <td>{{$footer->footer_information}}</td>

                                        <td><img src="{{asset('images/footer')}}/{{$footer->footer_logo}}" alt=""></td>

                                        <td>
                                            <a href="{{route('casinal_footer_edit',['id'=>$footer->id])}}" class="btn btn-success">Update</a>
                                            <a href="{{route('casinal_footer_delete',['id'=>$footer->id])}}" class="btn btn-danger">Delete</a>
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