@php
$trainingFocus = [
    ['title' => 'Workplace Orientation', 'text' => 'Basic workplace orientation for a smooth start abroad.'],
    ['title' => 'Health & Safety', 'text' => 'Health and safety awareness for every work environment.'],
    ['title' => 'Industry-Specific Skills', 'text' => 'Skills preparation for construction, manufacturing, hospitality, and logistics.'],
    ['title' => 'Interview Preparation', 'text' => 'Preparing candidates to present themselves with confidence.'],
    ['title' => 'Professional Communication', 'text' => 'Communication skills for the modern workplace.'],
    ['title' => 'Teamwork & Ethics', 'text' => 'Teamwork and workplace ethics that employers value.'],
    ['title' => 'Workplace English', 'text' => 'Basic English communication for the workplace.'],
    ['title' => 'Employment Readiness', 'text' => 'Document guidance and employment readiness support.'],
];
@endphp
<section class="training-two section-space">
    <div class="container">
        <div class="training-two__top">
            <div class="row gutter-y-40 align-items-end">
                <div class="col-lg-8">
                    <div class="sec-title">
                        <div class="sec-title__top" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                            <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                            <p class="sec-title__tagline">Training & Skill Development</p>
                        </div>
                        <h2 class="sec-title__title bw-split-in-right">Building A Skilled Workforce <br /> For Global Employers.</h2>
                    </div>
                    <p class="mb-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">We prepare workers with practical skills and workplace knowledge required by employers in construction, manufacturing, hospitality, logistics, and other industries. We are committed to ethical recruitment practices and continuous skill development, helping create long-term value for both employers and employees.</p>
                </div>
                <div class="col-lg-4">
                    <div class="training-two__custom-nav custom-nav"></div>
                </div>
            </div>
        </div><!-- /.training-two__top -->
        <div class="training-two__carousel visanet-owl__carousel visanet-owl__carousel--with-shadow visanet-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
            "items": 1,
            "margin": 30,
            "loop": true,
            "smartSpeed": 700,
            "nav": true,
            "dots": false,
            "autoplay": true,
            "navContainer": ".training-two__custom-nav",
            "navText": ["<i class=\"icon-arrow-left\"></i>","<i class=\"icon-arrow-right\"></i>"],
            "responsive": {
                "0": { "items": 1 },
                "768": { "items": 2 },
                "992": { "items": 3 },
                "1200": { "items": 4 }
            }
        }'>
            @foreach($trainingFocus as $item)
            <div class="item">
                <div class="training-card-two">
                    <div class="training-card-two__content">
                        <div class="training-card-two__image">
                            <div class="training-card-two__image__box">
                                <img src="{{asset(assetLink().'/assets/images/training/training-2-'.($loop->index + 1).'.jpg')}}" alt="{{$item['title']}}" />
                            </div>
                            <h3 class="training-card-two__number"><span></span></h3>
                        </div>
                        <div class="training-card-two__inner">
                            <h3 class="training-card-two__title"><a href="{{route('pageView','our-services')}}">{{$item['title']}}</a></h3>
                            <p class="training-card-two__text">{{$item['text']}}</p>
                        </div>
                    </div>
                    <a href="{{route('pageView','our-services')}}" class="training-card-two__btn">
                        <span class="training-card-two__btn__icon"><i class="icon-arrow-right-up"></i></span>
                    </a>
                </div><!-- /.training-card-two -->
            </div>
            @endforeach
        </div><!-- /.training-two__carousel -->
    </div>
</section><!-- /.training-two -->
