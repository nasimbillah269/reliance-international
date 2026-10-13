@php
$coreValues = [
    ['icon' => 'icon-checked', 'title' => 'Integrity', 'text' => 'We conduct business with honesty and transparency.'],
    ['icon' => 'icon-immigration-officer', 'title' => 'Professionalism', 'text' => 'Delivering efficient and respectful service.'],
    ['icon' => 'icon-satisfaction', 'title' => 'Quality', 'text' => 'Ensuring we identify and present candidates who meet client requirements.'],
    ['icon' => 'icon-completed-task', 'title' => 'Compliance', 'text' => 'Supporting lawful and ethical recruitment practices.'],
    ['icon' => 'icon-brainstorming', 'title' => 'Partnership', 'text' => 'Believing in trust and shared success.'],
    ['icon' => 'icon-supportive', 'title' => 'Commitment', 'text' => 'Providing dedicated service to employers and candidates.'],
];
@endphp
@push('css')
<style>
    .mission-vision { background-color: var(--visanet-gray, #f4f4f4); }
    .mission-vision > .container > .sec-title .sec-title__title, .mission-vision > .container > .sec-title .sec-title__tagline, .mission-vision > .container > .sec-title .sec-title__icon { color: #fff; }
    .mission-vision__card { height: 100%; background: #fff; border-radius: 20px; padding: 40px; position: relative; overflow: hidden; box-shadow: 0 10px 40px rgba(29, 37, 58, .06); }
    .mission-vision__card::before { content: ""; position: absolute; left: 0; top: 0; width: 5px; height: 100%; background: var(--visanet-base, #e50c37); }
    .mission-vision__card__icon { width: 70px; height: 70px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 32px; color: #fff; background: var(--visanet-base, #e50c37); margin-bottom: 20px; }
    .mission-vision__card__title { font-size: 28px; margin-bottom: 15px; }
    .mission-vision__card p:last-child { margin-bottom: 0; }
    .mission-vision__value { height: 100%; background: #fff; border-radius: 20px; padding: 30px; text-align: center; transition: all .4s; }
    .mission-vision__value:hover { background: var(--visanet-black3, #1d253a); transform: translateY(-5px); }
    .mission-vision__value:hover h4, .mission-vision__value:hover p { color: #fff; }
    .mission-vision__value__icon { font-size: 42px; color: var(--visanet-base, #e50c37); display: block; margin-bottom: 15px; }
    .mission-vision__value h4 { font-size: 20px; margin-bottom: 8px; transition: color .4s; }
    .mission-vision__value p { margin: 0; font-size: 15px; transition: color .4s; }
    .mission-vision__promise { margin-top: 60px; background: var(--visanet-black3, #1d253a); border-radius: 20px; padding: 50px; color: #fff; display: flex; gap: 30px; align-items: center; }
    .mission-vision__promise__icon { flex-shrink: 0; width: 90px; height: 90px; border-radius: 50%; background: var(--visanet-base, #e50c37); display: inline-flex; align-items: center; justify-content: center; font-size: 40px; }
    .mission-vision__promise h3 { color: #fff; font-size: 28px; margin-bottom: 10px; }
    .mission-vision__promise p { color: rgba(255,255,255,.8); margin: 0; }
    @media (max-width: 767px) { .mission-vision__promise { flex-direction: column; text-align: center; padding: 35px 25px; } .mission-vision__card { padding: 30px 25px; } }
</style>
@endpush
<section class="mission-vision section-space">
    <div class="container">
        <div class="sec-title sec-title--center">
            <div class="sec-title__top" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                <p class="sec-title__tagline">Mission & Vision</p>
                <span class="sec-title__icon sec-title__icon--right"><i class="icon-airplane-2"></i></span>
            </div>
            <h2 class="sec-title__title bw-split-in-right">A Reliable Bridge Between Global <br /> Businesses And Bangladesh’s Talent.</h2>
        </div>
        <div class="row gutter-y-30">
            <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                <div class="mission-vision__card">
                    <span class="mission-vision__card__icon"><i class="icon-completed-task"></i></span>
                    <h3 class="mission-vision__card__title">Our Mission</h3>
                    <p>At Reliance International, our mission is to connect global employers with qualified, reliable, and motivated professionals from Bangladesh through ethical, transparent, and efficient recruitment solutions.</p>
                    <p>We are committed to understanding each employer’s workforce needs and providing candidates who meet high standards of professionalism and skill. By maintaining a responsible recruitment process and supporting both employers and candidates, we aim to build long-term partnerships based on trust, quality, and mutual success.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
                <div class="mission-vision__card">
                    <span class="mission-vision__card__icon"><i class="icon-place"></i></span>
                    <h3 class="mission-vision__card__title">Our Vision</h3>
                    <p>Our vision is to become one of the world’s most trusted international recruitment and workforce solutions providers, recognized for excellence, integrity, and sustainable partnerships.</p>
                    <p>We aspire to create meaningful opportunities for skilled professionals from Bangladesh while helping employers worldwide build productive and diverse workforces. Through innovation, continuous improvement, and ethical recruitment practices, we aim to contribute to global workforce development and become a preferred recruitment partner across Europe, the Middle East, and other international markets.</p>
                </div>
            </div>
        </div>

        <div class="sec-title sec-title--center mt-5 pt-4">
            <div class="sec-title__top" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                <p class="sec-title__tagline">Our Core Values</p>
                <span class="sec-title__icon sec-title__icon--right"><i class="icon-airplane-2"></i></span>
            </div>
        </div>
        <div class="row gutter-y-30">
            @foreach($coreValues as $value)
            <div class="col-xl-2 col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="{{($loop->index % 3 + 1) * 100}}">
                <div class="mission-vision__value">
                    <span class="mission-vision__value__icon"><i class="{{$value['icon']}}"></i></span>
                    <h4>{{$value['title']}}</h4>
                    <p>{{$value['text']}}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mission-vision__promise" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
            <span class="mission-vision__promise__icon"><i class="icon-satisfaction"></i></span>
            <div>
                <h3>Our Promise</h3>
                <p>We are dedicated to providing professional recruitment solutions that create value for employers while opening global career opportunities for qualified professionals. Our goal is to be a reliable bridge between global businesses and Bangladesh’s talented workforce through responsible and ethical recruitment.</p>
            </div>
        </div>
    </div>
</section><!-- /.mission-vision -->
