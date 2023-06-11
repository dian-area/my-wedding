@php
    $collection = [];
    array_push($collection, ['icon' => 'shree-logo.png', 'company' => 'Self Employed', 'name' => 'UI / UX Designer', 'date' => '2019-12']);
    array_push($collection, ['icon' => 'google-logo.png', 'company' => 'Google Tech.', 'name' => 'Sr. UX / UI Designer', 'date' => '2018-19']);
    array_push($collection, ['icon' => 'lenovo-logo.png', 'company' => 'Lenovo Ltd.', 'name' => 'Jr. UX / UI Designer', 'date' => '2019-12']);
@endphp
<section class="section" id="experience">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <div class="position-relative">
                        <h4 class="title mb-4">Work Experience</h4>
                    </div>
                    <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all
                        stages of the development cycle for dynamic web projects.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <div class="timeline-page position-relative">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($collection as $item)
                        @if ($i % 2 == 0)
                            <div class="timeline-item @if ($i != 1) ? mt-5 pt-2 @endif ">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2 mt-4 mt-sm-0">
                                        <div class="event event-description-left float-left text-end">
                                            <h6 class="title mb-1 text-capitalize">{{ $item['name'] }}</h6>
                                            <p class="timeline-subtitle mt-3 mb-0 text-muted">The generated injected
                                                humour,
                                                or
                                                non-characteristic words etc. Cum sociis natoque penatibus et magnis dis
                                                parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                        <div class="duration duration-right position-relative">
                                            <img src=" {{ asset('xlanding/assets/images/client/' . $item['icon']) }}"
                                                class="rounded-pill avatar avatar-ex-small" alt="">
                                            <h5 class="my-2">{{ $item['company'] }}</h5>
                                            <small class="text-muted mb-0">{{ $item['date'] }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="timeline-item mt-5 pt-2">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mt-4 mt-sm-0">
                                        <div class="duration date-label-left position-relative text-md-end">
                                            <img src=" {{ asset('xlanding/assets/images/client/' . $item['icon']) }}"
                                                class="rounded-pill avatar avatar-ex-small" alt="">
                                            <h5 class="my-2">{{ $item['company'] }}</h5>
                                            <small class="text-muted mb-0">{{ $item['date'] }}</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mt-4 mt-sm-0">
                                        <div class="event event-description-right float-left text-start">
                                            <h6 class="title mb-1 text-capitalize">{{ $item['name'] }}</h6>
                                            <p class="timeline-subtitle mt-3 mb-0 text-muted">The generated injected
                                                humour,
                                                or
                                                non-characteristic words etc. Cum sociis natoque penatibus et magnis dis
                                                parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
