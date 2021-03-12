{{-- About Section --}}
<section data-anchor="virtualpedia" id="virtualpedia">
  <div class="container">
    <div class="row mb-5 text-center text-light">
      <div class="col">
        <h2>
          @if (Request::is('en' . '/virtualpedia'))
            @lang('data.title.virtualpedia')
          @else
            Virtualpedia
          @endif
        </h2>
        <p class="fs-5">Cari tahu informasi seputar Oshi kalian!</p>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active text-light" id="pills-hololive-tab" data-bs-toggle="pill"
              data-bs-target="#pills-hololive" type="button" role="tab" aria-controls="pills-hololive"
              aria-selected="true">Hololive</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-light" id="pills-nijisanji-tab" data-bs-toggle="pill"
              data-bs-target="#pills-nijisanji" type="button" role="tab" aria-controls="pills-nijisanji"
              aria-selected="false">Nijisanji</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-light" id="pills-maha5-tab" data-bs-toggle="pill" data-bs-target="#pills-maha5"
              type="button" role="tab" aria-controls="pills-maha5" aria-selected="false">MAHA5</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-light" id="pills-indie-tab" data-bs-toggle="pill" data-bs-target="#pills-indie"
              type="button" role="tab" aria-controls="pills-indie" aria-selected="false">Indie</button>
          </li>
        </ul>
        <hr class="mt-3 nav_divider" />
      </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-hololive" role="tabpanel" aria-labelledby="pills-hololive-tab">
        <div class="row">
          <div class="col-12">
            <div class="row justify-content-center">
              @foreach ($genTalent as $gen)
                <h2 class="text-center text-light text-capitalize my-5">
                  @if ($gen->id === 4)
                    {{ $gen->type }} {{ $gen->gen }}
                  @elseif ($gen->id === 8)
                    {{ $gen->gen }}
                  @elseif ($gen->id === 9 || $gen->id === 10)
                    {{ $gen->type }} ID Gen {{ $gen->gen }}
                  @elseif ($gen->id === 11)
                    {{ $gen->type }} EN Gen {{ $gen->gen }}
                  @elseif ($gen->id === 12 || $gen->id === 13)
                    {{ $gen->type }} CN Gen {{ $gen->gen }}
                  @elseif ($gen->id === 14 || $gen->id === 15 || $gen->id === 16)
                    {{ $gen->type }} Gen {{ $gen->gen }}
                  @elseif ($gen->id === 17)
                    {{ $gen->type }}
                  @else
                    {{ $gen->type }} Gen {{ $gen->gen }}
                  @endif
                </h2>
                <div class="col-md-12">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      @foreach ($gen->genTalent as $talent)
                        <div class="swiper-slide">
                          <div class="card h-100">
                            <img src="{{ asset('storage/talent/' . $talent->image) }}" class="card-img-top"
                              alt="Content 1">
                            <div class="card-body">
                              <h5 class="card-title dark_state">{{ $talent->name }}</h5>
                              <p class="card-text text-truncate dark_state">{{ $talent->desc }}</p>
                              <a href="#" class="btn text-light">Lihat Selengkapnya</a>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-nijisanji" role="tabpanel" aria-labelledby="pills-nijisanji-tab">
        <div class="row">
          <div class="col-12">
            <div class="row">
              @foreach ($genTalent as $gen)
                <div class="col-12">
                  <p>{{ $gen->gen }}</p>
                </div>
                @foreach ($gen->genTalent as $talent)
                  <div class="col-3">
                    <div class="card" style="max-height: 550px">
                      <img src="{{ asset('storage/talent/' . $talent->image) }}" class="card-img-top"
                        alt="Content 1">
                      <div class="card-body">
                        <h5 class="card-title">{{ $talent->name }}</h5>
                        <p class="card-text text-truncate">{{ $talent->desc }}</p>
                        <a href="#" class="btn text-light">Lihat Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-maha5" role="tabpanel" aria-labelledby="pills-maha5-tab">
        <div class="row">
          <div class="col-12">
            <div class="row">
              @foreach ($genTalent as $gen)
                <div class="col-12">
                  <p>{{ $gen->gen }}</p>
                </div>
                @foreach ($gen->genTalent as $talent)
                  <div class="col-3">
                    <div class="card" style="max-height: 550px">
                      <img src="{{ asset('storage/talent/' . $talent->image) }}" class="card-img-top"
                        alt="Content 1">
                      <div class="card-body">
                        <h5 class="card-title">{{ $talent->name }}</h5>
                        <p class="card-text text-truncate">{{ $talent->desc }}</p>
                        <a href="#" class="btn text-light">Lihat Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-indie" role="tabpanel" aria-labelledby="pills-indie-tab">
        <div class="row">
          <div class="col-12">
            <div class="row">
              @foreach ($genTalent as $gen)
                <div class="col-12">
                  <p>{{ $gen->gen }}</p>
                </div>
                @foreach ($gen->genTalent as $talent)
                  <div class="col-3">
                    <div class="card" style="max-height: 550px">
                      <img src="{{ asset('storage/talent/' . $talent->image) }}" class="card-img-top"
                        alt="Content 1">
                      <div class="card-body">
                        <h5 class="card-title">{{ $talent->name }}</h5>
                        <p class="card-text text-truncate">{{ $talent->desc }}</p>
                        <a href="#" class="btn text-light">Lihat Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path class="svg_white" fill="#ffffff" fill-opacity="1"
      d="M0,256L48,224C96,192,192,128,288,106.7C384,85,480,107,576,149.3C672,192,768,256,864,245.3C960,235,1056,149,1152,117.3C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</section>
{{-- End About Section --}}
