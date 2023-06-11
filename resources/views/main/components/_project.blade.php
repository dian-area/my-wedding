@php
    $collection = [];
    array_push($collection, [
        'group' => 'branding',
        'picture' => '13.jpg',
        'name' => 'Mockup Collection',
    ]);
    array_push($collection, [
        'group' => 'branding',
        'picture' => '14.jpg',
        'name' => 'Mockup Collection',
    ]);
    array_push($collection, [
        'group' => 'photography',
        'picture' => '15.jpg',
        'name' => 'Mockup Collection',
    ]);
    array_push($collection, [
        'group' => 'development',
        'picture' => '16.jpg',
        'name' => 'Mockup Collection',
    ]);
    array_push($collection, [
        'group' => 'branding',
        'picture' => '17.jpg',
        'name' => 'Mockup Collection',
    ]);
    array_push($collection, [
        'group' => 'designing',
        'picture' => '18.jpg',
        'name' => 'Mockup Collection',
    ]);
    array_push($collection, [
        'group' => 'photography',
        'picture' => '19.jpg',
        'name' => 'Mockup Collection',
    ]);
    array_push($collection, [
        'group' => 'development',
        'picture' => '20.jpg',
        'name' => 'Mockup Collection',
    ]);
@endphp
<section class="section bg-light" id="project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">My Projects</h4>
                    <p class="para-desc text-muted mx-auto mb-0">Obviously I'm a Web Designer. Experienced with all
                        stages of the development cycle for dynamic web projects.</p>
                </div>
            </div>

        </div>


        <div class="row justify-content-center">
            <div class="col-12 mb-4 filters-group-wrap">
                <div class="filters-group">
                    <ul class="container-filter list-inline mb-0 filter-options text-center">
                        <li class="list-inline-item categories-name border text-dark rounded active" data-group="all">
                            All</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="branding">
                            Branding</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="designing">
                            Designing</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="photography">
                            Photography</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="development">
                            Development</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="grid" class="row">
            @foreach ($collection as $item)
                <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["{{ $item['group'] }}"]'>
                    <div
                        class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="{{ asset('xlanding/assets/images/work/' . $item['picture']) }}" class="img-fluid"
                                alt="work-image">
                            <div class="overlay-work">
                            </div>
                            <div class="content">
                                <h5 class="mb-1">
                                    <a href="portfolio-detail-one.html" class="text-white title">
                                        {{ $item['name'] }}
                                    </a>
                                </h5>
                                <h6 class="text-white-50 tag mt-1 mb-0">Mockup</h6>
                            </div>
                            <div class="icons text-center">
                                <a href="{{ asset('xlanding/assets/images/work/' . $item['picture']) }}"
                                    class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i
                                        data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-12 mt-4 pt-2">
                <div class="text-center">
                    <a href="javascript:void(0)" class="text-primary h6 mb-0">
                        See More
                        <span class="h5 mb-0 ms-1">
                            <i class="uil uil-arrow-right align-middle"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
