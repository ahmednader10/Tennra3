@extends('master')

@section('content')

<h1><center> All Projects </center></h1>
<hr/>
	@foreach($projects as $project)
		<project>
			<h2>
				<a href="{{ url('/projects/'.$project->id.'/') }}"> {{ $project->name}}</a>
			</h2>
		</project>
	@endforeach
@stop