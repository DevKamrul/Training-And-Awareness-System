<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Training @yield('title_area') </title>

  @yield('css_js')

  
</head>

<body>
   
   <div class="all-item">
  

    <!--Header menu option start -->       
    @include('frontView.include.header')
   <!--Header menu option End -->


  <!--BG image section start-->
  @yield('printed')
  <!--BG image section End-->

  <div class="container">
    <!-- Container For all section-->
    <!--research section start-->
    
    @include('frontView.include.research')

  <!--research section End-->
    <!--Current research publication section start-->
   
    <!--Current research publication section End-->

    <!-- Project section start -->
     @include('frontView.include.project')
    <!-- Project section end -->
  
  <!-- Event section start -->
    @include('frontView.include.event')
  <!-- Event section End -->
  </div>
  
  <!-- footer section Start -->
  @include('frontView.include.footer')
 <!-- footer copyright end -->
</div>
  @yield('css_js1')
</body>

</html>
