@extends('layout.master')

@section('title', 'Guru Pondok Pesantren Al-Muttaqin')

@section('warnaaktif')
<ul class="nav navbar-nav navbar-right">
    <li><a href="/">Beranda</a></li>
    <li><a href="/berita">Berita</a></li>
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Agenda Kegiatan</a>
      <ul class="dropdown-menu">
        <li><a href="/agendasan">Agenda Santri</a></li>
        <li><a href="/agendaaca">Agenda Acara</a></li>
        <li class="dropdown-submenu dropdown">
        </li>
      </ul>
    <li class="active"><a href="/guru">Guru</a></li>
    <li><a href="/gallery">Gallery Pesantren</a></li>
    <li><a href="/tentang">Tentang Pesantren</a></li>
</ul>
@endsection

@section('isi')

<br>
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate">
          <h1>Para Guru</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="probootstrap-flex-block">
            <div class="probootstrap-text probootstrap-animate">
              <div class="text-uppercase probootstrap-uppercase"><br><br>Pengajar Aktif</div>
              <h3>Mengenal lebih dekat dengan bapak dan ibu guru di Pondok Pesantren Al-Muttaqin</h3>
              <p><br><br><br></p>
            </div>
            <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  
  <section class="probootstrap-section">
    <div class="container">
      

      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-teacher text-center probootstrap-animate">
            <figure class="media">
              <img src="img/poto/gal1.jpg" width="90px" height="90">
            </figure>
            <div class="text">
              <h3>Chris Worth</h3>
              <p>Physical Education</p>
              <ul class="probootstrap-footer-social">
                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-teacher text-center probootstrap-animate">
            <figure class="media">
              <img src="img/person_5.jpg"  width="100px" class="img-responsive">
            </figure>
            <div class="text">
              <h3>Janet Morris</h3>
              <p>English Teacher</p>
              <ul class="probootstrap-footer-social">
                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-teacher text-center probootstrap-animate">
            <figure class="media">
              <img src="img/person_6.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
            </figure>
            <div class="text">
              <h3>Linda Reyez</h3>
              <p>Math Teacher</p>
              <ul class="probootstrap-footer-social">
                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-teacher text-center probootstrap-animate">
            <figure class="media">
              <img src="img/person_7.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
            </figure>
            <div class="text">
              <h3>Jessa Sy</h3>
              <p>Physics Teacher</p>
              <ul class="probootstrap-footer-social">
                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-teacher text-center probootstrap-animate">
            <figure class="media">
              <img src="img/person_7.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
            </figure>
            <div class="text">
              <h3>Jessa Sy</h3>
              <p>Physics Teacher</p>
              <ul class="probootstrap-footer-social">
                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="probootstrap-teacher text-center probootstrap-animate">
            <figure class="media">
              <img src="img/person_7.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
            </figure>
            <div class="text">
              <h3>Jessa Sy</h3>
              <p>Physics Teacher</p>
              <ul class="probootstrap-footer-social">
                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

     

      

      

    </div>
  </section>
  @endsection