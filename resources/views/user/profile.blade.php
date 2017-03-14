@extends('layouts.app')

</style>

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<img class="profile.img" src="{{ URL::asset ('image/765698.png')}}"height="100" width="150">
				<h1>{{ $user->name }}</h1>
				<h5>{{ $user->email }}</h5>
				<h4> {{ $user->dob}} ( {{ Carbon\Carbon::createFromFormat ('Y-m-d',$user->dob)->age }} years old)</h4>
				<button class="btn btn-success">Sundan
				</button>
			</div>
		</div>
	</div>
</div>

@endsection