@include(welcomeTheme().'layouts.pageHeader', ['title' => $title, 'banner' => $banner ?? null])

<section class="visa-page section-space">
    <div class="container">
        @if(!empty($intro))
        <div class="page-content mb-5">{!! $intro !!}</div>
        @endif
        <div class="row gutter-y-30">
            @forelse($services as $service)
            <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="{{($loop->index % 3 + 1) * 100}}">
                @include(welcomeTheme().'services.includes.serviceGrid')
            </div>
            @empty
            <div class="col-12"><p>No services found.</p></div>
            @endforelse
            <div class="col-12">{{$services->links(welcomeTheme().'blogs.pagination')}}</div>
        </div>
    </div>
</section><!-- /.visa-page -->
