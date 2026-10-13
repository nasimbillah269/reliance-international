@push('css')
<style>
    .reline-sidebar__item { background: var(--visanet-gray, #f4f4f4); border-radius: 20px; padding: 30px; margin-bottom: 30px; }
    .reline-sidebar__title { font-size: 22px; margin-bottom: 20px; }
    .reline-sidebar__search { display: flex; background: #fff; border-radius: 50px; overflow: hidden; }
    .reline-sidebar__search input { flex: 1; border: 0; padding: 14px 20px; outline: none; }
    .reline-sidebar__search button { border: 0; background: var(--visanet-base, #e10e3b); color: #fff; width: 54px; }
    .reline-sidebar__list li + li { margin-top: 10px; }
    .reline-sidebar__list a { display: flex; justify-content: space-between; color: var(--visanet-text, #555); }
    .reline-sidebar__list a:hover { color: var(--visanet-base, #e10e3b); }
    .reline-sidebar__post { display: flex; gap: 15px; align-items: center; }
    .reline-sidebar__post + .reline-sidebar__post { margin-top: 20px; }
    .reline-sidebar__post img { width: 75px; height: 75px; object-fit: cover; border-radius: 10px; }
    .reline-sidebar__post h4 { font-size: 16px; margin: 0 0 5px; line-height: 1.4; }
    .reline-sidebar__post span { font-size: 13px; }
    .reline-sidebar__item, .reline-sidebar__item p, .reline-sidebar__title, .reline-sidebar__list a, .reline-sidebar__post h4 a, .reline-sidebar__post span { color: #fff; }
    .reline-sidebar__list a:hover, .reline-sidebar__post h4 a:hover { color: var(--visanet-black3, #1d253a); }
</style>
@endpush
<aside class="reline-sidebar">
    <div class="reline-sidebar__item">
        <h3 class="reline-sidebar__title">Search</h3>
        <form action="{{route('blogSearch')}}" class="reline-sidebar__search">
            <input type="text" name="search" value="{{request()->search}}" placeholder="Search..." />
            <button type="submit" aria-label="search"><i class="icon-search"></i></button>
        </form>
    </div>
    @php($sidebarCtgs = App\Models\Attribute::where('type',6)->where('status','active')->where('parent_id',null)->orderBy('name')->limit(8)->get())
    @if($sidebarCtgs->count())
    <div class="reline-sidebar__item">
        <h3 class="reline-sidebar__title">Categories</h3>
        <ul class="reline-sidebar__list list-unstyled">
            @foreach($sidebarCtgs as $ctg)
            <li><a href="{{route('blogCategory',$ctg->slug?:'no-title')}}"><span>{{$ctg->name}}</span> <span>({{$ctg->activePosts()->count()}})</span></a></li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="reline-sidebar__item">
        <h3 class="reline-sidebar__title">Latest Posts</h3>
        @foreach(App\Models\Post::where('type',1)->where('status','active')->latest()->limit(4)->get() as $lPost)
        <div class="reline-sidebar__post">
            <a href="{{route('blogView',$lPost->slug?:'no-title')}}"><img src="{{asset($lPost->image())}}" alt="{{$lPost->name}}" /></a>
            <div>
                <h4><a href="{{route('blogView',$lPost->slug?:'no-title')}}">{{Str::limit($lPost->name, 50)}}</a></h4>
                <span><i class="icon-calendar"></i> {{$lPost->created_at->format('d M Y')}}</span>
            </div>
        </div>
        @endforeach
    </div>
</aside>
