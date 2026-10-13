@include(welcomeTheme().'layouts.pageHeader', ['title' => $title, 'banner' => $banner ?? null])

<section class="blog-page section-space">
    <div class="container">
        @if(!empty($introView))
        @include($introView)
        @endif
        <div class="row gutter-y-30">
            @if($withSidebar ?? false)
            <div class="col-lg-8">
                <div class="row gutter-y-30">
                    @forelse($posts as $post)
                    <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                        @include(welcomeTheme().'blogs.includes.blogGrid')
                    </div>
                    @empty
                    <div class="col-12"><p>No posts found.</p></div>
                    @endforelse
                    <div class="col-12">{{$posts->links(welcomeTheme().'blogs.pagination')}}</div>
                </div>
            </div>
            <div class="col-lg-4">
                @include(welcomeTheme().'blogs.includes.sideBar')
            </div>
            @else
            @forelse($posts as $post)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="{{($loop->index % 3 + 1) * 100}}">
                @include(welcomeTheme().'blogs.includes.blogGrid')
            </div>
            @empty
            <div class="col-12"><p>No posts found.</p></div>
            @endforelse
            <div class="col-12">{{$posts->links(welcomeTheme().'blogs.pagination')}}</div>
            @endif
        </div>
    </div>
</section><!-- /.blog-page -->
