@extends('layout.master')

@section('title', 'Agenda Pondok Pesantren Al-Muttaqin')

@section('warnaaktif')
<ul class="nav navbar-nav navbar-right">
    <li><a href="/">Beranda</a></li>
    <li><a href="/berita">Berita</a></li>
    <li class="dropdown active">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Agenda Kegiatan</a>
      <ul class="dropdown-menu">
        <li class="active"><a href="/agendasan">Agenda Santri</a></li>
        <li><a href="/agendaaca">Agenda Acara</a></li>
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
              <div class="text-uppercase probootstrap-uppercase"><br><br>Kegiatan Terbaru</div>
              <h3>Menginformasikan kegiatan apa saja yang di lakukan pada Pondok Pesantren Al-Muttaqin<br><br></h3>
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
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Bangun Malam dan Persiapan Sholat Tahajud</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 03.00 - 03.30</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Shoiat Tahajud dan Membaca Surat Waqiah</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 03.30 - 04.30</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        

        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Sholat Subuh Barjama’ah di Masjid</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 04.30 - 05.00 </span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Belajar Per Kelas</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 05.00 - 06.00</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Bersih - Bersih dan Persiapan Berangkat Sekolah</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 06.00 - 06.30 </span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Sarapan dan Berangkat Sekolah (Bagi Yang Sekolah)</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 06.30 - 07.30</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        

        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Sholat Dhuha Bersama</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 07.30 - 08.30</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Tawasul Kepada Guru</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 08.30 - 10.00</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Qoilulah ( Istirahat )</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 10.00 - 11.00</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Persiapan Sholat Dzuhur</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 11.00 - 11.45</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Sholat Dzuhur Berjama'ah</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 11.45 - 12.30</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Belajar Di Kelas</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 12.30 - 14.00</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Belajar Di Kelas & Istirahat Bagi Yang Tidak Sekolah</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 14.00 - 14.30</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Persiapan Sholat Asar di Pondok</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 14.30 - 15.00</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a  class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Sholat Asar Berjama'ah di Masjid</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 15.00 - 15.30</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Belajar Per Kelas</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 15.30 - 16.30</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Bersih - Bersih </h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 16.30 - 17.00</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Istirahat Bagi Yang Sekolah</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 17.00 - 17.30</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        

        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Belajar Per Kelas</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 18.15 - 19.30</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Sholat Isya Berjama'ah</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 19.30 - 20.00</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Menghafal Bersama</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 20.00 - 21.00</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a class="probootstrap-featured-news-box">
            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
            <div class="probootstrap-text">
              <h3>Istirahat Malam</h3>
              <span class="probootstrap-date"><i class="icon-clock"></i>Pukul : 21.00 - 03.00</span>
              <span class="probootstrap-location"><i class="icon-location2"></i>Pondok Pesantren Al-Muttaqin</span>
            </div>
          </a>
        </div>
        

      </div>
    </div>
  </section>
  @endsection