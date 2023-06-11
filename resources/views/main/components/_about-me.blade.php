@php
    $collection = [['name' => 'Word Press', 'value' => 84], ['name' => 'Angular / JavaScript', 'value' => 78], ['name' => 'HTML', 'value' => 93]];
@endphp
<section class="section" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="position-relative">
                    <img src="{{ asset('xlanding/assets/images/personal/hero.jpg') }}"
                        class="rounded-pill shadow img-fluid" alt="">
                    <div class="play-icon">
                        <a href="#!" data-type="youtube" data-id="liJVSwOiiwg" class="play-btn lightbox border-0">
                            <i class="mdi mdi-play text-primary rounded-circle shadow"></i>
                        </a>
                    </div>
                    <div class="position-absolute top-0 start-0 z-index-m-1">
                        <img src="{{ asset('xlanding/assets/images/shapes/dots.svg') }}" class="avatar avatar-xl-large"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="ms-lg-5">
                    <div class="section-title">
                        <span class="badge rounded-pill bg-soft-primary">About Me</span>
                        <h4 class="title mt-2 mb-4">Better Design <br> Better Experience</h4>
                        <p class="para-desc text-muted pb-0">Obviously I'm a Web Designer. Experienced with all stages
                            of the development cycle for dynamic web projects.</p>
                    </div>
                    @foreach ($collection as $item)
                        <div class="progress-box mt-4">
                            <h6 class="title fw-normal text-muted">{{ $item['name'] }}</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary"
                                    style="width:{{ $item['value'] }}%;">
                                    <div class="progress-value d-block text-muted h6">{{ $item['value'] }}%</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
