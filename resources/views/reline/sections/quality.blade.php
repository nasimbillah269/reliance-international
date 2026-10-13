@push('css')
<style>
    .quality-compliance__image { position: relative; border-radius: 20px; overflow: hidden; height: 100%; min-height: 420px; background-size: cover; background-position: center; }
    .quality-compliance__badge { position: absolute; left: 30px; bottom: 30px; right: 30px; background: var(--visanet-base, #e50c37); color: #fff; border-radius: 15px; padding: 25px 30px; display: flex; gap: 18px; align-items: center; }
    .quality-compliance__badge i { font-size: 44px; }
    .quality-compliance__badge h4 { color: #fff; margin: 0; font-size: 20px; line-height: 1.4; }
    .quality-compliance__list { list-style: none; padding: 0; margin: 25px 0 0; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 15px 20px; }
    .quality-compliance__list li { display: flex; gap: 12px; align-items: center; font-weight: 600; color: #fff; background: var(--visanet-gray, #f4f4f4); border-radius: 10px; padding: 14px 18px; }
    .quality-compliance__list li i { color: var(--visanet-base, #e50c37); font-size: 18px; }
    @media (max-width: 575px) { .quality-compliance__list { grid-template-columns: 1fr; } }
</style>
@endpush
<section class="quality-compliance section-space">
    <div class="container">
        <div class="row gutter-y-50 align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                <div class="quality-compliance__image" style="background-image: url({{asset(assetLink().'/assets/images/resources/why-choose-2-1.jpg')}});">
                    <div class="quality-compliance__badge">
                        <i class="icon-completed-task"></i>
                        <h4>Built on trust, quality, and compliance.</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title">
                    <div class="sec-title__top" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                        <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                        <p class="sec-title__tagline">Quality & Compliance</p>
                    </div>
                    <h2 class="sec-title__title bw-split-in-right">Quality And Compliance Are At The Heart Of Everything We Do.</h2>
                </div>
                <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">At Reliance International, we are committed to delivering professional recruitment solutions through ethical business practices, transparent communication, and a strong focus on client satisfaction. We aim to understand each employer’s workforce requirements and support the recruitment process with careful candidate sourcing, screening, and documentation.</p>
                <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">We operate in accordance with applicable laws, regulations, and industry standards. We believe sustainable business relationships are built on trust, quality, and compliance, and we are dedicated to maintaining the highest standards for both employers and candidates.</p>
                <ul class="quality-compliance__list" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                    <li><i class="icon-checked"></i> Accuracy</li>
                    <li><i class="icon-checked"></i> Professionalism</li>
                    <li><i class="icon-checked"></i> Confidentiality</li>
                    <li><i class="icon-checked"></i> Respect at every stage</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- /.quality-compliance -->
