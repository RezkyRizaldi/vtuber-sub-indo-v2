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
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-light" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Hololive</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-light" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Nijisanji</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-light" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Indie</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                                            <img src="{{ asset('storage/talent/' . $talent->image) }}"
                                                class="card-img-top" alt="Content 1">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $talent->name }}</h5>
                                                <p class="card-text text-truncate">{{ $talent->desc }}</p>
                                                <a href="#" class="btn text-light">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                            {{-- <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership1.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership2.png') }}"
                                        class="card-img-top" alt="Content 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership3.png') }}"
                                        class="card-img-top" alt="Content 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership4.png') }}"
                                        class="card-img-top" alt="Content 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership1.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership2.png') }}"
                                        class="card-img-top" alt="Content 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership3.png') }}"
                                        class="card-img-top" alt="Content 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership4.png') }}"
                                        class="card-img-top" alt="Content 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership1.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership2.png') }}"
                                        class="card-img-top" alt="Content 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership3.png') }}"
                                        class="card-img-top" alt="Content 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership4.png') }}"
                                        class="card-img-top" alt="Content 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership4.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership3.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership2.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership1.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership3.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership4.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership1.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/content/membership2.png') }}"
                                        class="card-img-top" alt="Content 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the
                                            bulk
                                            of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
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
