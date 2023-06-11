<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pagination Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the paginator library to build
    | the simple pagination links. You are free to change them to anything
    | you want to customize your views to better match your application.
    |
     */

    'produk' => [
        'judul' => 'Produk Dan Layanan',
        'deskripsi' => 'Produk dan layanan unggulan yang dimiliki oleh kami',
        'btn' => 'Lihat Lebih Lanjut',
        'konten' => [
            [
                'nama' => 'eLKPJ',
                'konten' => 'Sistem yang mendukung proses LKPJ pimpinan daerah di level Kabupten/Kota dan Provinsi yang bertujuan untuk mengumpulkan dan meverifikasi data secara elektronik dari seluruh SKPD dan UPT',
                'gambar' => 'elkpj/produk-elkpj-1.png',
                'link' => env('PRODUK_ELKPJ', null)
            ],
            [
                'nama' => 'Kabayan Media Monitoring',
                'konten' => 'Aplikasi yang tepat bagi perusahaan maupun instansi untuk memointor reputasi digital di berbagai media online dan media dosial',
                'gambar' => 'monitoring/produk-monitoring-1.png',
                'link' => env('PRODUK_MEDIA_MONITORING', null)
            ],
            [
                'nama' => 'Aplikasi Nona Cantik',
                'konten' => 'Notifikasi perizinan real time untuk SICANTIK',
                'gambar' => 'cantik/produk-cantik-1.png',
                'link' => env('PRODUK_NONA_CANTIK', null)
            ],
            [
                'nama' => 'Aplikasi SMS dan WhatsApp Broadcast',
                'konten' => 'Sosialisasi program-program dari sebuah instansi, early warning system dan dapat diintegrasikan dengan sistem internal milik instansi',
                'gambar' => 'sms/produk-sms-1.png',
                'link' => env('PRODUK_SMS_WA', null)
            ],
            [
                'nama' => 'Monitoring TV',
                'konten' => 'Di sektor pemerintahan memonitor informasi dari TV ini merupakan salah satu hal yang penting untuk mengetahui informasi dan peristiwa apa yang terjadi di masyarakat',
                'gambar' => 'tv/produk-tv-1.png',
                'link' => env('PRODUK_MONITORING_TV', null)
            ],
            [
                'nama' => 'Contact Center',
                'konten' => 'Solusi contact center dari kabayan consulting',
                'gambar' => 'contact/produk-contact-1.png',
                'link' => env('PRODUK_CONTACT_CENTER', null)
            ],
            [
                'nama' => 'Aplikasi Online Booking Pariwisata New Normal',
                'konten' => 'Aplikasi yang dapat mengelola jumlah wisatawan dan mempermudah wisatawan untu mendapatkan informasi destinasi wisata di era new normal',
                'gambar' => 'pariwisata/produk-pariwisata-1.png',
                'link' => env('PRODUK_ONLINE_BOOKING_PARAWISATA', null)
            ],
        ],
    ],
    'konten' => [
        'klien' =>
        [
            'judul' => 'Klien Kami',
            'deskripsi' => 'Berikut merupakan klien yang sudah menggunakan jasa kami',
            'konten' => [
                [
                    'judul' => 'Pemerintah Pusat',
                    'gambar' => [
                        'pemerintahan-pusat-1.png',
                        'pemerintahan-pusat-2.png',
                        'pemerintahan-pusat-3.png',
                        'pemerintahan-pusat-4.png',
                        'pemerintahan-pusat-5.png',
                        'pemerintahan-pusat-6.png',
                        'pemerintahan-pusat-7.png',
                        'pemerintahan-pusat-8.png',
                        'pemerintahan-pusat-9.png',
                        'pemerintahan-pusat-10.png',
                        'pemerintahan-pusat-11.png',
                        'pemerintahan-pusat-12.png',
                        'pemerintahan-pusat-13.png',
                        'pemerintahan-pusat-14.png',
                        'pemerintahan-pusat-15.png',
                        'pemerintahan-pusat-16.png',
                        'pemerintahan-pusat-17.png',
                        'pemerintahan-pusat-18.png',
                        'pemerintahan-pusat-19.png',
                        'pemerintahan-pusat-20.png',
                    ],
                ],
                [
                    'judul' => 'Pemerintah Daerah',
                    'gambar' => [
                        'pemerintahan-daerah-1.png',
                        'pemerintahan-daerah-2.png',
                        'pemerintahan-daerah-3.png',
                        'pemerintahan-daerah-4.png',
                        'pemerintahan-daerah-5.png',
                        'pemerintahan-daerah-6.png',
                        'pemerintahan-daerah-7.png',
                        'pemerintahan-daerah-8.png',
                        'pemerintahan-daerah-9.png',
                        'pemerintahan-daerah-10.png',
                        'pemerintahan-daerah-11.png',
                        'pemerintahan-daerah-12.png',
                        'pemerintahan-daerah-13.png',
                    ],
                ],
                [
                    'judul' => 'BLU, Swasta, Yayasan dan Lainnya',
                    'gambar' => [
                        'swasta-1.png',
                        'swasta-2.png',
                        'swasta-3.png',
                        'swasta-4.png',
                        'swasta-5.png',
                        'swasta-6.png',
                        'swasta-7.png',
                        'swasta-8.png',
                        'swasta-9.png',
                        'swasta-10.png',
                        'swasta-11.png',
                        'swasta-12.png',
                        'swasta-13.png',
                    ],
                ],
            ],
        ],
    ],
];
