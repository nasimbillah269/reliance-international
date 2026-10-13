{{--<div class="blogGrid">
	<div class="image">
		<a href="{{route('blogView',$post->slug?:'no-title')}}">
			<img src="{{asset($post->image())}}" alt=" " class="img-responsive img-fluid" />
		</a>
	</div>
 
   <div class="blog-content">
   		<h4>{{$post->created_at->format('d M')}} </h4>
		<ul class="author-post">
		   <li>
				<span class="fa fa-user"></span> Posted by 
				@if($post->user)
				<a href="{{route('blogAuthor',[$post->user->id,Str::slug($post->user->name)])}}">
				@else
				<a href="javascript:void(0)">
				@endif
					{{$post->user?$post->user->name:'No Author'}} 
				</a>
			</li>
			{{--<li style="float: right;">
			<span class="fa fa-comments-o"></span> ({{$post->postComments->where('status','active')->count()}})
			</li>
		</ul>
		<h5><a href="{{route('blogView',$post->slug?:'no-title')}}">{{$post->name}}</a></h5>
		<a href="{{route('blogView',$post->slug?:'no-title')}}" class="btn">Read More </a>
	
   </div>
 </div>--}}
 
 
 <div class="vs-blog blog-style3">
             <div class="blog-img">
               <a href="{{route('blogView',$post->slug?:'no-title')}}"><img src="{{asset($post->image())}}" alt="{{$post->name}}" /></a>
             </div>
             <div class="blog-content">
               <h2 class="blog-title"><a href="{{route('blogView',$post->slug?:'no-title')}}">{{$post->name}} </a></h2>
               <p class="blog-text">{{$post->short_description}} </p>
               <div class="blog-bottom">
                 <a class="blog-date" href="blog-details.html"><i class="fas fa-calendar-alt"></i> {{$post->created_at->format('d M')}}  </a>
                 <a class="vs-btn style4" href="{{route('blogView',$post->slug?:'no-title')}}">Read More  <i class="fal fa-arrow-right"></i></a>
               </div>
             </div>
           </div>