@extends('layout.master')

@section('title', 'Berita Pondok Pesantren Al-Muttaqin')

@section('warnaaktif')
<ul class="nav navbar-nav navbar-right">
    <li><a href="/">Beranda</a></li>
    <li class="active"><a href="/berita">Berita</a></li>
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Agenda Kegiatan</a>
      <ul class="dropdown-menu">
        <li><a href="/agendasan">Agenda Santri</a></li>
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
          <h1>Berita dan Informasi</h1>
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
              <div class="text-uppercase probootstrap-uppercase"><br><br>Berita Terbaru</div>
              <h3>Memberi tahukan Berita dan Informasi terbaru tentang Pondok Pesantren Al-Muttaqin<br><br></h3>
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
        <div class="col-md-12">
          <div class="probootstrap-service-2 probootstrap-animate">
            <div class="image">
              <div class="image-bg">
                <img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
              </div>
            </div>
            <div class="text">
              <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
              <h3>Application Design sdajdjajos soadjojasd osjadoj</h3>
              <p>Laboriosam pariatur modi praesentium deleniti molestiae officidasjdbasb iasjdijsad aod9as 9ausdu9asis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
              <p><a href="/detailberita" class="btn btn-primary">Selengkapnya</a> </p>
            </div>
          </div>
  
          <div class="probootstrap-service-2 probootstrap-animate">
            <div class="image">
              <div class="image-bg">
                <img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
              </div>
            </div>
            <div class="text">
              <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
              <h3>Chemical Engineering</h3>
              <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
              <p><a href="#" class="text-center btn btn-primary">Selengkapnya</a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection