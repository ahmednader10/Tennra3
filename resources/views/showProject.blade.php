@extends('master')

@section('content')

<h1><center>{{ $project->name}}</center></h1>

	<project>
			<div class="col-md-4">
			<h3>{{ $project->name}}</h3>
			<video controls="controls" 
       class="video-stream" 
       x-webkit-airplay="allow" 
       data-youtube-id="N9oxmRT2YWw" 
       src="https://www.youtube.com/watch?v=DFLLodw838w"></video>
			<p>{{ substr($project->description,0, 100)}}...</p>
			<p><a href="{{ url('/projects/'.$project->id.'/') }}">Learn more</a> </p>
		  </div>
		  </div>
		</project>


@stop