<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Yok!Pergi</title>

    <!-- Style CSS -->
    @include('includes.frontend.style')

  </head>
  <body>

    <!-- Header Section Start -->
    @include('includes.frontend.header')
    <!-- Header Section End --> 

    <!-- Blog Section -->
    @include('includes.frontend.wisata')
    <!-- blog Section End -->

    <!-- Informasi Section Start -->
    @include('includes.frontend.informasi')
    <!-- Informasi Section End -->    

    <!-- Galeri Wisata Section -->
    @include('includes.frontend.galeri')
    <!-- Galeri Wisata Section Ends --> 
    
    <!-- Footer Section Start -->
    @include('includes.frontend.footer')
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    @include('includes.frontend.script')

  </body>
</html>