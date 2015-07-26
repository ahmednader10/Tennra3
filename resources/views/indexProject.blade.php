@extends('master')

@section('content')

<h1><center> All Projects </center></h1>
<hr/>
	@foreach($projects as $project)
		<project>


			<div class="col-md-4">
			<h3>{{ $project->name}}</h3>
			<img src="http://s3.postimg.org/6azz3w3j7/backers_1.jpg" height="200" width="200"/>
			<p>{{ substr($project->description,0, 100)}}...</p>
			<p><a href="{{ url('/projects/'.$project->id.'/') }}">Learn more</a> 
		  </div>
		</project>
	@endforeach
@stop

		