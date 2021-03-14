@section('navbar')
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <div class="navbar-nav d-flex flex-row">
        <a class="nav-link text-decoration-none px-2 {{ Request::is('/') || Request::is('virtualpedia') ? 'active' : '' }}"
          aria-current="page" href="{{ Request::is('en' . '/virtualpedia') ? url('/virtualpedia') : url('/') }}">ID
        </a>
        <span class="text-light" style="line-height: 40px"> | </span>
        <a class="nav-link text-decoration-none px-2 {{ Request::is(@$local) || Request::is('en' . '/virtualpedia') ? 'active' : '' }}"
          href="{{ Request::is('virtualpedia') || Request::is('en' . '/virtualpedia') ? url('en' . '/virtualpedia') : url('en' . '/') }}">EN
        </a>
        <div class="form-check form-switch me-auto pt-2">
          <input type="checkbox" class="form-check-input" id="darkSwitch" />
        </div>
      </div>
      <a class="navbar-brand d-none d-xl-block d-xxl-block m-auto center" href="{{ url('/') }}"
        title="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}">
        <img src="{{ asset('assets/images/icon/icon.png') }}"
          alt="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }} Logo" width="30" />
        {{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}
      </a>
      <a class="navbar-brand d-block d-xl-none d-xxl-none pe-5 pe-lg-0 order-lg-1" href="{{ url('/') }}"
        title="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}">
        <img src="{{ asset('assets/images/icon/icon.png') }}"
          alt="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }} Logo" width="30" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav" style="flex-grow: 0">
        <ul class="navbar-nav ms-auto ps-2 pe-lg-5 pe-xl-0">
          <li class="nav-item">
            <a class="nav-link text-capitalize {{ Request::is('/') || Request::is(@$local) ? 'active' : '' }}"
              aria-current="page" title="{{ @$local ? __('data.link.home') : 'Beranda' }}" data-scroll="home"
              href="{{ Request::is(@$local) || Request::is('virtualpedia') || Request::is('en' . '/virtualpedia') ? url('/') : '#page' }}">
              @if (@$local)
                @lang('data.link.home')
              @else
                Beranda
              @endif
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-capitalize" title="{{ @$local ? __('data.link.about') : 'Tentang' }}"
              data-scroll="about"
              href="{{ Request::is(@$local) || Request::is('virtualpedia') || Request::is('en' . '/virtualpedia') ? url('/') : '#about' }}">
              @if (@$local)
                @lang('data.link.about')
              @else
                Tentang
              @endif
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-capitalize {{ Request::is(@$local) || Request::is('virtualpedia') || Request::is('en' . '/virtualpedia') ? 'active' : '' }}"
              title="Virtualpedia" data-scroll="virtualpedia"
              href="{{ Request::is(@$local) || Request::is('en' . '/virtualpedia') ? url('en' . '/virtualpedia') : route('virtualpedia') }}">
              @if (@$local)
                @lang('data.link.virtualpedia')
              @else
                Virtualpedia
              @endif
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-capitalize" title="{{ @$local ? __('data.link.videos') : 'Clip' }}"
              data-scroll="videos"
              href="{{ Request::is(@$local) || Request::is('virtualpedia') || Request::is('en' . '/virtualpedia') ? url('/') : '#videos' }}">
              @if (@$local)
                @lang('data.link.videos')
              @else
                Clip
              @endif
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-capitalize" title="{{ @$local ? __('data.link.profile') : 'Kontak' }}"
              data-scroll="contact"
              href="{{ Request::is(@$local) || Request::is('virtualpedia') || Request::is('en' . '/virtualpedia') ? url('/') : '#contact' }}">
              @if (@$local)
                @lang('data.link.contact')
              @else
                Kontak
              @endif
            </a>
          </li>
          <li class="nav-item d-none d-lg-block d-xl-block d-xxl-block">
            <a title="{{ @$local ? __('data.link.profile') : 'Username' }}" href="{{ url('/') }}">
              <img src="{{ asset('assets/images/default_pfp.png') }}" class="mt-1 ms-1 rounded-circle img-thumbnail"
                alt="Username" width="30" height="30" />
            </a>
          </li>
          <li class="nav-item d-block d-lg-none d-xl-none d-xxl-none">
            <a class="nav-link text-decoration-none" title="{{ @$local ? __('data.link.profile') : 'Username' }}"
              href="{{ url('/') }}">
              <img src="{{ asset('assets/images/default_pfp.png') }}" class="me-1 rounded-circle img-thumbnail"
                alt="Username" width="30" height="30" />
              Username
            </a>
          </li>
          <li class="nav-item dropdown mt-2 ms-1 d-none d-lg-block d-xl-block d-xxl-block">
            <a class="text-light dropdown-toggle" href="{{ url('/') }}" data-bs-toggle="dropdown"
              data-bs-display="static" role="button" aria-expanded="false">
            </a>
            <ul class="dropdown-menu dropdown-menu-lg-end">
              <li>
                <h6 class="dropdown-header">Signed in as username</h6>
              </li>
              <li><a class="dropdown-item" href="{{ url('/') }}"
                  title="{{ @$local ? __('data.link.profile') : 'Username' }}">Profile</a></li>
              <li><a class="dropdown-item" href="{{ url('/') }}"
                  title="{{ @$local ? __('data.link.profile') : 'Username' }}">Another action</a></li>
              <li><a class="dropdown-item" href="{{ url('/') }}"
                  title="{{ @$local ? __('data.link.profile') : 'Username' }}">Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{ url('/') }}"
                  title="{{ @$local ? __('data.link.sign_out') : 'Keluar' }}">
                  @if (@$local)
                    @lang('data.link.sign_out')
                  @else
                    Keluar
                  @endif
                  <i class="bi bi-box-arrow-right ps-1 align-middle"></i>
                </a></li>
            </ul>
          </li>
          <li class="nav-item d-block d-lg-none d-xl-none d-xxl-none">
            <a class="nav-link text-capitalize" title="{{ @$local ? __('data.link.sign_out') : 'Keluar' }}"
              href="{{ url('/') }}">
              <i class="bi bi-box-arrow-right pe-1 align-middle"></i>
              @if (@$local)
                @lang('data.link.sign_out')
              @else
                Keluar
              @endif
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- End Navbar --}}
@endsection
