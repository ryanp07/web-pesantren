@extends('layout.master')

@section('title', 'Beranda Pondok Pesantren Al-Muttaqin')

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
    <li><a href="/guru">Guru</a></li>
    <li><a href="/gallery">Gallery Pesantren</a></li>
    <li class="active"><a href="/tentang">Tentang Pesantren</a></li>
</ul>
@endsection

@section('isi')
    
<br>
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate">
          <h1>Tentang Pondok Pesantren Al-Muttaqin</h1>
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
              <div class="text-uppercase probootstrap-uppercase"><br><br><br><br>Mengenal Sejarah</div>
              <h3>Sejarah mengenai Pondok Pesantren Al-Muttaqin<br><br><br><br></h3>
            </div>
            <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/poto/bg11.jpeg)">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  
  <section class="probootstrap-section">
    <div class="container">
      
      <div class="col-md-6">
        <p>
          <img src="img/slider_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
        </p>
      </div>
      <div class=" col-md-push-1 text-justify">
        <h2>Sejarah Mengenai Pondok Pesantren Al-Muttaqin</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!
        Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque iure eos aut earum porro omnis asperiores cum quis at sunt harum officiis, exercitationem alias, architecto, beatae neque quos dolorum ex.</p>
      </div>

      <h2>1. Acara 3</h2>
        <video class="img-responsive text-center" controls width="800" >
            <source src="img/poto/vid1.mp4" type="video/mp4"/>                
        </video>
        
        <br>
        <h2>2. Acara 2</h2>
        <video class="img-responsive text-center" controls width="800" >
            <source src="img/poto/vid2.mp4" type="video/mp4"/>                
        </video>  

        <br>
        <h2>3. Acara 3</h2>
        <video class="img-responsive text-center" controls width="300" >
            <source src="img/poto/vid3.mp4" type="video/mp4"/>                
        </video>  
      

    </div>
  </section>
  @endsection