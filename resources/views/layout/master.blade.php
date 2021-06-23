
<!DOCTYPE html>

<!-- 
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/poto/logor.png"/>
    <title>@yield('title')</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    {{-- <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div> --}}
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Kp. Kukun Rt/Rw 09/05 Des. Ciantra Kec. Cikarang Selatan Kab. Bekasi</span>
              <span><i class="icon-phone2"></i>0853 2250 5070</span>
              {{-- <span><i class="icon-mail"></i>contoh@gmail.com</span> --}}
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="https://wa.me/6285322505070?text=Permisi Assalamu`alaikum Wr. Wb. saya ingin mendaftar di Pondok Pesantren Al-Muttaqin"><i class="icon-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      {{-- <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">       
          <div id="navbar-collapse" class="navbar-collapse collapse">
            @yield('warnaaktif')
            <figure class="media navbar-right">
                <img src="img/poto/logo.jpeg" width="100" class="img-responsive">
            </figure>
          </div>
        </div>
      </nav> --}}

      {{-- end navbar --}}
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <figure class="media navbar-right">
                <img src="img/poto/logor.png" width="100" class="img-responsive">
            </figure>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            @yield('warnaaktif')
          </div>
        </div>
      </nav>

      @yield('isi')

      {{-- Mulai footer --}}
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Tentang Pondok Pesantren Al-Muttqqin</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p>
                <h3>Sosial Media</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="https://wa.me/6285322505070?text=Permisi Assalamu`alaikum Wr. Wb. saya ingin mendaftar di Pondok Pesantren Al-Muttaqin"><i class="icon-whatsapp"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Halaman</h3>
                <ul>
                  <li><a href="/">Beranda</a></li>
                  <li><a href="/berita">Berita</a></li>
                  <li><a href="/agendasan">Agenda Santri</a></li>
                  <li><a href="/agendaaca">Agenda Acara</a></li>
                  <li><a href="/guru">Guru</a></li>
                  <li><a href="/gallery">Gallery Pesantren</a></li>
                  <li><a href="/tentang">Tentang Pesantren</a></li>
                  <li><a href="/login">Login Admin</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Kontak Informasi</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Kp. Kukun Rt/Rw 09/05 Des. Ciantra Kec. Cikarang Selatan Kab. Bekasi</span></li>
                  {{-- <li><i class="icon-mail"></i><span>contoh@gmail.com</span></li> --}}
                  <li><i class="icon-phone2"></i><span>0853 2250 5070</span></li>
                  <li><i class="icon-library"></i><span>Bank BJB 
                      <br>No. Rek : 0088625250100  <br>( YAYASAN AL-MUTTAQIN AL-ISLAMI BKSI )</span></li>
                </ul>
                <h3></h3>
              </div>
            </div>
          </div>
        </div>
        {{-- end footer --}}

        {{-- mulai backtop --}}
        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>Pondok Pesantren Yatim Piatu & Dhuafa AL MUTTAQIN <i class="icon icon-heart"></i> </p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Kembali Keatas<i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>