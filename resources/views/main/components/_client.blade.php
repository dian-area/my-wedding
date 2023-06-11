@php
    $collection = [];
    array_push($collection, 'amazon.svg');
    array_push($collection, 'google.svg');
    array_push($collection, 'lenovo.svg');
    array_push($collection, 'paypal.svg');
    array_push($collection, 'shopify.svg');
    array_push($collection, 'spotify.svg');
@endphp
<div class="container pt-5">
    <div class="row justify-content-center">
        @foreach ($collection as $item)
            <div class="col-lg-2 col-md-2 col-6 py-2">
                <div class="text-center">
                    <img src="{{ asset('xlanding/assets/images/client/' . $item) }}" class="avatar avatar-ex-sm"
                        alt="">
                </div>
            </div>
        @endforeach
    </div>
</div>
