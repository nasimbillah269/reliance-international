@extends('admin.layouts.app') @section('title')
<title>Passport Register Edit - {{general()->title}} | {{general()->subtitle}}</title>
@endsection @push('css')

<style type="text/css">
    .catagorydiv {
        max-height: 300px;
        overflow: auto;
    }
    .catagorydiv ul {
        padding-left: 20px;
    }
    .catagorydiv ul li {
        list-style: none;
    }
</style>
@endpush @section('contents')

<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Passport Register Edit</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
                    <li class="breadcrumb-item active">Passport Register Edit</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
        <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-outline-primary" href="{{route('admin.projects')}}">BACK</a>
            @isset(json_decode(Auth::user()->permission->permission, true)['pages']['add'])
            <a class="btn btn-outline-primary" href="{{route('admin.projectsAction','create')}}" onclick="return confirm('Are You Want To New Project?')">Add Register</a>
            @endisset
            <a class="btn btn-outline-primary reloadPage" href="javascript:void(0)">
                <i class="fa-solid fa-rotate"></i>
            </a>
        </div>
    </div>
</div>

<div class="content-body">
    <!-- Basic Elements start -->
    <section class="basic-elements">
        @include('admin.alerts')
        <form action="{{route('admin.projectsAction',['update',$register->id])}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card">
                <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                    <h4 class="card-title">Project Edit </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Personal Information</h3><hr>
                                <div class="row form-group">
                                    <label for="name" class="col-md-4">Last Name*</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm {{$errors->has('name')?'error':''}}" name="name" placeholder="Enter Project Name" value="{{old('name')?:$register->name}}" required="" />
                                        @if ($errors->has('name'))
                                        <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="passport_no" class="col-md-4">Passport No.*</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm {{$errors->has('passport_no')?'error':''}}" name="passport_no" placeholder="Enter Passport No" value="{{old('passport_no')?:$register->passport_no}}" required="" />
                                        @if ($errors->has('passport_no'))
                                        <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('passport_no') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="nationality" class="col-md-4">Nationality*</label>
                                    <div class="col-md-8">
                                        <select class="form-control form-control-sm" name="nationality">
                                            <option value="">Please Choose</option>
                                            @foreach($countries as $country)
                                            <option value="{{$country->name}}"
                                            @if(old('nationality'))
                                            {{old('nationality')==$country->name?'selected':''}} 
                                            @else
                                            {{$register->nationality==$country->name?'selected':''}}
                                            @endif
                                            >{{strtoupper($country->name)}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('nationality'))
                                        <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('nationality') }}</p>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <label for="pin" class="col-md-4">PIN*</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm {{$errors->has('pin')?'error':''}}" name="pin" placeholder="Enter PIN" value="{{old('pin')?:$register->pin_no}}" required="" />
                                        @if ($errors->has('pin'))
                                        <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('pin') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="pin" class="col-md-4">Status*</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="status">
                                            <option value="Proccessing" {{$register->status=='Proccessing'?'selected':''}} >Proccessing</option>
                                            <option value="Approved" {{$register->status=='Approved'?'selected':''}}>Approved</option>
                                        </select>
                                        @if ($errors->has('pin'))
                                        <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('pin') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="attachment">Attachment (pdf)</label>
                                    <input type="file" name="attachment" class="form-control {{$errors->has('attachment')?'error':''}}" />
                                    @if ($errors->has('attachment'))
                                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('attachment') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    @if($register->bannerFile)
                                    <a href="{{asset($register->bannerFile->file_url)}}" target="_blank"><img src="{{asset($register->bannerFile->image())}}" style="max-height: 60px;" ></a>
                                    <a href="{{route('admin.mediesDelete',$register->bannerFile->id)}}" class="mediaDelete" style="color: red;"><i class="fa fa-trash"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- Basic Inputs end -->
</div>

@endsection @push('js')
<script>
    $(".summernote").summernote({
        placeholder: "Hello stand alone ui",
        tabsize: 2,
        height: 120,
        toolbar: [
            ["style", ["style"]],
            ["font", ["bold", "underline"]],
            ["color", ["color"]],
            ["para", ["ul", "ol", "paragraph"]],
            ["table", ["table"]],
            ["insert", ["link", "picture"]],
            ["view", ["fullscreen", "codeview"]],
        ],
    });
</script>

@endpush
