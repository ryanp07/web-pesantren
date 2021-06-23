@extends('layout.master')

@section('title', 'Berita Pondok Pesantren Al-Muttaqin')

@section('warnaaktif')
<ul class="nav navbar-nav navbar-right">
    <li><a href="/">Beranda</a></li>
    <li class="active"><a href="/berita">Berita</a></li>
    <li><a href="/agenda">Agenda Kegiatan</a></li>
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
        <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
          <h1 class="mb0">Berita dan Informasi Tentang</h1>
        </div>
      </div>
    </div>
  </section>

<section class="probootstrap-section">
    <div class="container">
      
      <div class="col-md-12">
        <p>
          <img src="img/slider_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
        </p>
      </div>
      <div class=" col-md-push-1 text-justify">
        <h2>We are NYC based School focused on excellence.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!
        Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque iure eos aut earum porro omnis asperiores cum quis at sunt harum officiis, exercitationem alias, architecto, beatae neque quos dolorum ex.</p>
      </div>
      

    </div>
  </section>
    
@endsection