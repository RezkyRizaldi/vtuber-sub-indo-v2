<!DOCTYPE html>
<html lang="en" translate="no">
  <head>
    {{-- Required Meta Tags --}}
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=no"
    />

		{{-- Primary --}}
		<meta name="title" content="Vtuber Sub Indo" />
    <meta
      name="description"
      content="Vtuber Sub Indo adalah sebuah komunitas Clipper yang mewadahi para Clipper Vtuber. Tujuan dari Vtuber Sub Indo yaitu menjadi garda terdepan Channel Clip Vtuber ber-subtitle Indonesia untuk menarik para penonton masuk ke lubang hitam yang sama seperti kita saat ini."
    />
		<meta name="copyright" content="Muhamad Rezky Rizaldi" />
		<meta name="language" content="en" />
		<meta name="robots" content="index, follow" />
		<meta name="revised" content="Thursday, March 4th, 2021, 0:16 AM" />
		<meta name="abstract" content />
		<meta name="topic" content="Clipper Vtuber" />
		<meta name="summary" content="Clipper Community" />
		<meta name="classification" content="Business" />
		<meta name="author" content="Muhamad Rezky Rizaldi, rezkyrizaldi30@gmail.com">
		<meta name="designer" content="Muhamad Rezky Rizaldi, rezkyrizaldi30@gmail.com">
		<meta name="category" content="Official Website" />
		<meta name="owner" content="Vtuber Sub Indo" />
		<meta name="coverage" content="Worldwide" />
		<meta name="distribution" content="Global" />
		<meta name="rating" content="General" />

    {{-- Open Graph/Facebook --}}
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://vsi.hadatmtch.net" />
    <meta property="og:title" content="Vtuber Sub Indo" />
		<meta property="og:image" content="{{ asset('assets/images/brand.jpg') }}" />
		<meta
      property="og:description"
      content="Vtuber Sub Indo adalah sebuah komunitas Clipper yang mewadahi para Clipper Vtuber. Tujuan Vtuber Sub Indo yaitu menjadi garda terdepan Channel Clip Vtuber ber-subtitle Indonesia untuk menarik penonton masuk ke lubang hitam yang sama seperti kita saat ini."
    />
		<meta
      property="og:keywords"
      content="HTML, CSS, JavaScript, Bootstrap, Bootstrap 5, Vtuber Sub Indo, Virtual Youtuber, Vtuber"
    />
		<meta property="og:region" content="ID" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:country-property" content="ID" />
		<meta property="og:email" content="vtubersubindo@gmail.com" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:alt" content="Vtuber Sub Indo" />
    <meta property="og:author" content="Muhamad Rezky Rizaldi" />
    <meta property="og:site_name" content="Vtuber Sub Indo" />

		{{-- Twitter --}}
		<meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://vsi.hadatmtch.net" />
    <meta property="twitter:title" content="Vtuber Sub Indo" />
    <meta
      property="twitter:description"
      content="Vtuber Sub Indo adalah sebuah komunitas Clipper yang mewadahi para Clipper Vtuber. Tujuan Vtuber Sub Indo yaitu menjadi garda terdepan Channel Clip Vtuber ber-subititle Indonesia untuk menarik para penonton masuk ke lubang
    hitam yang sama seperti kita saat ini."
    />
    <meta property="twitter:image" content="{{ asset('assets/images/brand.jpg') }}" />

		{{-- Google --}}
		<meta name="google" content="notranslate" />

		{{-- Apple Meta --}}
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-touch-fullscreen" content="yes" />
		<meta name="apple-moblie-web-app-status-bar-style" content="black" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="viewport" content="width=320, initial-scale=2.3, user-scalable=no" />
		<meta name="viewport" content="width=device-width" />
		<meta name="viewport" content="initial-scale=1.0" />
		<meta name="viewport" content="initial-scale=2.3, user-scalable=no" />
		<link rel="apple-touch-icon" href="favicon.ico" type="image/x-icon" />

		{{-- IE --}}
		<meta http-equiv="Page-Enter" content="RevealTrans(Duration=2.0, Transition=2)" />
		<meta http-equiv="Page-Exit" content="RevealTrans(Duration=3.0, Transition=12)" />
		<meta name="mssmarttagspreventparsing" content="true" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<meta name="msapplication-starturl" content="https://vsi.hadatmtch.net/" />
		<meta name="msapplication-window" content="width=800;height=600" />
		<meta name="msapplication-navbutton-color" content="blue" />
		<meta name="application-name" content="Vtuber Sub Indo" />
		<meta name="msappliaction-tooltip" content="Vtuber Sub Indo" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

		{{-- HTML --}}
		<link rel="fluid-icon" href="{{ asset('assets/images/logo.png') }}" type="image/png" />
    <link rel="shortcut icon" href="favicon.ico" type="image/ico" />
    <link rel="author" href="https://rezkyrizaldi.herokuapp.com" />

    {{--  Bootstrap CSS  --}}
    <link
      rel="stylesheet"
      href="{{ asset('assets/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css') }}"
    />

    {{--  Bootstrap Icons  --}}
    <link
      rel="stylesheet"
      href="{{ asset('assets/bootstrap-icons-1.4.0/bootstrap-icons.css') }}"
    />

    {{--  Swiper CSS  --}}
    <link
      rel="stylesheet"
      href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    </link>

    {{--  My CSS  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" />
    <title>Vtuber Sub Indo</title>
  </head>
  <body id="body" ondragstart="return false;">
    {{--  Loader  --}}
    <div id="loader"></div>

    {{--  Page  --}}
    <div id="page">
      {{--  Navbar  --}}
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
          <div class="d-flex">
            <div class="form-check form-switch me-auto">
              <input type="checkbox" class="form-check-input" id="darkSwitch" />
            </div>
          </div>
          <a
            class="navbar-brand d-none d-sm-block m-auto center"
            href="#"
            title="Vtuber Sub Indo"
          >
            <img
              src="{{ asset('assets/images/icon/icon.png') }}"
              alt="Vtuber Sub Indo Logo"
              width="30"
            />
            Vtuber Sub Indo
          </a>
          <a
            class="navbar-brand d-block d-sm-none m-auto ps-4"
            href="#"
            title="Vtuber Sub Indo"
          >
            <img
              src="{{ asset('assets/images/icon/icon.png') }}"
              alt="Vtuber Sub Indo Logo"
              width="30"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse"
            id="navbarNav"
            style="flex-grow: 0"
          >
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  title="Home"
                  data-scroll="home"
                  href="#page"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  title="About"
                  data-scroll="about"
                  href="#about"
                  >About</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  title="Gallery"
                  data-scroll="gallery"
                  href="#gallery"
                  >Gallery</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  title="Contact Us"
                  data-scroll="contact"
                  href="#contact"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{--  End Navbar  --}}

      {{--  Jumbotron  --}}
      <section data-anchor="home" class="jumbotron text-center text-light">
        <img
          src="{{ asset('assets/images/icon/icon.png') }}"
          alt="Vtuber Sub Indo Logo"
          width="200"
          class="mb-3"
        />
        <h1 class="display-4 text-capitalize">Vtuber Sub Indo</h1>
        <p class="lead text-capitalize">
          Clippers Community | Vtuber Enthusiasts
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            class="svg_white"
            fill="#ffffff"
            fill-opacity="1"
            d="M0,128L48,149.3C96,171,192,213,288,208C384,203,480,149,576,128C672,107,768,117,864,154.7C960,192,1056,256,1152,240C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </section>
      {{--  End Jumbotron  --}}

      {{--  About Section  --}}
      <section data-anchor="about" id="about">
        <div class="container">
          <div class="row mb-3 text-center">
            <div class="col">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="row justify-content-around fs-5 text-center">
            <div class="col-md-12">
              <p class="mb-5">
                Vtuber Sub Indo adalah sebuah komunitas Clipper yang mewadahi
                para Clipper Vtuber. Tujuan Vtuber Sub Indo yaitu menjadi garda
                terdepan Channel Clip Vtuber ber-subititle Indonesia untuk
                menarik para penonton masuk ke lubang hitam yang sama seperti
                kita saat ini.
              </p>
            </div>
            <div class="col-12 col-md-6">
              <p class="align-middle mb-3">
                <img
                  src="{{ asset('assets/images/icon/discord.png') }}"
                  alt="Discord Logo"
                  width="50"
                  height="50"
                />
                Discord Server
              </p>
              <div
                class="embed-responsive embed-responsive-21by9 embed-responsive-16by9 embed-responsive-4by3 embed-responsive-1by1"
              >
                <iframe
                  class="embed-responsive-item"
                  src="https://discordapp.com/widget?id=715019741344825417&theme=dark"
                  width="400"
                  height="500"
                  allowtransparency="true"
                  frameborder="0"
                  sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"
                ></iframe>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <p class="align-middle mb-3 pt-3 pt-md-0">
                <img
                  src="{{ asset('assets/images/icon/twitter.png') }}"
                  alt="Twitter Logo"
                  width="50"
                  height="50"
                />
                Twitter Timeline
              </p>
              <div
                class="embed-responsive embed-responsive-21by9 embed-responsive-16by9 embed-responsive-4by3 embed-responsive-1by1"
              >
                <a
                  class="twitter-timeline embed-responsive-item"
                  data-lang="en"
                  data-width="400"
                  data-height="500"
                  data-theme="dark"
                  href="https://twitter.com/VtuberSubIndo?ref_src=twsrc%5Etfw"
                ></a>
                <script
                  async
                  src="https://platform.twitter.com/widgets.js"
                  charset="utf-8"
                ></script>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            class="svg_blue"
            fill="#3fc7f1"
            fill-opacity="1"
            d="M0,256L48,224C96,192,192,128,288,106.7C384,85,480,107,576,149.3C672,192,768,256,864,245.3C960,235,1056,149,1152,117.3C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </section>
     {{-- End About Section --}}

      {{--  Gallery Section  --}}
      <section data-anchor="gallery" id="gallery">
        <div class="container pe-5 ps-5 pe-md-0 ps-md-0">
          <div class="row mb-5 text-center text-light">
            <div class="col">
              <h2 class="pt-3 pt-md-0">Gallery</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div
                id="contentCarousel"
                class="carousel slide"
                data-bs-touch="false"
                data-bs-interval="false"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/Membership1.png') }}"
                        alt="Content 1"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/Membership2.png') }}"
                        alt="Content 2"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/Membership3.png') }}"
                        alt="Content 3"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/Membership4.png') }}"
                        alt="Content 4"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/Membership5.png') }}"
                        alt="Content 5"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/miko_radio.png') }}"
                        alt="Content 6"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button">
                  <span
                    class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                    aria-hidden="true"
                    data-bs-target="#contentCarousel"
                    data-bs-slide="prev"
                  ></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button">
                  <span
                    class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                    aria-hidden="true"
                    data-bs-target="#contentCarousel"
                    data-bs-slide="next"
                  ></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="col-md-12 mt-5">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/Membership1.png') }}"
                        alt="Content 1"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/Membership2.png') }}"
                        alt="Content 1"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/Membership3.png') }}"
                        alt="Content 1"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/Membership4.png') }}"
                        alt="Content 1"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/Membership5.png') }}"
                        alt="Content 1"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card rounded-3 bg-body border-0">
                      <img
                        src="{{ asset('assets/images/content/miko_radio.png') }}"
                        alt="Content 1"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <h5 class="card-title dark_state">Sakura Miko</h5>
                        <p class="card-text dark_state text-truncate">
                          The Elite Shrine Maiden from Hololive Production
                        </p>
                        <button
                          class="btn text-light"
                          data-bs-toggle="modal"
                          data-bs-target="#myModal"
                        >
                          Lihat Selengkapnya
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                {{--  <div class="swiper-pagination"></div>  --}}

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                {{--  <div class="swiper-scrollbar"></div>  --}}
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            class="svg_white"
            fill="#ffffff"
            fill-opacity="1"
            d="M0,128L48,149.3C96,171,192,213,288,208C384,203,480,149,576,128C672,107,768,117,864,154.7C960,192,1056,256,1152,240C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </section>
      {{--  End Gallery Section  --}}

      {{--  Contact Us Section  --}}
      <section data-anchor="contact" id="contact">
        <div class="row mb-5 text-center">
          <div class="col">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="row mb-3 justify-content-center">
          <div class="col-md-8 ps-5 pe-5">
            <form>
              <label for="name" class="form-label">Nama Lengkap</label>
              <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="name"
                  ><i class="bi bi-person-fill"></i
                ></span>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Masukkan Nama Lengkap"
                  aria-label="name"
                  aria-describedby="name"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Harap diisi"
                  autocomplete="name"
                />
              </div>
              <label for="email" class="form-label">Email</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="email"
                  ><i class="bi bi-envelope-fill"></i
                ></span>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Masukkan Email"
                  aria-label="email"
                  aria-describedby="email"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Harap diisi"
                  autocomplete="email"
                />
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea
                  class="form-control"
                  id="message"
                  rows="3"
                  placeholder="Tulis Pesan"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Harap diisi"
                ></textarea>
              </div>
              <div class="mb-3">
                <div
                  class="g-recaptcha"
                  data-sitekey="6LfemLsZAAAAAIKitf7srENDko3KFbuEwMyw9_R2"
                >
                  <div style="width: 304px; height: 78px">
                    <div>
                      <iframe
                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfemLsZAAAAAIKitf7srENDko3KFbuEwMyw9_R2&amp;co=aHR0cHM6Ly9oYXJ1bm96dWthLmlkOjQ0Mw..&amp;hl=en&amp;v=jxFQ7RQ9s9HTGKeWcoa6UQdD&amp;size=normal&amp;cb=hi6lmepctk7c"
                        width="304"
                        height="78"
                        role="presentation"
                        name="a-fekub1qv2b0s"
                        frameborder="0"
                        scrolling="no"
                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                      ></iframe>
                    </div>
                    <textarea
                      id="g-recaptcha-response"
                      name="g-recaptcha-response"
                      class="g-recaptcha-response"
                      style="
                        width: 250px;
                        height: 40px;
                        border: 1px solid rgb(193, 193, 193);
                        margin: 10px 25px;
                        padding: 0px;
                        resize: none;
                        display: none;
                      "
                    ></textarea>
                  </div>
                  <iframe style="display: none"></iframe>
                </div>
              </div>
              <button type="submit" class="btn text-light" title="Send Message">
                Kirim
              </button>
            </form>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            class="svg_blue"
            fill="#3fc7f1"
            fill-opacity="1"
            d="M0,256L48,224C96,192,192,128,288,106.7C384,85,480,107,576,149.3C672,192,768,256,864,245.3C960,235,1056,149,1152,117.3C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </section>
      {{--  End Contact Us Section  --}}

      {{--  Footer  --}}
      <footer class="pb-3 text-center text-light">
        <div class="row justify-content-around mb-5 pt-3 pt-md-0">
          <div class="col-md-8">
            <div class="d-flex justify-content-evenly">
              <a
                class="social"
                rel="noopener noreferrer"
                target="_blank"
                href="https://www.facebook.com/VtuberSubIndo"
                ><img
                  src="{{ asset('assets/images/icon/facebook.png') }}"
                  alt="Facebook Logo"
                  title="Facebook Fanpage"
                  width="50"
                  height="50"
              /></a>
              <a
                class="social"
                rel="noopener noreferrer"
                target="_blank"
                href="https://instagram.com/vtubersubindo"
                ><img
                  src="{{ asset('assets/images/icon/instagram.png') }}"
                  alt="Instagram Logo"
                  title="Instagram"
                  width="50"
                  height="50"
              /></a>
              <a
                class="social"
                rel="noopener noreferrer"
                target="_blank"
                href="https://youtube.com/c/VtuberSubIndo"
                ><img
                  src="{{ asset('assets/images/icon/youtube.png') }}"
                  alt="YouTube Logo"
                  title="YouTube"
                  width="50"
                  height="50"
              /></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              by <span class="dark_state">Vtuber Sub Indo</span
              ><i class="bi bi-paperclip"></i>All Right Reserved.
            </p>
          </div>
        </div>
      </footer>
      {{--  End Footer  --}}

      {{--  Modal  --}}
      <div
        class="modal fade"
        id="myModal"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="myModalLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
        >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-light" id="myModalLabel">Details</h5>
              <button
                type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"
                aria-label="Close"
                data-bs-target="gallery"
              ></button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <p class="dark_state">
                      Sakura Miko (さくらみこ, Kanji: 桜巫女, Hanzi: 樱巫女)
                      adalah seorang Virtual YouTuber asal Jepang dan merupakan
                      salah satu anggota di hololive Production. ia memulai
                      debut seorang diri jauh sebelum para member Gen bergabung
                      dan sekaligus bekerja langsung di bawah naungan Cover
                      Corp. Sebelum dipindahkah ke hololive, dia adalah bagian
                      dari "hololive Gen 0" bersamaan dengan Solo Debuters
                      lainnya: Tokino Sora, Roboco, Hoshimachi Suisei dan AZKi.
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-12 col-md-4">
                          <h2 class="mobile_heading basic_info dark_state">
                            Basic Information
                          </h2>
                          <ul
                            class="list-group list-group-flush mobile dark_state"
                          >
                            <li class="list-group-item list-group-item-action">
                              &middot; Original Name: さくらみこ
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Nickname: Miko-chi, Elite Miko,
                              sakuramiko35 (usual in-game username)
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Catchphrase: にゃっはろ！(NyaHello!)
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Tanggal Debut YouTube: 2018/08/01
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Niconico: 2019/02/27
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; bilibili: 2019/05/07
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Twitch:2020/12/02
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; bilibili: 2019/05/07
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Original Character Designer Illustration:
                              田中雄一
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Current Character Designer Illustration:
                              ordan
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Original 3D model: Wonderful Works (2019
                              - 2020)
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Base 3D model: Yatsurugi
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Current 3D model: shwcarz
                            </li>
                            <li class="list-group-item list-group-item-action">
                              &middot; Afiliasi: hololive
                            </li>
                          </ul>
                        </div>
                        <div class="col-12 col-md-8">
                          <div class="row">
                            <div class="col-md mt-4 mt-md-0">
                              <h2 class="mobile_heading media dark_state">
                                Media
                              </h2>
                              <ul
                                class="list-group list-group-flush mobile dark_state"
                              >
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; YouTube:
                                  <a
                                    class="links text-decoration-none"
                                    title="Miko Ch. さくらみこ"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    href="https://www.youtube.com/channel/UC-hM6YJuNYVAmUWxeIr9FeA"
                                    >Miko Ch. さくらみこ</a
                                  >
                                </li>
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; Twitch:
                                  <a
                                    class="links text-decoration-none"
                                    title="sakuramiko_hololive"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    href="https://twitch.tv/sakuramiko_hololive"
                                    >sakuramiko_hololive</a
                                  >
                                </li>
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; Twitter:
                                  <a
                                    class="links text-decoration-none"
                                    title="@sakuramiko35"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    href="https://twitter.com/sakuramiko35"
                                    >@sakuramiko35</a
                                  >
                                </li>
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; bilibili:
                                  <a
                                    class="links text-decoration-none"
                                    title="さくらみこ"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    href="https://space.bilibili.com/366690056/"
                                    >さくらみこ</a
                                  >
                                </li>
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; Website:
                                  <a
                                    class="links text-decoration-none"
                                    title="hololive Official Website"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    href="https://www.hololive.tv/portfolio/items/336371"
                                    >hololive.tv (Japanese)</a
                                  >
                                  |
                                  <a
                                    class="links text-decoration-none"
                                    title="hololive Official Website"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    href="https://en.hololive.tv/portfolio/items/433578"
                                    >hololive.tv (English)</a
                                  >
                                </li>
                              </ul>
                            </div>
                            <div class="col-md mt-3 mt-md-0">
                              <h2
                                class="mobile_heading personal_info dark_state"
                              >
                                Personal Information
                              </h2>
                              <ul
                                class="list-group list-group-flush mobile dark_state"
                              >
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; Gender: Female
                                </li>
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; Age: 18.2 years old
                                </li>
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; Birthday: 5 March
                                </li>
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; Height: 152 cm (5')
                                </li>
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; Zodiac Sign: Pisces
                                </li>
                                <li
                                  class="list-group-item list-group-item-action"
                                >
                                  &middot; Emoji: 🌸
                                </li>
                              </ul>
                            </div>
                            <div class="col-md-12 mt-3">
                              <h2 class="dark_state">Introduction Video</h2>
                              <div class="ratio ratio-16x9 ratio-4x3 ratio-1x1">
                                <iframe
                                  class="embed-item-responsive"
                                  src="https://www.youtube.com/embed/lMPhHXJbPEQ?rel=0"
                                  title="Sakura Miko Debut Video"
                                  allowfullscreen
                                ></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3 mt-md-0">
                  <div class="col-md-12">
                    <h2 class="dark_state">Personality</h2>
                    <p class="dark_state">
                      Miko is a self-proclaimed "elite" gamer who is somewhat
                      melodramatic and tends to become emotionally attached to
                      NPCs and inanimate objects. Fans tend to use the term
                      "elite" ironically to highlight Miko's questionable
                      decision-making skills, as well as her tendency to speak
                      garbled nonsense punctuated by the occasional F-bomb.
                      Though Miko specializes in role-playing games, much of the
                      humor on her channel stems from the fact that even while
                      playing graphic and violent games like Grand Theft Auto,
                      she rarely takes her role seriously. Her love for erotic
                      games often finds its way into other games that she plays,
                      especially those featuring freely adjustable camera angles
                      and skirt-wearing female characters. She greets her
                      viewers with "Nyahello".
                    </p>
                  </div>
                  <div class="col-md-12">
                    <h2 class="dark_state">Appearance</h2>
                    <p class="dark_state">
                      Prior to her debut, her appearance is akin to a Shrine
                      Maiden (not traditional-like) with a short pink-hair with
                      an ahoge and a cherry blossom hair ornament in her left as
                      well as pink thigh-highs.
                      <br />
                      In her new outfit, she wears a much more traditional
                      Shrine Maiden outfit along with long detached sleeves, and
                      her stockings are asymmetrical and white instead of pink.
                      The cherry blossom hair ornament is replaced with a bell
                      ribbon, and her hair is longer.
                    </p>
                  </div>
                  <div class="col-md-12">
                    <h2 class="mobile_heading history dark_state">History</h2>
                    <ul
                      class="list-group overflow-auto border border-2 border-dark rounded-3 desktop dark_state"
                    >
                      <li
                        class="list-group-item list-group-item-action border-top-0 border-end-0 border-start-0 border-dark"
                      >
                        &middot; Background
                        <p class="dark_state">
                          Originally working directly under Cover Corp on 25
                          December, it was announced that she would join
                          hololive as the main cast in Miko no Tsutome!
                          (みこのつとめっ！), a series of short animations under
                          the holo Anime (ホロアニメ) brand.
                        </p>
                      </li>
                      <li
                        class="list-group-item list-group-item-action border-top-0 border-end-0 border-start-0 border-dark"
                      >
                        &middot; 2018
                        <p class="dark_state">
                          Her Twitter account was opened on 31 March 2018 while
                          her YouTube channel was created on 25 April, but she
                          debuted with a video on 1 August.
                        </p>
                      </li>
                      <li
                        class="list-group-item list-group-item-action border-top-0 border-end-0 border-start-0 border-dark"
                      >
                        &middot; 2019
                        <p class="dark_state">
                          On 1 August, she celebrated her 1st year anniversary
                          in this stream she also announced a her 3D model
                          swimsuit, this announcement was later confirmed on her
                          Twitter account.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 3 August, she revealed her 3D model swimsuit.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 5 December, she announced in her Twitter account
                          the introduction of her new 3D model which debuted on
                          8 December.
                        </p>
                      </li>
                      <li
                        class="list-group-item list-group-item-action border-top-0 border-end-0 border-start-0 border-dark"
                      >
                        &middot; 2020
                        <p class="dark_state">
                          On 24 January, along with the other hololive girls up
                          to the third generation, she debuted her 3D idol
                          outfit at hololive's 1st fes. Nonstop Story.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 11 July, she announced on her Twitter account that
                          she wasn't feeling well and that she couldn't stream.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          Later on 13 July, she specified that her condition has
                          nothing to do with the COVID-19 pandemic.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          For the following days, she didn't stream so she could
                          rest in preparation to perform with Hoshimachi Suisei
                          at VILLS Virtual UNIT Fest on 19 July.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          After performing in said event she also announced on
                          her Twitter account that she would return to her
                          streaming activities on 26 July.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          However on that day, she announced that her return
                          scheduled for this day would be postponed because of
                          talks with the management team.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 31 July just a day away from her debut anniversary,
                          Cover Corp's Twitter account announced that Miko would
                          continue on a one or two months hiatus due to her
                          illness to take treatment and to recover. She
                          confirmed this shortly after on her Twitter account.
                          Sadly, it went into an almost three months hiatus, but
                          her Twitter account was still active, with Miko
                          posting in her normal basis, and even created a
                          daily-like posts section, where she wrote about her
                          daily life, with some small drawings she made.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 17 October, she announced on her Twitter account,
                          that she would return to her activities on 21 October.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 21 October, she returned to her activities with a
                          live 3D concert stream celebrating her second year
                          anniversary on YouTube. The stream was seen by an
                          average of 128,426 live viewers, and peaked at 145,305
                          live viewers at the 48 minute mark. On 2 December,
                          Miko debuted on Twitch, her Twitch channel would be
                          used for movies "watch along."
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 8 December, she reached 700,000 subscribers in a
                          "singing until 700K subscribers" stream being 14th
                          member of hololive to do so.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 17 December, Miko announced on her Twitter account
                          that her current 3D model would be updated to the 2.0
                          version.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 21 December, Miko participated on stage 1 of
                          "hololive 2nd fes. Beyond the Stage."
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 23 December, she revealed her new 3D model, one of
                          the most notorius changes is that now her eyes match
                          the redesign Miko received in artworks in 2019 by her
                          new designer Ordan, like other's underwear censorships
                          to prevent potential YouTube bans, her model was
                          updated to wear pink short under her skirt. Her
                          original appearance model also received a face update.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On this date Miko also debuted her third original
                          song: "Sakura Colors High Tenshion!"
                          「さくら色ハイテンション！」and also announced her own
                          visual novel "Sakura Color Dreamer"
                          「さくら色Dreamer」.
                        </p>
                      </li>
                      <li
                        class="list-group-item list-group-item-action border-0"
                      >
                        &middot; 2021
                        <p class="dark_state">
                          On 15 January, Miko reached 800,000 subscribers on her
                          YouTube channel during an endurance singing stream.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 16 February, she announced on her Twitter account
                          that her channel got wrongfully terminated by YouTube.
                          However her channel was quickly restored about an hour
                          later.
                        </p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-12 mt-3">
                    <h2 class="mobile_heading events dark_state">Events</h2>
                    <ul
                      class="list-group overflow-auto border border-2 border-dark rounded-3 desktop dark_state"
                    >
                      <li
                        class="list-group-item list-group-item-action border-top-0 border-end-0 border-start-0 border-dark"
                      >
                        &middot; 2019
                        <p class="dark_state">
                          Since 12 April, she hosts a monthly variety show in
                          the REALITY app called God Summit (神々さみっと
                          Kamigami Samitto) which is a collaboration with her
                          co-hosts Kazamiya Matsuri, Sister Cleaire, and Tenjin
                          Kotone. There are currently five episodes in total,
                          with some of the episodes archived in their respective
                          YouTube channels, with one episode archived in REALITY
                          Studio channel.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 12 September, she made an appearance in hololive's
                          collaboration with Dawn of the Breakers as one of the
                          characters alongside Akai Haato, Natsuiro Matsuri,
                          Shirakami Fubuki, Nakiri Ayame, Oozora Subaru, and
                          Ookami Mio.[38] Kintoki also appears alongside her as
                          an obtainable equipment, while 35P appears as an
                          obtainable item in the game.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 22 November, she announced that she would be
                          voicing Kiriko, a playable character in 100% Orange
                          Juice!.
                        </p>
                      </li>
                      <li
                        class="list-group-item list-group-item-action border-0"
                      >
                        &middot; 2020
                        <p class="dark_state">
                          On 28 January 2020, it was announced on Dengekionline
                          that she would make an appearance in the game Neptunia
                          Virtual Stars as one of the VTuber guest characters
                          alongside Tokino Sora, Roboco, Shirakami Fubuki,
                          Minato Aqua, Yuzuki Choco, Inugami Korone, Shirogane
                          Noel and Houshou Marine.
                        </p>
                        <hr class="dropdown-divider" />
                        <p class="dark_state">
                          On 13 November, Vanguard Zero's Japanese Twitter
                          account announced that Miko would appear in the
                          Japanese version of the game as a special unit, she
                          was available from 17 November to 26 November.
                        </p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <div class="row mt-3">
                      <div class="col-md-10">
                        <h2 class="dark_state">Maskot and Fans</h2>
                        <p class="dark_state">
                          She has a talking pink cat by the name of "Kintoki"
                          (金時) as her pet shikigami. She officially calls her
                          fans "35P" (みこぴー Mikopi) who also serve as mascots
                          in her channel. They are usually depicted as white
                          cats in her videos. Her name "Miko" (みこ) can be
                          harmonized into the numbers "3" and "5" in Japanese,
                          which also corresponds to her birthday (5 March),
                          hence the origin of the fan name. Fans often Super
                          Chat her streams in amounts of "3,535" as a reference
                          to her name.
                        </p>
                      </div>
                      <div class="col-md-2">
                        <img
                          class="img-thumbnail rounded-circle"
                          src="{{ asset('assets/images/icon/Sakura_Miko-35P_Emoji.png') }}"
                          alt="35P Emoji"
                          width="200"
                          height="200"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <small class="text-muted me-auto"
                >Fetching from
                <a
                  rel="noopener noreferrer"
                  target="_blank"
                  class="text-decoration-none"
                  href="https://virtualyoutuber.fandom.com/wiki/Sakura_Miko"
                  title="WikiFandom"
                  >WikiFandom</a
                >
              </small>
              <button
                type="button"
                class="btn text-light"
                data-bs-dismiss="modal"
                data-bs-target="gallery"
              >
                Gitu, ya.
              </button>
            </div>
          </div>
        </div>
      </div>
      {{--  End Modal  --}}

      {{--  Back to Top  --}}
      <a
        href="#page"
        id="back"
        class="top hide"
        style="display: inline"
        title="Back To Top"
        ><i class="bi bi-arrow-up-circle-fill"></i
      ></a>
    </div>
    {{--  End Page  --}}

    {{--  JQuery  --}}
    <script
      type="text/javascript"
      src="{{ asset('assets/js/jquery.min.js') }}"
    ></script>

    {{--  Google  --}}
    <script
      type="text/javascript"
      async
      src="https://www.google-analytics.com/analytics.js"
    ></script>
    <script
      type="text/javascript"
      async
      src="https://www.gstatic.com/recaptcha/releases/jxFQ7RQ9s9HTGKeWcoa6UQdD/recaptcha__en.js"
      crossorigin="anonymous"
      integrity="sha384-M9863pj8VTkCmdbfuuaGvQUaNXo72mc4KbfOtDfVBjv+zjrQy0vx5uzX9BsGSepE"
    ></script>
    <script
      type="text/javascript"
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-174222113-1"
    ></script>

    {{--  Bootstrap JavaScript  --}}
    <script
      type="text/javascript"
      src="{{ asset('assets/bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js') }}"
    ></script>

    {{--  Swiper JavaScript  --}}
    <script
      type="text/javascript"
      src="{{ asset('assets/js/swiper-bundle.min.js') }}">
    </script>

    {{--  My JavaScript  --}}
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/swiper.js') }}"></script>
    <script
      type="text/javascript"
      src="{{ asset('assets/js/dark-mode-switch.min.js') }}"
    ></script>
  </body>
</html>
