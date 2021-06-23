@extends('layout.master')

@section('title', 'Agenda Pondok Pesantren Al-Muttaqin')

@section('warnaaktif')
<ul class="nav navbar-nav navbar-right">
    <li><a href="/">Beranda</a></li>
    <li><a href="/berita">Berita</a></li>
    <li class="active"><a href="/agenda">Agenda Kegiatan</a></li>
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
          <h1>Kegiatan Pondok Pesantren Al-Muttaqin</h1>
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
              <div class="text-uppercase probootstrap-uppercase">Kegiatan Terbaru</div>
              <h3>Menginformasikan kegiatan apa saja yang di lakukan pada Pondok Pesantren Al-Muttaqin</h3>
            </div>
            <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_4.jpg)">
              <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
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