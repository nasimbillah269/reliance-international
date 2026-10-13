@php
$regions = [
    ['name' => 'Europe', 'flag' => 'Germany', 'countries' => ['Germany', 'Croatia', 'Slovenia', 'Bosnia-Herzegovina' => 'Bosnia and Herzegovina', 'Serbia', 'Romania', 'Hungary', 'Poland', 'Slovakia', 'Czech-Republic' => 'Czech Republic', 'Lithuania', 'Latvia', 'Estonia']],
    ['name' => 'Middle East', 'flag' => 'United-Arab-Emirates', 'countries' => ['United-Arab-Emirates' => 'UAE', 'Saudi-Arabia' => 'Saudi Arabia', 'Qatar', 'Kuwait', 'Bahrain', 'Oman']],
    ['name' => 'North America', 'flag' => 'Canada', 'countries' => ['Canada', 'United-States-of-America' => 'United States']],
    ['name' => 'Asia', 'flag' => 'Japan', 'countries' => ['Japan', 'Korea-South' => 'South Korea', 'Malaysia', 'Singapore', 'Brunei', 'Maldives']],
];
@endphp
@push('css')
<style>
    .countries-two__flags { display: flex; flex-wrap: wrap; gap: 10px 14px; margin: 0; padding: 0; list-style: none; }
    .countries-two__flags li { display: inline-flex; align-items: center; gap: 7px; font-size: 15px; font-weight: 500; color: var(--visanet-black3, #1d253a); }
    .countries-two__flags img { width: 26px; height: 18px; object-fit: cover; border-radius: 3px; box-shadow: 0 0 0 1px rgba(0,0,0,.08); }
    .countries-two__card .countries-two__flag { width: 70px; height: 70px; object-fit: cover; border-radius: 50%; }
</style>
@endpush
<section class="countries-two section-space">
    <div class="container">
        <div class="sec-title sec-title--center">
            <div class="sec-title__top" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                <p class="sec-title__tagline">Countries We Serve</p>
                <span class="sec-title__icon sec-title__icon--right"><i class="icon-airplane-2"></i></span>
            </div>
            <h2 class="sec-title__title bw-split-in-right">Connecting Global Employers With <br /> Skilled Workers From Bangladesh.</h2>
        </div>
        <p class="text-center mx-auto mb-5" style="max-width: 900px;" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
            At Reliance International, we connect global employers with skilled, semi-skilled, and general workers from Bangladesh, building long-term partnerships across multiple regions.
        </p>
        <div class="row gutter-y-30">
            @foreach($regions as $region)
            <div class="col-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                <div class="countries-two__card">
                    <div class="row gutter-y-25 align-items-center">
                        <div class="col-lg-4">
                            <div class="countries-two__left">
                                <div class="countries-two__left__left">
                                    <img src="{{asset('flag/flag-of-'.$region['flag'].'.png')}}" alt="{{$region['name']}}" class="countries-two__flag" />
                                    <p class="countries-two__label">Recruiting <br /> For</p>
                                </div>
                                <h3 class="countries-two__name">{{$region['name']}}</h3>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <ul class="countries-two__flags">
                                @foreach($region['countries'] as $file => $label)
                                @php($file = is_int($file) ? $label : $file)
                                <li><img src="{{asset('flag/flag-of-'.$file.'.png')}}" alt="{{$label}}" /> {{$label}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div><!-- /.countries-two__card -->
            </div>
            @endforeach
        </div>
        <p class="text-center mx-auto mt-5 mb-0" style="max-width: 900px;" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
            We continuously seek to expand our global network by developing partnerships with reputable employers and recruitment organizations. Our objective is to provide responsible workforce solutions that meet employer requirements while promoting ethical recruitment, professional service, and long-term business relationships.
        </p>
    </div>
</section><!-- /.countries-two -->
