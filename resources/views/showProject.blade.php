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


	<button type="button" class="btn btn-default btn-lg" onclick="window.location='{{ action('ProjectsController@like',[$project->id]) }}'">
		<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Like <span class="badge">{{ $project->likes}}</span>
	</button>

	<button type="button" class="btn btn-default btn-lg"
			onclick="window.location='{{ action('ProjectsController@pledge',[$project->id]) }}'"
			value="Pledge">
	</button>


	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "4286459d-3e7c-461a-a2cf-4e652ce60b9b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

@stop
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>

