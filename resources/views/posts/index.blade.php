@extends('layouts.app')

@section('content')
<div class="row">
	@forelse ($posts as $post)
	
		<div class="col-md-4 col-md-offset-4">
		  <div class="panel panel-default">
			 <div class="panel-heading">
				<span> Status by id number {{ $post->user_id }} </span>

				<span class="pull-right" >
					{{ $post->created_at->diffForHumans()  }}
				</span>

			 </div>
			 
			 <div class="panel-body">
			 {{ $post->Shortstatus}}

			 <a href="/posts/{{ $post->id }}"> Read more </a>
			 </div>

			 <div class="panel-footer clearfix" style="background-color: white ">
			 @if ($post->user_id==Auth::id())
			 		<form class="pull-right" style="margin-left:25px" action="/posts/{{ $post->id }}" method="POST">
			 		{{ csrf_field() }}
			 		{{ method_field('DELETE') }}
			 		<button class="btn btn-danger btn-sm" >Delete</button>
			 			
			 		</form>
			 @endif
			 <i class="fa fa-heart " ></i>
			 	
			 </div>			
		</div>
	</div>
	@empty
		No Status
@endforelse

@endsection