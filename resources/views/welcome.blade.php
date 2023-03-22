@extends('layouts.front')

@section('title', 'Jual Kardus Box - Bimeta Karnusa')
@section('meta-keywords', 'Jual Kardus, Jual Kardus Bandung, Jual Kardus Box Bandung, Jual Kardus Box, Bimeta, Bimeta Karnusa, Pabrik Kardus di Bandung, Pabrik Kardus Indonesia, Pabrik Kardus')
@section('meta-description', 'Bimeta Karnusa Menjual Kardus Box sesuai ukuran dan custom yang anda inginkan, dengan tanpa minimal order.Serta menyediakan kardus ready stock dengan berbagai macam ukuran.')

@section('content')
<!--========== SWIPER SLIDER ==========-->
<div class="s-swiper js__swiper-one-item">
    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper">
        <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('{{asset('front/img/1920x1080/section banner 2.jpg')}}');">
            <div class="container g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <h3 class="g-font-size-35--xs g-font-size-50--sm g-font-size-50--md g-color--white">Selamat datang di Bimeta Karnusa !</h3>
                </div>
                <p class="g-font-size-22--xs g-font-size-22--md g-color--white g-margin-b-0--xs font-weight-bold">Kami khusus dalam memproduksi atau menjual kardus yang tahan lama dan dapat disesuaikan untuk berbagai industri dan kebutuhan anda.</p>
            </div>
        </div>
        <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('{{asset('front/img/1920x1080/cor.jpg')}}');">
            <div class="container g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <h3 class="g-font-size-35--xs g-font-size-50--sm g-font-size-50--md g-color--white">Apa Yang Kami Tawarkan ?</h3>
                </div>
                <p class="g-font-size-22--xs g-font-size-22--md g-color--white g-margin-b-0--xs font-weight-bold">Kami menawarkan atau menjual berbagai jenis kardus, termasuk kardus bergelombang, kardus pengiriman, dan kardus penyimpanan, semuanya dibuat dari bahan ramah lingkungan dan berkelanjutan.</p>
            </div>
        </div>
    </div>
    <!-- End Swiper Wrapper -->

    <!-- Arrows -->
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
    <!-- End Arrows -->

    <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
        <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
        <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Pelajari Lebih Lanjut</p>
    </a>
</div>
<!--========== END SWIPER SLIDER ==========-->
<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-text-center--xs g-margin-b-100--xs">
        <h2 class="g-font-size-32--xs g-font-size-36--md">Mengapa memilih Bimeta Karnusa ?</h2>
    </div>
    <div class="row g-margin-b-60--xs g-margin-b-70--md">
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                        <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Tepat Waktu</h3>
                    <p class="g-margin-b-0--xs">Kami Mengutamakan ketepatan waktu dalam pengiriman.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                        <i class="g-font-size-28--xs g-color--primary ti-settings"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">kualitas</h3>
                    <p class="g-margin-b-0--xs">Kami berkomitmen untuk memberikan kualitas atau spesifikasi kardus yang terbaik dan sesuai dengan kebutuhan packaging.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                        <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Gratis Pengiriman</h3>
                    <p class="g-margin-b-0--xs">Kami memberikan service Free delivery untuk wilayah Bandung Raya dengan ketentuan yang berlaku.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- // end row  -->
    <div class="row">
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                        <i class="g-font-size-28--xs g-color--primary ti-package"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Kemungkinan Tidak Terbatas</h3>
                    <p class="g-margin-b-0--xs">Dengan didukung tenaga kerja yang profesional dengan efisiensi produksi akan memberikan harga yang bersaing untuk anda.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                        <i class="g-font-size-28--xs g-color--primary ti-star"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Pemasaran Daring</h3>
                    <p class="g-margin-b-0--xs">Teknologi yang maju akan sangat membantu customer untuk menghemat waktu dan menghemat biaya dalam proses pemesanan box packaging anda.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                        <i class="g-font-size-28--xs g-color--primary ti-panel"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Daur Ulang</h3>
                    <p class="g-margin-b-0--xs">Kami menggunakan bahan baku yang di produksi dari recycled.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- // end row  -->
</div>
<!-- End Features -->
<!-- Culture -->
<section style="background: url({{asset('front/img/1920x1080/p6.jpg')}}) 20% 0 no-repeat fixed;">
    <div class="container g-position--overlay g-text-center--xs">
        <div class="g-padding-y-50--xs g-margin-t-100--xs g-margin-b-100--xs g-margin-b-250--md">
            <p class="g-font-size-22--xs g-font-size-30--sm g-color--white font-weight-bold">Tim kami akan bekerja sama dengan Anda untuk merancang dan memproduksi kardus kustom yang sesuai dengan kebutuhan dan persyaratan Anda. Apakah Anda mencari kardus sederhana atau desain yang lebih kompleks, kami memiliki pengalaman dan keahlian untuk memberikan yang Anda inginkan.</p>
        </div>
    </div>
