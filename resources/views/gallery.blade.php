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
    <li><a href="/guru">Guru</a></li>
    <li class="active"><a href="/gallery">Gallery Pesantren</a></li>
    <li><a href="/tentang">Tentang Pesantren</a></li>
</ul>
@endsection

@section('isi')    
<br>
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
          <h1 class="mb0">Gallery Pondok Pesantren Al-Muttaqin</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section probootstrap-bg-white">
    <div class="container">
      
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-feed three-cols">
            <div class="grid-sizer"></div>
            <div class="gutter-sizer"></div>
            <div class="probootstrap-gallery">
              <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                <a href="img/gal_img_full_1.jpg" itemprop="contentUrl" data-size="1000x632">
                  <img src="img/gal_img_sm_1.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                </a>
                <figcaption itemprop="caption description">Image caption here</figcaption>
              </figure>
              <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                <a href="img/poto/gal1.jpg" itemprop="contentUrl" data-size="1000x632">
                  <img src="img/poto/gal1.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                </a>
                <figcaption itemprop="caption description">Image caption here</figcaption>
              </figure>
              <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                <a href="img/gal_img_full_3.jpg" itemprop="contentUrl" data-size="1000x632">
                  <img src="img/gal_img_sm_3.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                </a>
                <figcaption itemprop="caption description">Image caption here</figcaption>
              </figure>
              <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                <a href="img/gal_img_full_4.jpg" itemprop="contentUrl" data-size="1000x667">
                  <img src="img/gal_img_sm_4.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
                </a>
                <figcaption itemprop="caption description">Image caption here</figcaption>
              </figure>
              <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_1.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_1.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_2.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_2.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_3.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_3.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_4.jpg" itemprop="contentUrl" data-size="1000x667">
                <img src="img/gal_img_sm_4.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_1.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_1.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_2.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_2.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_3.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_3.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_4.jpg" itemprop="contentUrl" data-size="1000x667">
                <img src="img/gal_img_sm_4.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_1.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_1.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_2.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_2.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_3.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_3.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_4.jpg" itemprop="contentUrl" data-size="1000x667">
                <img src="img/gal_img_sm_4.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_1.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_1.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_2.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_2.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_3.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_3.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="img/gal_img_full_1.jpg" itemprop="contentUrl" data-size="1000x632">
                <img src="img/gal_img_sm_1.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            
            
            

            
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Photoswipe Modal -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
  </div>

@endsection