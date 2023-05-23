<!DOCTYPE html>
<html lang="en">

<head>
    @include('casinal.casinal_header')

</head>

<body>
    <!--header section start -->
    <div class="header_section">
        <div class="header_bg">
            @include('casinal.casinal_nav')
        </div>
    </div>
    <!--header section end -->
    <!-- blog section start -->

    {{-- @include('casinal.casinal_search_form'); --}}

    
    <div class="blog_section layout_padding">

        <div class="container">
            <h1 class="news_taital">{{$blogs->blog_title}} </h1>
            <div class="col-md-12">
                <img src="{{asset('images')}}/{{$blogs->blog_image}}" alt="" class="w-100">
                <p>{{$blogs->blog_description}}

                </p>

            </div>
        </div>
    </div>
    <!-- blog section end -->
    <!-- footer section start -->
    @include('casinal.casinal_footer')

</body>

</html>