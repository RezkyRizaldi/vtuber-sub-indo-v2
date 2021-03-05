@section('navbar')
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <div class="navbar-nav d-flex flex-row">
                <a class="nav-link text-decoration-none px-2 {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('/') }}">ID</a><span class="text-light" style="line-height: 40px"> |
                </span>
                <a class="nav-link text-decoration-none px-2 {{ Request::is(@$local) ? 'active' : '' }}"
                    href="{{ url('en' . '/') }}">EN</a>
                <div class="form-check form-switch me-auto pt-2">
                    <input type="checkbox" class="form-check-input" id="darkSwitch" />
                </div>
            </div>
            <a class="navbar-brand d-none d-sm-block m-auto center" href="{{ url('/') }}"
                title="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}">
                <img src="{{ asset('assets/images/icon/icon.png') }}"
                    alt="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }} Logo" width="30" />
                {{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}
            </a>
            <a class="navbar-brand d-block d-sm-none pe-5" href="{{ url('/') }}"
                title="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}">
                <img src="{{ asset('assets/images/icon/icon.png') }}"
                    alt="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }} Logo" width="30" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="flex-grow: 0">
                <ul class="navbar-nav ms-auto ps-2">
                    <li class="nav-item">
                        <a class="nav-link text-capitalize active" aria-current="page" title="Home" data-scroll="home"
                            href="#page">
                            @if (@$local)
                                @lang('data.link.home')
                            @else
                                Beranda
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" title="About" data-scroll="about" href="#about">
                            @if (@$local)
                                @lang('data.link.about')
                            @else
                                Tentang
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" title="Videos" data-scroll="videos" href="#videos">
                            @if (@$local)
                                @lang('data.link.videos')
                            @else
                                Clip
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" title="Contact Us" data-scroll="contact" href="#contact">
                            @if (@$local)
                                @lang('data.link.contact')
                            @else
                                Kontak
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}
@endsection
