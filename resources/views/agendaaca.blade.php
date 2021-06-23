@extends('layout.master')

@section('title', 'Agenda Pondok Pesantren Al-Muttaqin')

@section('warnaaktif')
<ul class="nav navbar-nav navbar-right">
    <li><a href="/">Beranda</a></li>
    <li><a href="/berita">Berita</a></li>
    <li class="dropdown active">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Agenda Kegiatan</a>
      <ul class="dropdown-menu">
        <li><a href="/agendasan">Agenda Santri</a></li>
        <li class="active"><a href="/agendaaca">Agenda Acara</a></li>
        <li class="dropdown-submenu dropdown">
        </li>
      </ul>
    <li><a href="/guru">Guru</a></li>
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
          <h1>Acara Pondok Pesantren Al-Muttaqin</h1>
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
              <div class="text-uppercase probootstrap-uppercase"><br><br>Acara Terbaru</div>
              <h3>Menginformasikan ketika ada acara yang di lakukan pada Pondok Pesantren Al-Muttaqin<br><br></h3>
            </div>
            <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_4.jpg)">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  
  <section class="probootstrap-section">
    <div class="container">

      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Tempora consectetur unde nisi</h3>
              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Tempora consectetur unde nisi</h3>
              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Tempora consectetur unde nisi</h3>
              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
            </div>
          </a>
        </div>

        <div class="clearfix visible-md-block"></div>
        
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Tempora consectetur unde nisi</h3>
              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>
        
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Tempora consectetur unde nisi</h3>
              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Tempora consectetur unde nisi</h3>
              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>

      </div>
    </div>
  </section>
  @endsection