@if ($paginator->hasPages())
<div class="post-pagination" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
    @if (!$paginator->onFirstPage())
    <a href="{{ $paginator->previousPageUrl() }}" class="post-pagination__icon" rel="prev"><i class="icon-arrow-left"></i></a>
    @endif
    @foreach ($elements as $element)
        @if (is_string($element))
        <span class="post-pagination__btn">{{ $element }}</span>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
            <a href="{{ $url }}" class="post-pagination__btn {{ $page == $paginator->currentPage() ? 'active' : '' }}">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a>
            @endforeach
        @endif
    @endforeach
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" class="post-pagination__icon" rel="next"><i class="icon-arrow-right"></i></a>
    @endif
</div>
@endif
