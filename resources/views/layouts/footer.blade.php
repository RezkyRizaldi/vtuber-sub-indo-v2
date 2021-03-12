@section('footer')
  {{-- Footer --}}
  <footer
    class="pb-3 text-center text-light {{ Request::is('virtualpedia') || Request::is('en' . '/virtualpedia') ? 'primary_light' : 'primary_blue' }}">
    <div class="row justify-content-around mb-5 pt-3 pt-md-0">
      <div class="col-md-8">
        <div class="d-flex justify-content-evenly">
          <a class="social" rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/VtuberSubIndo">
            <img src="{{ asset('assets/images/icon/facebook.png') }}" alt="Facebook Logo" title="Facebook Fanpage"
              width="50" height="50" />
          </a>
          <a class="social" rel="noopener noreferrer" target="_blank" href="https://instagram.com/vtubersubindo">
            <img src="{{ asset('assets/images/icon/instagram.png') }}" alt="Instagram Logo" title="Instagram" width="50"
              height="50" />
          </a>
          <a class="social" rel="noopener noreferrer" target="_blank" href="https://youtube.com/c/VtuberSubIndo">
            <img src="{{ asset('assets/images/icon/youtube.png') }}" alt="YouTube Logo" title="YouTube" width="50"
              height="50" />
          </a>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-8 col-lg-12">
        <p class="{{ Request::is('virtualpedia') || Request::is('en' . '/virtualpedia') ? 'text-dark' : '' }}">
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());

          </script>
          by
          <span
            class="{{ Request::is('virtualpedia') || Request::is('en' . '/virtualpedia') ? 'text-dark' : 'dark_state' }}">
            Vtuber Sub Indo
          </span>
          <i class="bi bi-paperclip"></i>
          All Rights Reserved.
        </p>
      </div>
    </div>
  </footer>
  {{-- End Footer --}}

  {{-- Back to Top --}}
  <a href="#page" id="back" class="top hide" style="display: inline" title="Back To Top">
    <i class="bi bi-arrow-up-circle-fill"></i>
  </a>

  {{-- JQuery --}}
  <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>

  {{-- Google --}}
  <script type="text/javascript" async src="https://www.google-analytics.com/analytics.js"></script>
  <script type="text/javascript" async
    src="https://www.gstatic.com/recaptcha/releases/jxFQ7RQ9s9HTGKeWcoa6UQdD/recaptcha__en.js" crossorigin="anonymous"
    integrity="sha384-M9863pj8VTkCmdbfuuaGvQUaNXo72mc4KbfOtDfVBjv+zjrQy0vx5uzX9BsGSepE">
  </script>
  <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=UA-174222113-1"></script>

  {{-- Bootstrap JavaScript --}}
  <script type="text/javascript" src="{{ asset('assets/bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js') }}">
  </script>

  {{-- Swiper JavaScript --}}
  <script type="text/javascript" src="{{ asset('assets/js/swiper-bundle.min.js') }}">
  </script>

  {{-- My JavaScript --}}
  <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/swiper.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/dark-mode-switch.min.js') }}"></script>
@endsection
