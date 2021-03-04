@section('navbar')

  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <div class="d-flex">
        <div class="form-check form-switch me-auto">
          <input type="checkbox" class="form-check-input" id="darkSwitch" />
        </div>
      </div>
      <a class="navbar-brand d-none d-sm-block m-auto center" href="{{ url('/') }}"
        title="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}">
        <img src="{{ asset('assets/images/icon/icon.png') }}"
          alt="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }} Logo" width="30" />
        {{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}
      </a>
      <a class="navbar-brand d-block d-sm-none m-auto ps-4" href="{{ url('/') }}"
        title="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}">
        <img src="{{ asset('assets/images/icon/icon.png') }}"
          alt="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }} Logo" width="30" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav" style="flex-grow: 0">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" title="Home" data-scroll="home" href="#page">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="About" data-scroll="about" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="Gallery" data-scroll="gallery" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="Contact Us" data-scroll="contact" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- End Navbar --}}
@endsection
