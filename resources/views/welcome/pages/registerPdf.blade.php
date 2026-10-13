@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle('PDF View')}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{websiteTitle('PDF View')}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keywords" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('view_pdf')}}" />
<link rel="canonical" href="{{route('view_pdf')}}" />
@endsection @push('css')
<style></style>
@endpush @section('contents')

<div class="breadcrumb-area">
    <div class="container">
        <div class="title">
            <h1>PDF View</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>PDF View</li>
            </ul>
        </div>
    </div>
</div>

    <section id="team" class="team section-bg">
      <div class="container">

        <br>
            @if($pdf)
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="min-width: 200px;width: 200px;white-space: normal;background: #f1f1f1;">Name</th>
                                    <th style="min-width: 130px; width: 130px;white-space: normal;background: #f1f1f1;">Passport No</th>
                                    <th style="min-width: 150px; width: 150px;white-space: normal;background: #f1f1f1;">Nationality</th>
                                    <th style="min-width: 120px; width: 120px;white-space: normal;background: #f1f1f1;">Pin</th>
                                    <th style="min-width: 100px; width: 100px;white-space: normal;background: #f1f1f1;">Attachment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$pdf->name}}</td>
                                    <td>{{$pdf->passport_no}}</td>
                                    <td>{{$pdf->nationality}}</td>
                                    <td>{{$pdf->pin_no}}</td>
                                        @if($pdf->bannerFile)
                                        <td style="text-align: center;padding: 3px;">
                                            <a href="{{asset($pdf->bannerFile->file_url)}}" target="_blank"><img src="{{asset($pdf->bannerFile->image())}}" style="max-height: 40px;" ></a>
                                        </td>
                                        @else
                                        <td>
                                            <span>No PDf</span>
                                        </td>
                                        @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @else
            <div class="row g-3">
                <div class="col-md-4">
                    <a href="javascript:void(0)" class="mini-card card-hover hover-effect shadow-sm rounded">
                        <div class="card-content">
                            <h3 class="h5 card-title">Not Found</h3>
                        </div>
                    </a>
                </div>
            </div>
            @endif

      </div>
    </section>



@endsection @push('js') @endpush