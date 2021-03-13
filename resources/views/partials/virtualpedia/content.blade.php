{{-- About Section --}}
<section data-anchor="virtualpedia" id="virtualpedia">
  <div class="container">
    <div class="row mb-5 text-center text-light">
      <div class="col">
        <h2>
          @if (Request::is('en' . '/virtualpedia'))
            @lang('data.title.virtualpedia.lead')
          @else
            Virtualpedia
          @endif
        </h2>
        <p class="fs-5">
					@if (Request::is('en' . '/virtualpedia'))
            @lang('data.title.virtualpedia.paragraph')
          @else
            Cari tahu informasi seputar Oshi kalian!
          @endif
				</p>
      </div>
    </div>
		<div class="row">
			<div class="col-12">
				<div class="row d-flex justify-content-md-center">
					<div class="col-12 col-md-8 order-2 order-md-0">
						<ul class="nav nav-pills" id="pills-tab" role="tablist">
							@foreach($affiliationGen as $key => $aff)
								<li class="nav-item" role="presentation">
									<button class="nav-link {{ $key == 0 ? 'active' : '' }} text-light" id="pills-{{ $aff->id }}-tab" data-bs-toggle="pill"
										data-bs-target="#pills-{{ $aff->id }}" type="button" role="tab" aria-controls="pills-{{ $aff->id }}"
										aria-selected="true">{{ $aff->name }}</button>
								</li>
							@endforeach
						</ul>
						<hr class="mt-3 nav_divider" />
						<div class="tab-content" id="pills-tabContent">
							@foreach($affiliationGen as $key => $aff)
								<div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="pills-{{ $aff->id }}" role="tabpanel" aria-labelledby="pills-{{ $aff->id }}-tab">
									<div class="row mb-5">
										<div class="col-12">
											<div class="row justify-content-center">
												@foreach ($aff->affiliationGen as $gen)
													<h2 class="text-center text-light text-capitalize my-5">
													 @php
															$genGroup = $gen->group;
														@endphp
														@if ($gen->id === 4 || $gen->id === 24)
															{{ $gen->group->name }} {{ $gen->gen }}
														@elseif ($gen->id === 8 || ($gen->id >= 19 && $gen->id <= 21))
															{{ $gen->gen }}
														@elseif ($gen->id === 9 || $gen->id === 10 || ($gen->id >= 25 && $gen->id <= 29))
															{{ $gen->group->name }} {{ $genGroup->groupBranch[1]->code }} Gen {{ $gen->gen }}
														@elseif ($gen->id === 11)
															{{ $gen->group->name }} {{ $genGroup->groupBranch[2]->code }} Gen {{ $gen->gen }}
														@elseif ($gen->id === 12 || $gen->id === 13)
															{{ $gen->group->name }} {{ $genGroup->groupBranch[3]->code }} Gen {{ $gen->gen }}
														@elseif (($gen->id >= 14 && $gen->id <= 16) || ($gen->id >= 37 && strlen($gen->id) ))
															{{ $gen->group->name }} Gen {{ $gen->gen }}
														@elseif ($gen->id === 17 || $gen->id === 18 || $gen->id === 22 || $gen->id === 23)
															{{ $gen->group->name }} {{ $genGroup->groupBranch->first()->code }} Wave {{ $gen->gen }}
														@elseif ($gen->id === 30)
															{{ $gen->group->name }} {{ $genGroup->groupBranch[2]->code }}
														@elseif ($gen->id >= 31 && $gen->id <= 35)
															{{ $gen->group->name }} {{ $genGroup->groupBranch[3]->code }} Gen {{ $gen->gen }}
														@else
															{{ $gen->group->name }} {{ $genGroup->groupBranch->first()->code }} Gen {{ $gen->gen }}
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
																				<h5 class="card-title dark_state">
																				@if ($talent->status === 1)
																					{{ $talent->name }} <span class="text-muted" style="font-size: 1rem">(Suspended)</span>
																				@elseif ($talent->status === 2)
																					{{ $talent->name }} <span class="text-muted" style="font-size: 1rem">(Retired)</span>
																				@else
																					{{ $talent->name }}
																				@endif
																				</h5>
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
							@endforeach
						</div>
					</div>
					<div class="col-12 col-md-4 col-xl-3 offset-0 offset-xl-1">
						{{-- <h2 class="mb-5 text-center text-light">Hello, World!</h2> --}}
						<div class="virtualpedia_sorter mb-5 mb-md-0 rounded-3 overflow-auto fw-bold position-sticky">
							<label for="search" class="form-label text-light fs-5">
								@if (Request::is('en' . '/virtualpedia'))
									@lang('data.title.virtualpedia.sort.search.lead')
								@else
									Cari Vtuber kamu
								@endif
							</label>
							<div class="input-group mb-3">
								<input id="search" type="search" class="form-control" placeholder="Search here..." title="Search here..." aria-label="Cari disini" aria-describedby="btnSearch">
								<button class="btn text-light" type="button" id="btnSearch">
									<i class="bi bi-search"></i>
								</button>
							</div>
							<label for="filter" class="form-label text-light fs-5">
								@if (Request::is('en' . '/virtualpedia'))
									@lang('data.title.virtualpedia.sort.filter')
								@else
									Filter
								@endif
							</label>
							<div class="mb-3">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" value="option1" id="filter1">
									<label class="form-check-label text-light" for="filter1">
										Filter 1
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" value="option2" id="filter2">
									<label class="form-check-label text-light" for="filter2">
										2
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" value="option3" id="filter3">
									<label class="form-check-label text-light" for="filter3">
										Filter 3
									</label>
								</div>
							</div>
							<label for="category" class="form-label text-light fs-5">
								@if (Request::is('en' . '/virtualpedia'))
									@lang('data.title.virtualpedia.sort.category')
								@else
									Kategori
								@endif
							</label>
							<div class="list-group mb-3">
								<button type="button" class="list-group-item list-group-item-action active" aria-current="true">All</button>
								<button type="button" class="list-group-item list-group-item-action">Category 1</button>
								<button type="button" class="list-group-item list-group-item-action">Category 2</button>
								<button type="button" class="list-group-item list-group-item-action">Category 3</button>
								<button type="button" class="list-group-item list-group-item-action">Category 4</button>
								<button type="button" class="list-group-item list-group-item-action">Category 5</button>
								<button type="button" class="list-group-item list-group-item-action">Category 6</button>
								<button type="button" class="list-group-item list-group-item-action">Category 7</button>
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
