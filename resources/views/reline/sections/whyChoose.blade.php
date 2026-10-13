@push('css')
<style>
    .why-choose__points { list-style: none; padding: 0; margin: 25px 0 30px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px 20px; }
    .why-choose__points li { display: flex; gap: 10px; align-items: flex-start; font-weight: 500; color: var(--visanet-black3, #1d253a); }
    .why-choose__points li i { color: var(--visanet-base, #e50c37); margin-top: 4px; }
    @media (max-width: 575px) { .why-choose__points { grid-template-columns: 1fr; } }
</style>
@endpush
<section class="why-choose section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-xl-6">
                <div class="why-choose__content">
                    <div class="sec-title">
                        <div class="sec-title__top" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                            <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                            <p class="sec-title__tagline">Why Choose Us</p>
                        </div>
                        <h2 class="sec-title__title bw-split-in-right">Your Trusted Recruitment Partner.</h2>
                    </div>
                    <p class="why-choose__text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">At Reliance International, we understand that hiring the right workforce is critical to business success. We focus on ethical recruitment practices, professional candidate sourcing, and industry-specific workforce solutions with transparent communication and a commitment to long-term business partnerships.</p>
                    <div class="why-choose__list">
                        <div class="why-choose__item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                            <div class="why-choose__item__icon-box">
                                <span class="why-choose__item__icon"><i class="icon-completed-task"></i></span>
                            </div>
                            <div class="why-choose__item__content">
                                <h3 class="why-choose__item__title">Ethical</h3>
                                <p class="why-choose__item__text">Recruitment practices.</p>
                            </div>
                        </div>
                        <div class="why-choose__item active" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
                            <div class="why-choose__item__icon-box">
                                <span class="why-choose__item__icon"><i class="icon-immigration-officer"></i></span>
                            </div>
                            <div class="why-choose__item__content">
                                <h3 class="why-choose__item__title">Professional</h3>
                                <p class="why-choose__item__text">Candidate sourcing.</p>
                            </div>
                        </div>
                        <div class="why-choose__item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="300">
                            <div class="why-choose__item__icon-box">
                                <span class="why-choose__item__icon"><i class="icon-supportive"></i></span>
                            </div>
                            <div class="why-choose__item__content">
                                <h3 class="why-choose__item__title">Tailored</h3>
                                <p class="why-choose__item__text">Industry solutions.</p>
                            </div>
                        </div>
                    </div><!-- /.why-choose__list -->
                    <p class="why-choose__text why-choose__text--2" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Employers trust us because we prioritize:</p>
                    <ul class="why-choose__points" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                        <li><i class="icon-checked"></i> Integrity</li>
                        <li><i class="icon-checked"></i> Quality candidate selection</li>
                        <li><i class="icon-checked"></i> Compliance with ethical recruitment standards</li>
                        <li><i class="icon-checked"></i> Personalized recruitment solutions for various industries</li>
                        <li><i class="icon-checked"></i> Dedicated support throughout the recruitment process</li>
                        <li><i class="icon-checked"></i> Transparent communication</li>
                    </ul>
                    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                        <a href="{{route('pageView','contact-us')}}" class="visanet-btn">
                            <span class="visanet-btn__icon-box">
                                <span class="visanet-btn__icon"><span><i class="icon-arrow-right-3"></i></span></span>
                            </span>
                            <span class="visanet-btn__text">Contact Us</span>
                        </a>
                    </div>
                </div><!-- /.why-choose__content -->
            </div>
            <div class="col-xl-6">
                <div class="why-choose__image">
                    <div class="why-choose__image__inner bw-img-anim-right" style="background-image: url({{asset(assetLink().'/assets/images/resources/why-choose-1-1.jpg')}});"></div>
                    <div class="why-choose__box" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                        <img src="{{asset(assetLink().'/assets/images/resources/why-choose-1-2.jpg')}}" alt="why choose" class="why-choose__box__image" />
                        <div class="why-choose__box__inner">
                            <p class="why-choose__box__text">We don’t just fill vacancies; we aim to build relationships based on trust, reliability, and consistent service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.why-choose -->
