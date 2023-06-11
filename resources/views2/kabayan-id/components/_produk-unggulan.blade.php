<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h4 class="title text-center text-dark">{{ __('kabayan-id/dashboard.produk.judul') }}</h4>
                <p class="text-center">{{ __('kabayan-id/dashboard.produk.deskripsi') }}</p>
            </div>
            @foreach (__('kabayan-id/dashboard.produk.konten') as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4 pt-2">
                    <div class="card features feature-dark feature-clean explore-feature p-4 border-0 rounded-md shadow text-center"
                        style="height: 100%;">
                        <img src="{{ asset('web-asset/images/produk-layanan/produk/' . $item['gambar']) }}"
                            class="rounded-md avatar avatar-lg" alt="">
                        <div class="card-body p-0 content">
                            <h5 class="mt-4">
                                <a href="{{ $item['link'] }}" target="_blank"
                                    class="title text-dark">{{ $item['nama'] }}</a>
                            </h5>
                            <p class="text-muted">{{ $item['konten'] }}</p>
                            <a href="{{ $item['link'] }}" target="_blank" class="read-more">
                                {{ __('kabayan-id/dashboard.produk.btn') }} <i
                                    class="uil uil-angle-right-b align-middle"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
