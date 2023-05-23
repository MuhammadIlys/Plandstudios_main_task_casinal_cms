<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')

   <style>
    #overlay {
  position: fixed;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.377);
  z-index: 2;
  /* cursor: pointer; */
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
      <div class="main-panel d-flex align-items-center">
          <div id="overlay"> </div>
          <div class="content-wrapper d-flex justify-content-center align-items-center" style="background-image: url('{{asset('img.jpg')}}'); background-repeat:no-repeat; background-size:cover ">


            <section class="text-center d-flex flex-column align-middle">
              <h1>Welcome {{Auth::user()->name}}</h1>
              <p style="font-size:20px;  " class="fw-normal">A warm welcome and lots of good wishes on becoming part <br>of our growing team</p>
              <p>Enjoy your Dashboard</p>
            </section>
          </div>
        </div>


            

            
           

            
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>