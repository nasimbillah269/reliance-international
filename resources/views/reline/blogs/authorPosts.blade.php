@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle($author->name)}}</title>
@endsection @section('SEO')    
<meta name="title" property="og:title" content="{{websiteTitle($author->name)}}" />
        <meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
        <meta name="keywords" content="{{general()->meta_keyword}}" />
        <meta name="image" property="og:image" content="{{asset($author->image())}}" />
        <meta name="url" property="og:url" content="{{route('blogAuthor',[$author->id,Str::slug($author->name)])}}" />
        <link rel="canonical" href="{{route('blogAuthor',[$author->id,Str::slug($author->name)])}}">
@endsection @push('css')
<style>
</style>
@endpush 

@section('contents')
@include(welcomeTheme().'blogs.includes.listBody', ['title' => $author->name, 'withSidebar' => true])
@endsection
