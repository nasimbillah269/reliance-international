@push('css')
<style>
    .reline-cta { position: relative; padding: 110px 0; overflow: hidden; }
    .reline-cta__bg { position: absolute; inset: 0; background-size: cover; background-position: center; }
    .reline-cta__bg::after { content: ""; position: absolute; inset: 0; background: rgba(var(--visanet-black3-rgb, 29, 37, 58), .85); }
    .reline-cta .container { position: relative; z-index: 1; }
    .reline-cta__title { color: #fff; font-size: 42px; margin-bottom: 15px; }
    .reline-cta__text { color: rgba(255,255,255,.8); max-width: 780px; margin: 0 auto 35px; font-size: 17px; }
    @media (max-width: 767px) { .reline-cta { padding: 80px 0; } .reline-cta__title { font-size: 30px; } }
</style>
@endpush
<section class="reline-cta text-center">
    <div class="reline-cta__bg visanet-jarallax" data-jarallax="" data-speed="0.3" style="background-image: url({{asset(assetLink().'/assets/images/backgrounds/video-bg-1-1.jpg')}});"></div>
    <div class="container">
        <h2 class="reline-cta__title" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Looking For Qualified Workers?</h2>
        <p class="reline-cta__text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Whether you’re hiring skilled, semi-skilled, or general workers, Reliance International is committed to helping you identify candidates who meet your workforce requirements while supporting a transparent and professional recruitment process. Contact us today to discuss your needs.</p>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
            <a href="{{route('pageView','contact-us')}}" class="visanet-btn">
                <span class="visanet-btn__icon-box">
                    <span class="visanet-btn__icon"><span><i class="icon-arrow-right-3"></i></span></span>
                </span>
                <span class="visanet-btn__text">Contact Us Today</span>
            </a>
        </div>
    </div>
</section><!-- /.reline-cta -->
