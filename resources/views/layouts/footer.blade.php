@section('footer')
  {{-- Footer --}}
  <footer
    class="pb-3 text-center text-light {{ Request::is('virtualpedia') || Request::is('en' . '/virtualpedia') ? 'primary_light' : 'primary_blue' }}">
    <div class="row justify-content-around mb-5 pt-3 pt-md-0">
      <div class="col-md-8">
        <div class="d-flex justify-content-evenly">
          <a class="social" rel="noopener noreferrer" target="_blank" href="{{ url('https://www.facebook.com/VtuberSubIndo') }}">
            <img loading="lazy" src="{{ asset('assets/images/icon/facebook.png') }}" alt="Facebook Logo" title="Facebook Fanpage"
              width="50" height="50" />
          </a>
          <a class="social" rel="noopener noreferrer" target="_blank" href="{{ url('https://instagram.com/vtubersubindo') }}">
            <img loading="lazy" src="{{ asset('assets/images/icon/instagram.png') }}" alt="Instagram Logo" title="Instagram" width="50"
              height="50" />
          </a>
          <a class="social" rel="noopener noreferrer" target="_blank" href="{{ url('https://youtube.com/c/VtuberSubIndo') }}">
            <img loading="lazy" src="{{ asset('assets/images/icon/youtube.png') }}" alt="YouTube Logo" title="YouTube" width="50"
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=UA-174222113-1"></script>

  {{-- Bootstrap JavaScript --}}
  <script type="text/javascript" src="{{ asset('assets/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js') }}"></script>

  {{-- Swiper JavaScript --}}
  <script type="text/javascript" src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

  {{--  Facebook Pixel  --}}
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '888766721915874');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display: none" src="https://www.facebook.com/tr?id=888766721915874&ev=PageView&noscript=1"/>
  </noscript>

  {{-- My JavaScript --}}
  <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/form.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/swiper.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/dark-mode-switch.min.js') }}"></script>
@endsection
