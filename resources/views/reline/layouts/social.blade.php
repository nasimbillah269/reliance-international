@php($wrap = $wrap ?? true)
@if($wrap)<div class="social-links">@endif
@foreach([
    'facebook_link' => ['fab fa-facebook-f', 'Facebook'],
    'twitter_link' => ['fab fa-twitter', 'X'],
    'linkedin_link' => ['fab fa-linkedin-in', 'Linkedin'],
    'instagram_link' => ['fab fa-instagram', 'Instagram'],
    'youtube_link' => ['fab fa-youtube', 'Youtube'],
] as $field => $icon)
@if(general()->$field)
<a href="{{general()->$field}}" target="_blank">
    <span class="social-links__icon">
        <i class="{{$icon[0]}}" aria-hidden="true"></i>
        <span class="sr-only">{{$icon[1]}}</span>
    </span>
</a>
@endif
@endforeach
@if($wrap)</div>@endif
