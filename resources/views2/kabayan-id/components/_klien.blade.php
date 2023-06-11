<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title ">
                    <h4 class="title mb-4 text-dark">Klien Kami</h4>
                    <p class="text-muted para-desc mx-auto">
                        Berikut merupakan klien yang sudah menggunakan jasa kami
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4 text-center">
                @foreach (__('kabayan-id/dashboard.konten.klien.konten') as $item)
                    <div class="mb-4 pb-4">
                        <p class="text-muted para-desc mx-auto">
                            {{ $item['judul'] }}
                        </p>
                        <div class="row">
                            @foreach ($item['gambar'] as $element)
                                <div class="col-lg-4 col-md-6 mt-4 pt-2" style="flex: 1 1 20%">
                                    <div class="card features feature-dark feature-clean explore-feature p-4 border-0 rounded-md shadow"
                                        style="max-height: 200px;">
                                        <img src="{{ asset('web-asset/images/cv/klien/' . $element) }}" alt=""
                                            srcset="" class="img-logo">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
