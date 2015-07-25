@extends('master')

@section('content')

<h1> {{ $project->name}}</h1>

	<project>
		{{ $project->description}}
	</project>

@stop