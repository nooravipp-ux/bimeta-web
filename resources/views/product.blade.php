@extends('layouts.front')

@section('title', 'Product & Portofolio - Bimeta Karnusa')
@section('meta-keywords', 'Bimeta, Bimeta Karnusa, Pabrik Kardus Bandung, Pabrik Kardus, Jual Kadus Box, jual Corrugated Box, Custom Kardus Box, Produk Bimeta Karnusa, Portofolio Bimeta Karnusa, Jual Corrugated Box, Corrugated Box, Custom Kardus Box, Die Cut Custom Box')
@section('meta-description', 'Bimeta Karnusa Memproduksi Berbagai Macam Jenis Kardus Yang Dibutuhkan Oleh Berbagai Customer, Baik Dalam Jumlah Skala Kecil Maupun Dalam Skala Besar. Dengan Mesin Produksi dan Pendukung Kami Yang Lengkap .')

@section('content')
<!--========== PROMO BLOCK ==========-->
<div class="g-bg-color--sky-light">
    <div class="container g-padding-y-125--xs">
        <div class="g-padding-y-50--xs">
            <h1 class="g-font-size-35--xs g-font-size-55--sm g-font-size-50--lg">Produk & Portofolio</h1>
            <p class="g-font-size-22--xs g-font-size-24--md g-margin-b-0--xs">Kami bangga telah diakui oleh beberapa pelanggan untuk komitmen kami terhadap kualitas, dan kami selalu mencari cara untuk meningkatkan produk dan layanan kami.</p>
        </div>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->

<!--========== PAGE CONTENT ==========-->
<!-- Portfolio Filter -->
<div class="container g-padding-y-100--xs">
    <div class="s-portfolio">
        <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
            <div data-filter="*" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">Show All</div>
            <div data-filter=".graphic" class="s-portfolio__filter-v1-item cbp-filter-item">Core Product</div>
            <div data-filter=".logos" class="s-portfolio__filter-v1-item cbp-filter-item">Product Portofolio</div>
        </div>
    </div>
</div>
<!-- End Portfolio Filter -->

<!-- Portfolio Gallery -->
<div class="container">
    <div id="js__grid-portfolio-gallery" class="cbp">
        <!-- Item -->
        @foreach($dataProduct as $dp)
        <div class="s-portfolio__item cbp-item logos motion">
            <div class="s-portfolio__img-effect">
                <img src="{{asset('front/img/products/'.$dp->product_img_1)}}" alt="{{$dp->product_name}}">
            </div>
            <div class="s-portfolio__caption-hover--cc">
                <div class="g-margin-b-25--xs">
                    <h2 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">{{$dp->product_name}}</h2>
                    <p class="g-color--white-opacity">by Bimeta Karnusa</p>
                </div>
                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                    <li>
                        <a href="{{asset('front/img/products/'.$dp->product_img_1)}}" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="{{$dp->product_name}}">
                            <i class="ti-fullscreen"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                            <i class="ti-link"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
    <!-- End Portfolio Gallery -->
</div>
<!-- End Portfolio -->

<!-- Clients -->
<div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
    <!-- Swiper Clients -->
    <div class="s-swiper js__swiper-clients">
        <div class="swiper-wrapper">
            @foreach($clients as $client)
            <div class="swiper-slide">
                <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                    <img class="s-clients-v1" src="{{asset('front/img/customers/'.$client->logo)}}" alt="{{$client->name}}">
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End Swiper Clients -->
</div>
<!-- End Clients -->
<!--========== END PAGE CONTENT ==========-->
@endsection