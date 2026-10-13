@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->imageFile?$page->image():general()->favicon())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}" />
@endsection @push('css')
<style></style>
@endpush @section('contents')

@include(welcomeTheme().'layouts.pageHeader', ['title' => $page->name, 'banner' => $page->bannerFile ? $page->banner() : null])
<div class="section-space">

    <section id="team" class="team section-bg">
      <div class="container">

        <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <style>
                        .formBox {
                            background-color: #af3226;
                            padding: 50px;
                            border-radius: 15px;
                        }
                        
                        label{
                            display: block;
                            width: 100%;
                            margin: 10px 0 5px;
                            color: #fff;
                        }
                        
                        .input-group {
                            margin-bottom: 10px;
                        }
                        
                        input.form-control{
                            
                        }
                        
                        select.form-control{
                            
                        }
                    </style>
                    <div class="formBox">
                        @if(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Success</strong>{{Session::get('error')}}.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="{{route('view_pdf')}}" >
                            
                            <div class="input-group">
                                <label>Passport Number *</label>
                                <input class="form-control" type="text" name="passport_no" value="{{request()->passport_no}}" placeholder="Passport No" required="" />
                            </div>
                            
                            <div class="input-group">
                                <label>Nationality / Citizenship *</label>
                                <select class="form-control" name="nationality" required="" >
                                    <option value="">Please Choose</option>
                                    @foreach($countries as $country)
                                    <option value="{{$country->name}}" {{request()->nationality==$country->name?'selected':''}}>{{strtoupper($country->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="input-group">
                                <label>Pin Code*</label>
                                <input class="form-control" type="text" name="pin_no" placeholder="Pin Code" value="{{request()->pin_no}}" required="" >
                            </div>
                            
                            <button type="submit" class="btn btn-light mnw-180">
                                <i class="hicon hicon-search-icon"></i>
                                <span> Submit</span>
                            </button>
                            <a href="{{route('pageView',$page->slug?:'no-title')}}" class="btn btn-info mnw-80" style="float:right;">Reset</a>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

      </div>
    </section>



</div>
@endsection @push('js') @endpush