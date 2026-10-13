@extends('admin.layouts.app') @section('title')
<title>Passport Register List - {{general()->title}} | {{general()->subtitle}}</title>
@endsection @push('css')
<style type="text/css">
    
    .table.table-bordered tr th{
        padding:8px 10px;
    }
    .table.table-bordered tr td{
        padding:8px 10px;
    }
</style>
@endpush 
@section('contents')

<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Passport Register List</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
                    <li class="breadcrumb-item active">Passport Register List</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
        <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">

        	@isset(json_decode(Auth::user()->permission->permission, true)['pages']['add'])
            <a class="btn btn-outline-primary" href="{{route('admin.projectsAction','create')}}">New Register</a>
            @endisset
            <a class="btn btn-outline-primary" href="{{route('admin.projects')}}">
                <i class="fa-solid fa-rotate"></i>
            </a>
        </div>
    </div>
</div>

<div class="content-body">
    <!-- Basic Elements start -->
    <section class="basic-elements">
        <div class="row">
            <div class="col-md-12">
                @include('admin.alerts')
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div id="accordion">
                                <div
                                    class="card-header collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo"
                                    id="headingTwo"
                                    style="background: #f5f7fa; padding: 10px; cursor: pointer; border: 1px solid #00b5b8;"
                                >
                                    Search click Here..
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="border: 1px solid #00b5b8; border-top: 0;">
                                    <div class="card-body">
                                        <form action="{{route('admin.projects')}}">
                                            <div class="row">
                                                <div class="col-md-6 mb-1">
                                                    <div class="input-group">
                                                        <input type="date" name="startDate" value="{{request()->startDate?Carbon\Carbon::parse(request()->startDate)->format('Y-m-d') :''}}" class="form-control {{$errors->has('startDate')?'error':''}}" />
                                                        <input type="date" value="{{request()->endDate?Carbon\Carbon::parse(request()->endDate)->format('Y-m-d') :''}}" name="endDate" class="form-control {{$errors->has('endDate')?'error':''}}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-1">
                                                    <div class="input-group">
                                                        <input type="text" name="search" value="{{request()->search?request()->search:''}}" placeholder="Register Name" class="form-control {{$errors->has('search')?'error':''}}" />
                                                        <button type="submit" class="btn btn-success rounded-0">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                        <h4 class="card-title">Passport Register List</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{route('admin.projects')}}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group mb-1">
                                            <select class="form-control form-control-sm rounded-0" name="action" required="">
                                                <option value="">Select Action</option>
                                                <option value="Proccessing"> Proccessing</option>
                                                <option value="Approved"> Approved</option>
                                                <option value="5"> Delete</option>
                                            </select>
                                            <button class="btn btn-sm btn-primary rounded-0" onclick="return confirm('Are You Want To Action?')">Action</button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="statuslist">
                                            <li><a href="{{route('admin.projects')}}">All ({{$totals->total}})</a></li>
                                            <li><a href="{{route('admin.projects',['status'=>'active'])}}">Active ({{$totals->active}})</a></li>
                                            <li><a href="{{route('admin.projects',['status'=>'inactive'])}}">Inactive ({{$totals->inactive}})</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 60px;width: 60px;white-space: normal;background: #f1f1f1;">
                                                    <label style="cursor: pointer; margin-bottom: 0;"><input class="checkbox" type="checkbox" class="form-control" id="checkall" /> All <span class="checkCounter"></span> </label>
                                                </th>
                                                <th style="min-width: 200px;white-space: normal;background: #f1f1f1;">Name</th>
                                                <th style="min-width: 130px;width: 130px;white-space: normal;background: #f1f1f1;">Passport</th>
                                                <th style="min-width: 150px;width: 150px;white-space: normal;background: #f1f1f1;">Nationality</th>
                                                <th style="min-width: 120px;width: 120px;white-space: normal;background: #f1f1f1;">PIN</th>
                                                <th style="min-width: 100px;width: 100px;white-space: normal;background: #f1f1f1;">Attachment</th>
                                                <th style="min-width: 80px;width: 80px;white-space: normal;background: #f1f1f1;">Status</th>
                                                <th style="min-width: 80px;width: 80px;white-space: normal;background: #f1f1f1;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($registers as $i=>$register)
                                            <tr>
                                                <td>
                                                    <input class="checkbox" type="checkbox" name="checkid[]" value="{{$register->id}}" />{{$i+1}}
                                                    
                                                </td>
                                                <td>{{$register->name}}</td>
                                                <td>{{$register->passport_no}}</td>
                                                <td>{{$register->nationality}}</td>
                                                <td>{{$register->pin_no}}</td>
                                                <td style="text-align:center;padding:2px 10px;">
                                                    @if($register->bannerFile)
                                                    <a href="{{asset($register->bannerFile->file_url)}}" target="_blank"><img src="{{asset($register->bannerFile->image())}}" style="max-height: 30px;" ></a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($register->status=='Approved')
                                                    <span class="badge badge-success">{{ucfirst($register->status)}}</span>
                                                    @elseif($register->status=='inactive')
                                                    <span class="badge badge-danger">{{ucfirst($register->status)}}</span>
                                                    @else
                                                    <span class="badge badge-danger">{{ucfirst($register->status)}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.projectsAction',['edit',$register->id])}}" class="btn btn-sm btn-success">
                                                       <i class="fa fa-edit"></i> Edit
                                                    </a>   
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {{$registers->links('pagination')}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->
</div>

@endsection @push('js') @endpush
