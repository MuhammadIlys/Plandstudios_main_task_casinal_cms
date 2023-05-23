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



            <h1 class="text-center">Hello </h1>
            {{-- <img src="{{asset('gaming_mouse.jpeg')}}" alt=""> --}}
            {{-- {{$data}} <br> --}}

            {{-- // FOR JOIN
            @foreach ($data as $item)
            {{$item->id}} <br>
            {{$item->blog_title}} <br>
            {{$item->blog_description}} <br>
            {{$item->coursesectiontitle}} <br>
            {{$item->aboutsectiontitle}} <br>
            {{$item->created_at}} <br>
            @endforeach --}}
            

            {{-- ////// FOR CHUNK ///// --}}
            {{-- @foreach ($data as $item=>$name)
            {{$name}} <br>
            {{$item}} <br>
            @endforeach --}}

            {{-- {{$data->id}} --}}

            
            @foreach ($data as $data)
                
            {{$data->id}} <br>
            
            @endforeach
           

            
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>