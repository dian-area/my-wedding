@php
    $collection = [];
    array_push($collection, ['name' => 'UI/UX Design', 'icon' => 'uil-airplay']);
    array_push($collection, ['name' => 'Ios App Designer', 'icon' => 'uil-shutter-alt']);
    array_push($collection, ['name' => 'Photography', 'icon' => 'uil-camera']);
    array_push($collection, ['name' => 'Graphic Designer', 'icon' => 'uil-adjust-circle']);
    array_push($collection, ['name' => 'Web Security', 'icon' => 'uil-setting']);
    array_push($collection, ['name' => '24/7 Support', 'icon' => 'uil-comment']);
@endphp
<section class="section bg-light" id="features">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">What do i offer ?</h4>
                    <p class="para-desc text-muted mx-auto mb-0">Obviously I'm a Web Designer. Experienced with all
                        stages of the development cycle for dynamic web projects.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($collection as $item)
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div
                        class="card border-0 text-center features feature-primary feature-clean course-feature p-4 overflow-hidden shadow">
                        <div class="icons text-center mx-auto">
                            <i class="uil {{$item['icon']}} d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5>{{ $item['name']}}</h5>
                            <p class="text-muted mt-3">The phrasal sequence of the Lorem Ipsum text is now so that many
                                DTP
                                programmes can generate</p>

                            <a href="" class="link">Read more <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
