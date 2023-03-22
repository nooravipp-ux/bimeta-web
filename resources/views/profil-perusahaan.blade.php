@extends('layouts.front')

@section('title', 'Profil Perusahaan - Bimeta Karnusa')
@section('meta-keywords', 'Bimeta, Bimeta Karnusa, Pabrik Kardus Bandung, Pabrik Kardus, Jual Kadus Box, jual  Corrugated Box, Custom Kardus Box, Produk Bimeta Karnusa, Portofolio Bimeta Karnusa, Jual Corrugated Box, Corrugated Box, Custom Kardus Box, Die Cut Custom Box')
@section('meta-description', 'Bimeta Karnusa adalah sebuah perusahaan yang beralamat di Jl Batu Jajar No 98, tepatnya di Kota atau Kabupaten Bandung Barat yang merupakan salah satu kota kabupaten penting yang terletak di Provinsi Jawa Barat.')

@section('content')
<!--========== PROMO BLOCK ==========-->
<div class="g-bg-position--center js__parallax-window" style="background: url({{asset('front/img/1920x1080/section-banner-4.jpg')}}) 50% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
        <h3 class="g-font-size-40--xs g-font-size-50--sm g-font-size-50--md g-color--white g-letter-spacing--1">Tentang Bimeta Karnusa</h3>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->
<div class="g-hor-divider__dashed--sky-light">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="row">
            <div class="col-md-5 col-md-push-7 g-margin-t-0--xs g-margin-t-20--lg g-margin-b-60--xs g-margin-b-0--lg">
                <div class="g-margin-b-45--xs">
                    <p>PT. Bimeta Karnusa adalah sebuah perusahaan yang beralamat di Jl Batu Jajar No 98, tepatnya di Kota atau Kabupaten Bandung Barat yang merupakan salah satu kota kabupaten penting yang terletak di Provinsi Jawa Barat.</p>
                    <p>Kami menyediakan berbagai macam layanan pembuatan karton box mulai dari skala kecil sampai sekala besar . Untuk design kami menyediakan layanan kustomisasi bentuk,cetakan dan ukuran .</p>
                </div>
            </div>
            <div class="col-md-6 col-md-pull-5">
                <!-- Masonry Grid -->
                <div class="row g-row-col--5 js__masonry">
                    <div class="col-xs-6 col-sm-6 col-md-1 js__masonry-sizer"></div>
                    <div class="col-xs-6 g-full-width--xs g-margin-b-10--xs js__masonry-item">
                        <img class="" src="{{asset('front/img/1920x1080/Paralax 4.jpg')}}" width="600" height="400" alt="Image">
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
    </div>
</div>
@endsection