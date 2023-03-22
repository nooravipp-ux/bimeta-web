@extends('layouts.front')

@section('title','Hubungi Kami - Bimeta Karnusa')
@section('meta-keywords', 'Bimeta, Bimeta Karnusa, Pabrik Kardus Bandung, Pabrik Kardus,Jual Kardus , Jual Kadus Box, Jual Kardus Bandung, Alamat Bimeta Karnusa')
@section('meta-description', 'Kami Melayani Pembelian Pribadi, UMKM, Perusahaan dan Pemerintah . Hubungi Team Sales dan Marketing Kami Untuk Mengetahui Lebih Lanjut mengenai Produk dan Pemesanan')

@section('content')
<!--========== PROMO BLOCK ==========-->
<div class="g-bg-position--center js__parallax-window" style="background: url({{asset('front/img/1920x1080/contact-bg.jpg')}}) 80% 0 no-repeat fixed;">
    <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
        <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Hubungi Kami</h1>
        <p class="g-font-size-22--xs g-font-size-22--md g-color--white g-margin-b-0--xs font-weight-bold">Untuk informasi lebih lanjut tentang produk dan layanan kami, atau untuk melakukan pemesanan, silakan hubungi kami hari ini. Kami berharap dapat bekerja sama dengan Anda!</p>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->

<!--========== PAGE CONTENT ==========-->
<!-- Speakers -->
<div class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="row g-overflow--hidden">
        <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
            <!-- Speaker -->
            <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                <img class="img-responsive g-width-100-percent--xs" src="{{asset('front/img/400x400/profile2.png')}}" alt="Image">
                <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                    <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                        <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">Agus Yusuf</h4>
                    </div>
                    <p class="g-font-weight--700">Sales & Marketing</p>
                    <a href="https://wa.me/+6285314708672" target="_blank"><img src="{{asset('front/img/WhatsAppButtonGreenLarge.svg')}}" alt="Chat on Whatsup"/></a>
                </div>
            </div>
            <!-- End Speaker -->
        </div>
        <div class="col-xs-6 g-full-width--xs">
            <!-- Speaker -->
            <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                <img class="img-responsive g-width-100-percent--xs" src="{{asset('front/img/400x400/profile2.png')}}" alt="Image">
                <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                    <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                        <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">dani Ramdani</h4>
                    </div>
                    <p class="g-font-weight--700">Sales & Marketing</p>
                    <a href="https://wa.me/+6281222769991"><img src="{{asset('front/img/WhatsAppButtonGreenLarge.svg')}}" alt="Chat on Whatsup"/></a>
                </div>
            </div>
            <!-- End Speaker -->
        </div>
    </div>
</div>
<!-- End Speakers -->

<!-- Feedback Form -->
<div class="g-position--relative g-bg-color--dark-light">
    <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Hubungi Kami</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Untuk Pemesanan</h2>
        </div>
        <div class="row g-row-col--5 g-margin-b-80--xs">
            <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                <div class="g-text-center--xs">
                    <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Email</h4>
                    <p class="g-color--white-opacity">bimetabox@gmail.com</p>
                </div>
            </div>
            <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                <div class="g-text-center--xs">
                    <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-map-alt"></i>
                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Alamat</h4>
                    <p class="g-color--white-opacity">Jl. Raya Batujajar No.98, Cimareme, Kec. Ngamprah, Kabupaten Bandung Barat, Jawa Barat 40552</p>
                </div>
            </div>
            <div class="col-xs-4 g-full-width--xs">
                <div class="g-text-center--xs">
                    <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Hubungi</h4>
                    <p class="g-color--white-opacity">022-6864277</p>
                </div>
            </div>
        </div>
        <form class="center-block g-width-500--sm g-width-550--md" method="post" action="{{route('message.store')}}">
            @csrf
            <div class="g-margin-b-30--xs">
                <input type="text" class="form-control s-form-v3__input" placeholder="* Name" name="nama">
            </div>
            <div class="row g-row-col-5 g-margin-b-50--xs">
                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                    <input type="email" class="form-control s-form-v3__input" placeholder="* Email" name="email">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control s-form-v3__input" placeholder="* Phone" name="no_telp">
                </div>
            </div>
            <div class="g-margin-b-80--xs">
                <textarea class="form-control s-form-v3__input" rows="5" placeholder="* Your message" name="pesan"></textarea>
            </div>
            <div class="g-text-center--xs">
                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
            </div>
        </form>
    </div>
    <img class="s-mockup-v2" src="{{asset('front/img/mockups/pencil-01.png')}}" alt="Mockup Image">
</div>
<!-- End Feedback Form -->
<!--========== END PAGE CONTENT ==========-->
@endsection  