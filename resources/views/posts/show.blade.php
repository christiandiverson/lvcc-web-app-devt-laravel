@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
			
				<span>
					Status by 
					
					<small>
						<a href="/posts/{{ $posts->id }}/edit"></a>
					</small>
				</span>

				<span class="pull-right" >
					{{ $posts->created_at->diffForHumans() }}

				</span>
					
			</div>

			<div class="panel-body">
				{{ $posts->status }}
			</div>
		</div>
	</div>
</div>

@endsection
