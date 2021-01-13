<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    @foreach ($wisataData as $wisata)
        @php
            $nama = $wisata->nama_wisata
        @endphp
    @endforeach

    <title>Yok!Pergi | {{ $nama}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/detail/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/detail/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/detail/css/themify-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/detail/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/detail/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/detail/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/detail/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/detail/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/detail/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" type="text/css" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="{{ asset('frontend/img/logo.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{ route('blog.index') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
    
    <!-- Wisata Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                @foreach ($wisataData as $data)
                                    @foreach ($data->galeriRelasiIndex as $foto)
                                            <img class="product-big-img" src="{{ url($foto->url_foto) }}" alt="">
                                    @endforeach
                                @endforeach
                            </div>
                            
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    @foreach ($items as $item)
                                    <div class="pt active" data-imgbigurl="{{ url($item->url_foto) }}">
                                        <img src="{{asset('uploads/foto-wisata')}}/{{$item->url_foto}}" alt="" />
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @foreach ($wisataData as $data)
                            <div class="col-lg-6">
                                <div class="product-details">
                                    <div class="pd-title">
                                        <h3>{{ $data->nama_wisata }}</h3>
                                        @if ($data->kecamatan == null && $data->kabupaten == null)
                                            <span>{{ $data->provinsi }}</span>
                                        @elseif ($data->kecamatan == null)
                                            <span>{{ $data->kabupaten }}, {{ $data->provinsi }}</span>
                                        @else
                                            <span>{{ $data->kecamatan }}, {{ $data->kabupaten }}, {{ $data->provinsi }}</span>
                                        @endif
                                    </div>
                                    <div class="pd-desc text-justify">
                                        <p>
                                            {{ $data->deskripsi }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Wisata Section End -->

    <!-- Footer Section Begin -->
    <footer>          
        <div class="container">
          <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="footer-text">
                        <p>Tugas Akhir Pemrograman Website - Universitas Trilogi</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>All copyrights reserved &copy; 2021 - Template by <a rel="nofollow" href="https://uideck.com">UIdeck</a></p>
                    </div>
                </div>  
          </div>
        </div>
      </footer>
    <!-- Footer Section End -->
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lnr lnr-arrow-up"></i>
      </a>

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/detail/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/detail/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/detail/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/detail/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/detail/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/detail/js/jquery.dd.min.js') }}"></script>
    <script src="{{ asset('frontend/detail/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/detail/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/detail/js/main.js') }}"></script>
</body>

</html>