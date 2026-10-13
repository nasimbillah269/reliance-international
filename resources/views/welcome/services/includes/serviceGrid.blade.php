{{--<div class="serviceGrid">
    <div class="image">
        <img src="{{asset($service->image())}}" alt="{{$service->name}}">
    </div>
    <div class="row m-0">
        <div class="col-8 text">
            <p class="ctg">
                @if($ctg =$service->serviceCategories->first())
                <a href="{{route('serviceCategory',$ctg->slug?:'no-title')}}">{{$ctg->name}}</a>
                @else
                <a href="javascript:void(0)">Undefine</a>
                @endif
            </p>
            <h4><a href="{{route('serviceView',$service->slug?:'no-title')}}">{{$service->name}}</a></h4>
            <p>
            {!!Str::limit($service->short_description,50)!!}
            </p>
        </div>
        <div class="col-4 readMore">
           <a href="{{route('serviceView',$service->slug?:'no-title')}}"> View<br>More<br><i class="fa fa-link"></i></a>
        </div>
    </div>
</div>--}}

  {{--<div class="ourServiceGridBox" data-aos="fade-up">
     <a href="{{route('serviceView',$service->slug?:'no-title')}}"><img  src="{{asset($service->image())}}" alt="{{$service->name}}"></a>
    <div class="ourServiceGridBoxInfo">
         <a href="{{route('serviceView',$service->slug?:'no-title')}}"> <h4>{{$service->name}}</h4></a>
       
    </div>
</div>--}}

<div class="package-style1">
             <div class="package-img">
               <a href="{{route('serviceView',$service->slug?:'no-title')}}"><img class="w-100" src="{{asset($service->image())}}" alt="{{$service->name}}" /></a>
             </div>
             <div class="package-content">
               <div class="package-review">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
               </div>
               <h3 class="package-title"><a href="{{route('serviceView',$service->slug?:'no-title')}}">{{$service->name}} </a></h3>
               <p class="package-text">{!!Str::limit($service->short_description,50)!!} </p>
              
               <div class="package-footer">
                 <a href="{{route('serviceView',$service->slug?:'no-title')}}" class="vs-btn style4">View Details </a>
               </div>
             </div>
           </div>