</section>
<!-- End Culture -->
<!-- Portfolio Filter -->
<div class="container g-padding-y-80--xs">
    <div class="g-text-center--xs g-margin-b-35--xs">
        <h2 class="g-font-size-32--xs g-font-size-36--md">Produk Kami</h2>
    </div>
    <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--xsm">
        <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-80--xs g-margin-b-100--md">
            <div class="col-sm-5 g-hor-centered-row__col">
                <h3 class="g-font-size-26--xs g-font-size-30--sm g-margin-b-25--xs">Corrugated Box</h3>
                <p class="g-font-size-18--sm">Corrugated Box adalah salah satu jenis kemasan yang memiliki bagian bergelombang dan terbuat dari beberapa lembar kertas kraft liner dan kertas corrugated medium. Corrugated box memiliki tiga lapisan di dalamnya, yaitu fluting bagian luar, fluting bagian tengah dan fluting di bagian luar. Flute adalah lapisan bergelombang yang biasa terlihat pada lapisan dalam corrugated box.</p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 g-hor-centered-row__col">
                <img class="img-responsive" src="{{asset('front/img/mockups/cbox.jpeg')}}" alt="Mockup Image">
            </div>
        </div>
        <div class="row g-hor-centered-row--md g-row-col--5">
            <div class="col-sm-5 col-sm-push-7 g-hor-centered-row__col">
                <h3 class="g-font-size-26--xs g-font-size-30--sm g-margin-b-25--xs">Die Cut Custom Box</h3>
                <p class="g-font-size-18--sm">Die cut box adalah kotak karton bergelombang (kardus) yang dapat disesuaikan dan dirancang agar sesuai dengan bentuk, ukuran, atau kebutuhan apa pun. Kotak ini dinamakan die cut box karena dipotong dari lembaran polos karton bergelombang pada mesin yang dikenal dengan die press (pemotong mati).</p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-right--md">
                <img class="img-responsive" src="{{asset('front/img/mockups/custom-box.png')}}" alt="Mockup Image">
            </div>
        </div>
    </div>
    <div class="g-text-center--xs g-margin-b-40--xs">
        <a href="{{route('product')}}">Pelajari Lebih Lanjut</a>
    </div>

</div>
<!-- End Portfolio Filter -->
<!-- Testimonials -->
<div class="js__parallax-window" style="background: url('{{asset('front/img/1920x1080/bg-product.jpg')}}') 50% 0 no-repeat fixed;">
    <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">Testimoni</p>
        <div class="s-swiper js__swiper-testimonials">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper g-margin-b-50--xs">
                @foreach($testimonis as $testimoni)
                <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                    <div class="g-padding-x-20--xs g-padding-x-50--lg">
                        <div class="g-margin-b-40--xs">
                            <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>"{{$testimoni->testimoni}}"</i></p>
                        </div>
                        <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                        <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">{{$testimoni->pic}} / {{$testimoni->customer_name}}</h4>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- End Swipper Wrapper -->

            <!-- Arrows -->
            <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
            <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Clients -->
<div class="g-bg-color--sky-light">
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
</div>
<!-- End Clients -->
<!-- Feedback Form -->
<div class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-text-center--xs g-margin-b-60--xs">
        <h2 class="g-font-size-32--xs g-font-size-36--md">Hubungi Kami</h2>
        <p class="g-font-size-22--sm">Untuk informasi lebih lanjut tentang produk dan layanan kami, atau untuk melakukan pemesanan, silakan hubungi kami hari ini. Kami berharap dapat bekerja sama dengan Anda!</p>
    </div>
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
                    <a href="https://wa.me/+6285314708672" target="_blank"><img src="{{asset('front/img/WhatsAppButtonGreenLarge.svg')}}" alt="Chat on Whatsup" /></a>
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
                    <a href="https://wa.me/+6281222769991"><img src="{{asset('front/img/WhatsAppButtonGreenLarge.svg')}}" alt="Chat on Whatsup" /></a>
                </div>
            </div>
            <!-- End Speaker -->
        </div>
    </div>
</div>
<!-- End Feedback Form -->

<!-- Google Map -->
<section class="s-google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1712757470536!2d107.49882051537489!3d-6.870070269129074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e522ca515b25%3A0x10b22a9cee48b837!2sBimeta%20Karnusa.%20PT!5e0!3m2!1sen!2sid!4v1672599650752!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- End Google Map -->
@endsection