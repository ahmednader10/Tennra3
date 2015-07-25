
@extends('master')

@section('content')

<button style="background-color:#3366FF " type="button" class="btn btn-default" onclick="window.location='{{ route("project.create") }}'">Create Project</button>
<h1> Projects </h1>

<table class="table table-hover">
		<thead>
			<tr>
				<th>Project Name</th>
				<th>Description</th>
				<th>Video Url</th>
				<th>Funding Goal</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($projects as $project)
				<tr>
				<td>{{$project -> name}}</td>
				<td>{{$project -> description}}</td>
				<td>{{$project -> video}}</td>
				<td>{{$project -> goal}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>


	

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "4286459d-3e7c-461a-a2cf-4e652ce60b9b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>


<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>



@stop