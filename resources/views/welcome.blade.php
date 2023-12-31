@extends('layoutsUser.main')

@section('content')
  <!-- PAGE PRELOADER -->
  <div class="preloader">
    <div class="preloader__curtain bg-light"></div>
    <div class="preloader__wrapper-logo">
      <div class="preloader__logo"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g fill="none" fill-rule="evenodd">
        <rect class="rect" width="100%" height="100%"></rect>
        </g>
        </svg>
        <div class="logo">
          <div class="logo__text">Saya Bagas</div>
        </div>
      </div>
    </div>
  </div>
  <!-- - PAGE PRELOADER -->
  <div class="page-wrapper" id="in_home">
    <!-- PAGE HEADER -->
    <header class="header site-header js-header-sticky header_light">
      <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
          <div class="col-auto"><a class="logo" href="/">
              <div class="logo__text">{{ App\Homepage::value('navbarNama') }}</div></a>
          </div>
          <div class="col-auto d-xl-block d-none">
            <ul class="menu">
              <li><a href="#in_home">Homepages</a></li>
              <li><a href="#in_portfolio">Portfolio</a></li>
              <li><a href="#in_services">Services</a></li>
              <li><a href="#in_testimonial">Testimonial</a></li>
              <li><a href="#in_contact">Contact</a></li>
            </ul>
          </div>
          <div class="header__overlay-menu-back d-xl-none js-submenu-back">keyboard_arrow_up</div>
          <div class="col-auto d-xl-none">
            <div class="burger js-burger">
              <div class="burger__line"></div>
              <div class="burger__line"></div>
              <div class="burger__line"></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- - PAGE HEADER -->
    <main class="site-main">
      <!-- section INTRO -->
      <section class="section section-intro bg-dark" data-os-animation="data-os-animation">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1><span class="highlight">{{ App\Homepage::value('navbarNama') }}<span class="highlight__bg"></span></span> – {{ App\Homepage::value('textContent') }}</h1>
            </div>
          </div>
        </div>
      </section>
      <!-- - section INTRO -->
      <!-- section PORTFOLIO -->
      <!-- section MASTHEAD -->
    <section id="in_portfolio" class="section section-masthead section_pt section_pb bg-light">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Portfolio</h1>
          </div>
        </div>
      </div>
      <div class="section-masthead__line"></div>
    </section>
    <!-- - section MASTHEAD -->
    <!-- - PAGE HEADER -->
    <main class="site-main">
      <!-- section PORTFOLIO -->
      <section class="section section_mt section_mb section-portfolio">
        <div class="container">
          @foreach ($portfolio as  $portfolio)
          <div class="section-portfolio__wrapper-item">
            <div class="row figure-portfolio justify-content-end figure-portfolio_horizontal figure-portfolio_right" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-10" href="/portfolio/detail/{{ $portfolio->id }}">
              <div class="figure-portfolio__wrapper-img overflow">
                <div class="overflow__curtain bg-accent"></div>
                <div class="overflow__content"><img src="{{ asset('imagesPortfolio/' . $portfolio->img) }}" width="1890" height="1260" loading="lazy" alt="Minimalistic Decoration"/></div>
              </div>
              {{-- <div class="figure-portfolio__info">Photography</div> --}}
              <header class="figure-portfolio__header">
                <div class="figure-portfolio__headline"></div>
                <h2>{{$portfolio->tittle}}</h2>
              </header></a></div>
          </div>
          @endforeach
          {{-- <div class="section-portfolio__wrapper-item">
            <div class="row figure-portfolio justify-content-end figure-portfolio_horizontal figure-portfolio_right" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-10" href="portfolio-details-2-dark.html">
                <div class="figure-portfolio__wrapper-img overflow">
                  <div class="overflow__curtain bg-accent"></div>
                  <div class="overflow__content"><img src="img/assets/sectionPortfolio/item-5.jpg" width="1890" height="1260" loading="lazy" alt="Minimalistic Decoration"/></div>
                </div>
                <div class="figure-portfolio__info">Photography</div>
                <header class="figure-portfolio__header">
                  <div class="figure-portfolio__headline"></div>
                  <h2>Minimalistic Decoration</h2>
                </header></a></div>
          </div> --}}
          {{-- <div class="section-portfolio__wrapper-item">
            <div class="row figure-portfolio justify-content-start figure-portfolio_vertical figure-portfolio_left" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-5" href="portfolio-details-1-dark.html">
                <div class="figure-portfolio__wrapper-img overflow">
                  <div class="overflow__curtain bg-accent"></div>
                  <div class="overflow__content"><img src="img/assets/sectionPortfolio/item-2.jpg" width="916" height="1374" loading="lazy" alt="Premium Furniture"/></div>
                </div>
                <div class="figure-portfolio__info">Studio</div>
                <header class="figure-portfolio__header">
                  <div class="figure-portfolio__headline"></div>
                  <h2>Premium Furniture</h2>
                </header></a></div>
          </div> --}}
          {{-- <div class="section-portfolio__wrapper-item">
            <div class="row figure-portfolio justify-content-end figure-portfolio_vertical figure-portfolio_right" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-5" href="portfolio-details-2-light.html">
                <div class="figure-portfolio__wrapper-img overflow">
                  <div class="overflow__curtain bg-accent"></div>
                  <div class="overflow__content"><img src="img/assets/sectionPortfolio/item-3.jpg" width="916" height="1374" loading="lazy" alt="Wireless Euphoria"/></div>
                </div>
                <div class="figure-portfolio__info">Street</div>
                <header class="figure-portfolio__header">
                  <div class="figure-portfolio__headline"></div>
                  <h2>Wireless Euphoria</h2>
                </header></a></div>
          </div>
          <div class="section-portfolio__wrapper-item">
            <div class="row figure-portfolio justify-content-start figure-portfolio_horizontal figure-portfolio_left" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-10" href="portfolio-details-1-light.html">
                <div class="figure-portfolio__wrapper-img overflow">
                  <div class="overflow__curtain bg-accent"></div>
                  <div class="overflow__content"><img src="img/assets/sectionPortfolio/item-4.jpg" width="1890" height="1260" loading="lazy" alt="Eternal Art"/></div>
                </div>
                <div class="figure-portfolio__info">Photography</div>
                <header class="figure-portfolio__header">
                  <div class="figure-portfolio__headline"></div>
                  <h2>Eternal Art</h2>
                </header></a></div>
          </div>
          <div class="section-portfolio__wrapper-item">
            <div class="row figure-portfolio justify-content-end figure-portfolio_vertical figure-portfolio_right" data-os-animation="data-os-animation"><a class="figure-portfolio__link col col-lg-5" href="portfolio-details-2-light.html">
                <div class="figure-portfolio__wrapper-img overflow">
                  <div class="overflow__curtain bg-accent"></div>
                  <div class="overflow__content"><img src="img/assets/sectionPortfolio/item-6.jpg" width="916" height="1374" loading="lazy" alt="Trendy T-Shirt"/></div>
                </div>
                <div class="figure-portfolio__info">Street</div>
                <header class="figure-portfolio__header">
                  <div class="figure-portfolio__headline"></div>
                  <h2>Trendy T-Shirt</h2>
                </header></a></div>
          </div> --}}
        </div>
      </section>
      <!-- - section PORTFOLIO -->
    </main>
      <!-- - section PORTFOLIO -->
      <!-- section SERVICES -->
      <!-- section MASTHEAD -->
    <section id="in_services" class="section section-masthead section_pt section_pb bg-light">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Services</h1>
          </div>
        </div>
      </div>
      <div class="section-masthead__line"></div>
    </section>
    <!-- - section MASTHEAD -->
      <section class="section section_mt section_mb-small section-features">
        <div class="container container_25">
          <div class="row">
            <div class="col-lg-4 col-sm-6 section-features__item"><a class="figure-feature">
                <div class="figure-feature__icon">
                  <div class="lnr lnr-code"></div>
                  <svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g fill="none" fill-rule="evenodd">
                          <g transform="translate(-134.000000, -98.000000)">
                          <path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
                          </g>
                          </g>
                          </svg>
                </div>
                <div class="figure-feature__header">
                  <div class="figure-feature__headline"></div>
                  <h3>Software Development</h3>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur totam minus voluptas cumque sunt eaque.</p>
                </div></a>
            </div>
            <div class="col-lg-4 col-sm-6 section-features__item"><a class="figure-feature">
                <div class="figure-feature__icon">
                  <div class="lnr lnr-highlight"></div><svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g fill="none" fill-rule="evenodd">
                    <g transform="translate(-134.000000, -98.000000)">
                    <path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
                    </g>
                    </g>
                    </svg>
                </div>
                <div class="figure-feature__header">
                  <div class="figure-feature__headline"></div>
                  <h3>Branding</h3>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, harum? Explicabo exercitationem beatae corrupti id?</p>
                </div></a>
            </div>
            <div class="col-lg-4 col-sm-6 section-features__item"><a class="figure-feature">
                <div class="figure-feature__icon">
                  <div class="lnr lnr-smartphone"></div>
                  <svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g fill="none" fill-rule="evenodd">
                            <g transform="translate(-134.000000, -98.000000)">
                            <path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
                            </g>
                            </g>
                            </svg>
                </div>
                <div class="figure-feature__header">
                  <div class="figure-feature__headline"></div>
                  <h3>Mobile Development</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo culpa pariatur corrupti doloribus rem! Sint.</p>
                </div></a>
            </div>
          </div>
        </div>
      </section>
      <!-- - section SERVICES -->
      <!-- section TESTIMONIALS -->
      <section id="in_testimonial" class="section section_mt section-testimonials" style="padding-top: 100px">
        <header class="section-header container" data-os-animation="data-os-animation">
          <div class="row">
            <div class="col">
              <div class="section-header__label">
                <div class="section-header__square"></div><span>Testimonials</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h2>Saya suka bekerja keras dan saya selalu menyenangkan setiap pelanggan. Itu pendekatan berorientasi klien sangat penting.</h2>
            </div>
          </div>
        </header>
        <div class="container-fluid">
          <div class="bg-dark">
            <div class="container slider slider-testimonials">
              <div class="row justify-content-between">
                <div class="col-lg-10 order-lg-2">
                  <div class="swiper-container swiper js-slider-testimonials">
                    <div class="swiper-wrapper">
                      @foreach ($testimonial as  $testimonial)
                      <div class="swiper-slide"><img class="slider-testimonials__author-avatar" src="{{ asset('imagesTestimonial/' . $testimonial->img)  }}" width="160" height="160" loading="lazy" alt=""/>
                        <p class="slider-testimonials__text">{{ $testimonial->description }}</p>
                        <div class="slider-testimonials__author">
                          <div class="slider-testimonials__author-line"></div>
                          <div class="slider-testimonials__author-name">{{ $testimonial->nama }}</div>
                          <div class="slider-testimonials__author-subline">{{ $testimonial->status }}</div>
                        </div>
                      </div>
                      @endforeach
                      {{-- <div class="swiper-slide"><img class="slider-testimonials__author-avatar" src="img/assets/avatars/avatar-2.jpg" width="160" height="160" loading="lazy" alt=""/>
                        <p class="slider-testimonials__text">Extremity direction existence as dashwoods do up. Securing marianne led welcomed offended but offering six raptures. Conveying concluded newspaper rapturous oh at. Two indeed suffer saw beyond far former mrs remain. Occasional continuing possession we insensible an sentiments as is. Law but reasonably motionless principles she. Has six worse downs far blush rooms above stood.</p>
                        <div class="slider-testimonials__author">
                          <div class="slider-testimonials__author-line"></div>
                          <div class="slider-testimonials__author-name">Vicente de la Cruz</div>
                          <div class="slider-testimonials__author-subline">Developer</div>
                        </div>
                      </div>
                      <div class="swiper-slide"><img class="slider-testimonials__author-avatar" src="img/assets/avatars/avatar-3.jpg" width="160" height="160" loading="lazy" alt=""/>
                        <p class="slider-testimonials__text">Be an as cordially at resolving furniture preserved believing extremity. Easy mr pain felt in. Too northward affection additions nay. He no an nature ye talent houses wisdom vanity denied. Gave led past poor met fine was new.</p>
                        <div class="slider-testimonials__author">
                          <div class="slider-testimonials__author-line"></div>
                          <div class="slider-testimonials__author-name">Linda K. Reeder</div>
                          <div class="slider-testimonials__author-subline">Client</div>
                        </div>
                      </div>
                      <div class="swiper-slide"><img class="slider-testimonials__author-avatar" src="img/assets/avatars/avatar-4.jpg" width="160" height="160" loading="lazy" alt=""/>
                        <p class="slider-testimonials__text">Feel plan know is he like on pure. See burst found sir met think hopes are marry among. Delightful remarkably new assistance saw literature mrs favourable. Do endeavor he differed carriage is learning my graceful.</p>
                        <div class="slider-testimonials__author">
                          <div class="slider-testimonials__author-line"></div>
                          <div class="slider-testimonials__author-name">Marie Smith</div>
                          <div class="slider-testimonials__author-subline">Partner</div>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="col-lg-1 order-lg-1">
                  <div class="slider__controls">
                    <div class="slider__arrow slider-testimonials__arrow js-slider-testimonials__arrow-prev">keyboard_arrow_up</div>
                    <div class="slider__dots js-slider-testimonials__dots">
                      <div class="slider__dot slider__dot_active"></div>
                      <div class="slider__dot"></div>
                      <div class="slider__dot"></div>
                      <div class="slider__dot"></div>
                    </div>
                    <div class="slider__arrow slider-testimonials__arrow js-slider-testimonials__arrow-next">keyboard_arrow_down</div>
                  </div>
                </div>
                <div class="col-lg-1 align-self-end order-lg-3 d-none d-lg-block">
                  <div class="slider__counter-big">
                    <div class="swiper-container swiper slider__counter-big-current slider-testimonials__counter-big-current js-slider-testimonials-counter-current">
                      <div class="swiper-wrapper"></div>
                    </div>
                    <div class="slider__counter-big-total js-slider-testimonials-counter-total"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- - section TESTIMONIALS -->
      <!-- section CONTACT -->
      <section id="in_contact" class="section section-contact section_mt" style="padding-top: 100px">
        <header class="section-header container" data-os-animation="data-os-animation">
          <div class="row">
            <div class="col">
              <div class="section-header__label">
                <div class="section-header__square"></div><span>Contact Me</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h2>Punya proyek yang menarik? Saya dapat membantu Anda dengan itu! Tulis saja aku ke sayabagas@excemple.org</a></h2>
            </div>
          </div>
        </header>
        <div class="container-fluid">
          <div class="row no-gutters justify-content-center">
            <div class="col-lg-8 ">
              <div class="section-contact__wrapper-form">
                <form class="form js-ajax-form" action="mail.php" method="POST" data-message-success="Thanks for your message! We will reply you as soon as possible." data-message-error="Something went wrong :( Please contact me directly on arrigo@sabbani.com">
                  <h3>Kirim pesan</h3>
                  <div class="row form__row">
                    <div class="col form__col">
                      <label class="input-float js-input-float">
                        <input class="input-float__input" type="text" name="visitor_name" required="required" data-msg="Please enter your name"/><span class="input-float__label">Nama kamu</span><span class="form__error"></span>
                      </label>
                    </div>
                  </div>
                  <div class="row form__row">
                    <div class="col form__col">
                      <label class="input-float js-input-float">
                        <input class="input-float__input" type="email" name="visitor_email" required="required" data-msg="Please enter a correct e-mail"/><span class="input-float__label">E-mail kamu</span><span class="form__error"></span>
                      </label>
                    </div>
                  </div>
                  <div class="row form__row">
                    <div class="col form__col">
                      <label class="input-float js-input-float">
                        <textarea class="input-float__input input-float__input_textarea" name="visitor_msg"></textarea><span class="input-float__label">Description kamu</span><span class="form__error"></span>
                      </label>
                    </div>
                  </div>
                  <div class="row form__row text-right">
                    <div class="col form__col form__col_submit">
                      <button class="button button_accent" type="submit"><span>Kirim Pesan</span></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="section-contact__wrapper-contacts">
            <div class="row justify-content-center">
              <div class="col-lg-3 section-contact__wrapper-contact">
                <div class="figure-contact">
                  <div class="figure-contact__icon">near_me</div>
                  <div class="figure-contact__item">4575 Desa Makmur</div>
                  <div class="figure-contact__item">NY 11206 Indonesia</div>
                </div>
              </div>
              <div class="col-lg-3 section-contact__wrapper-contact">
                <div class="figure-contact">
                  <div class="figure-contact__icon">phone</div>
                  <div class="figure-contact__item">+1 (347) 783-92-96</div>
                  <div class="figure-contact__item">+1 (347) 783-19-00</div>
                </div>
              </div>
              <div class="col-lg-3 section-contact__wrapper-contact">
                <div class="figure-contact">
                  <div class="figure-contact__icon">mail</div>
                  <div class="figure-contact__item"><a href="#">sayabagas@excemple.com</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- - section CONTACT -->
    </main>
    <!-- PAGE FOOTER -->
    <footer class="footer site-footer">
      <div class="container-fluid">
        <div class="footer__inner">
          <div class="row align-items-center">
            <div class="col-lg-4 text-center footer__column order-lg-2"><a class="logo" href="index.html">
                <div class="logo__text">Saya Bagas</div></a>
            </div>
            <div class="col-lg-4 text-right footer__column order-lg-3">
              <ul class="social">
                <li class="social__item"><a class="fa fab fa-facebook-f" href="#" aria-label="facebook-f" role="img"><svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g fill="none" fill-rule="evenodd">
                <g transform="translate(-134.000000, -98.000000)">
                <path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
                </g>
                </g>
                </svg></a></li>
                                  <li class="social__item"><a class="fa fab fa-twitter" href="#" aria-label="twitter" role="img"><svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g fill="none" fill-rule="evenodd">
                <g transform="translate(-134.000000, -98.000000)">
                <path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
                </g>
                </g>
                </svg></a></li>
                                  <li class="social__item"><a class="fa fab fa-instagram" href="#" aria-label="instagram" role="img"><svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g fill="none" fill-rule="evenodd">
                <g transform="translate(-134.000000, -98.000000)">
                <path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
                </g>
                </g>
                </svg></a></li>
                                  <li class="social__item"><a class="fa fab fa-behance" href="#" aria-label="behance" role="img"><svg viewBox="0 0 152 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g fill="none" fill-rule="evenodd">
                <g transform="translate(-134.000000, -98.000000)">
                <path class="circle" d="M135,174a75,75 0 1,0 150,0a75,75 0 1,0 -150,0"></path>
                </g>
                </g>
                </svg></a></li>
              </ul>
            </div>
            <div class="col-lg-4 text-left footer__column order-lg-1"><small>© 2023 portfolio</small></div>
          </div>
        </div>
      </div>
    </footer>
    <!-- - PAGE FOOTER -->
  </div>
  <script src="https://maps.googleapis.com/maps/api/js?callback=Function.prototype&amp;key=AIzaSyArW7jnLU4wdvZGxBMN1jNXAq5dBxVBt4U"></script>
  <!-- VENDOR SCRIPTS -->
  <script src="{{ asset('js/vendor.js') }}"></script>
  <!-- - VENDOR SCRIPTS -->
  <!-- COMPONENTS -->
  <script src="{{ asset('js/components.js') }}"></script>
  <!-- - COMPONENTS -->
  <!-- PAGE SCRIPTS-->
  <!-- - PAGE SCRIPTS-->
@endsection