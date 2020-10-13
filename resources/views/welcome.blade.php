<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->


  <!-- Google Fonts -->

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/vendor/css/style.css')}}" rel="stylesheet">

    <!-- tron -->
    <link href="{{asset('admin/css/jumbotron-narrow.css')}}" rel="stylesheet">
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>


    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('admin/assets/scss/style.css')}}">


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
          <!-- ======= Header ======= -->

        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
            <div class="container d-flex align-items-center">

                <div class="logo mr-auto">
                    <h1 class="text-light"><a href="index.html"><span>Pilih SPKT</span></a></h1>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a  href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="text-light" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="text-light" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

</header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="row loket">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
                <div class="col-md-6">
                    <div class="1 jumbotrontable" style="padding-top:20px;padding-bottom:20px;"><h2>Surat Keterangan Catatan Kepolisian</h2><a href="{{ url('/skck') }}"><button  class="btn btn-success" type="button">
                    <span class="glyphicon glyphicon-credit-card" >&nbsp;</span>SKCK</button></a></div></div>
                <div class="col-md-6">
                        <div class="2 jumbotrontable" style="padding-top:20px;padding-bottom:20px;"><h2>Surat Keterangan Tanda Lapor Kehilangan</h2><a href="{{ url('/sktlk') }}"><button class="btn btn-success" type="button">
                    <span class="glyphicon glyphicon-credit-card">&nbsp;</span>SKTLK</button></a></div></div>
                <div class="col-md-6">
                        <div class="3 jumbotrontable" style="padding-top:20px;padding-bottom:20px;"><h2>Laporan Polisi</h2><a href="{{ url('/lp') }}"><button class="btn btn-success" type="button">
                    <span class="glyphicon glyphicon-credit-card">&nbsp;</span>LP</button></a></div></div>
                <div class="col-md-6">
                        <div class="4 jumbotrontable" style="padding-top:20px;padding-bottom:20px;"><h2>Surat Pemberitahuan Perkembangan Hasil Penyidikan</h2><button class="btn btn-success" type="button">
                    <span class="glyphicon glyphicon-credit-card">&nbsp;</span>SP2HP</button></div></div>
                <div class="col-md-6">
                        <div class="5 jumbotrontable" style="padding-top:20px;padding-bottom:20px;"><h2>Surat Tanda Terima Pemberitahuan</h2><button class="btn btn-success" type="button">
                    <span class="glyphicon glyphicon-credit-card">&nbsp;</span>STTP</button></div></div>
                <div class="col-md-6">
                        <div class="6 jumbotrontable" style="padding-top:20px;padding-bottom:20px;"><h2>Surat Tanda Terima Laporan Polisi</h2><button class="btn btn-success" type="button">
                    <span class="glyphicon glyphicon-credit-card">&nbsp;</span>STTLP</button></div></div>
                <div class="col-md-6">
                        <div class="7 jumbotrontable" style="padding-top:20px;padding-bottom:20px;"><h2>Surat Keterangan Lapor Diri </h2><button class="btn btn-success" type="button">
                    <span class="glyphicon glyphicon-credit-card">&nbsp;</span>SKLD</button></div></div>

        </div>
        <div class="col-md-1">
        </div>
        {{-- <div class="col-md-7">
            <div class="title m-b-md">
                <video width="1050" height="590" preload="auto" autoplay muted loop>
                    <source src="{{URL::asset('video/upload.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

            </div>
        </div> --}}
    </div>

    <svg class="hero-waves"  viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->
        </div>
    </body>
</html>
