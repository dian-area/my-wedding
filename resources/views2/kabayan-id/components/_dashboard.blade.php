<section class="mx-auto"
    style="background: linear-gradient(225.28deg, rgba(244, 199, 46, 0.65) 11.96%, rgba(57, 55, 56, 0.65) 88.52%) , url('{{ asset('web-asset/images/kabayan-id/bg-kabayan.png') }}'); background-size: cover;">
    <div class="d-flex p-3 mx-auto flex-column justify-content-center position-relative align-items-center container"
        style="gap: 10px; height: 100%; min-height: 100vh">
        <div class="row">
            <div class="col-2 mx-auto">
                <img src="web-asset/images/kabayan-id/logo-kabayan-group.png" class="img-fluid">
            </div>
        </div>
        <h4 class="heading text-white text-center description-kabayan">
            SELAMAT DATANG
        </h4>
        <p class="text-white text-center px-4">
            Kabayan Group adalah grup perusahaan IT Sektor Publik (e-Gov) yang menyediakan tools yang dapat membantu
            tugas dan fungsi ASN—mempermudah proses yang semula berbasis manual menjadi berbasis elektronik,
            meningkatkan akuntabilitas pelaksaanaan pemerintahan dan membantu menentukan keputusan secara presisi dengan
            data yang akurat.
        </p>
        <div class="row mt-4">
            @foreach ($konten as $item)
                <div class="col-lg-3 col-sm-3 mb-4 px-4">
                    <div class="d-flex flex-column" style="gap: 20px; justify-content: space-between; height: 100%">
                        <img src="web-asset/images/kabayan-id/{{ $item['gambar'] }}" class="img-fluid">
                        <a href="{{ $item['link'] }}" target="_blank" type="a"
                            class="btn rounded btn-light">Kunjungi</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
