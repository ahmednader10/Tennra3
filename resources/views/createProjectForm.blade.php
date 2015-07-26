@extends('master')

@section('content')

<body>
{!! Form::open(['url' =>'/']) !!}
<table>
<tr>
	<td>{!! Form::label('Project Name') !!}</td>
	<td><div class="form-group">
  

  		{!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Project Name']) !!}
		</div>
	</td>
</tr>

<tr>
	<td>{!! Form::label('Description') !!}</td>
	<td><div class="form-group">
  
  
  {!! Form::textarea('description',null,['class' => 'form-control', 'placeholder' => 'Description' ]) !!}
</div></td>
</tr>

<tr>
	<td>{!! Form::label('Video URL') !!}</td>
	<td><div class="form-group">
  
  		
  		{!! Form::text('video',null,['class' => 'form-control', 'placeholder' => 'Video Url']) !!}
		</div></td>
</tr>

<tr>
	<td>{!! Form::label('Target Fund') !!}</td>
	<td><div class="form-group">
  
  		
  		{!! Form::text('goal',null,['class' => 'form-control', 'placeholder' => 'Funding Goal']) !!}
		</div></td>
</tr>

<tr colspan='2'>	
<td><input type="submit" class="btn btn-info" value="Submit Project"> </td>
</tr>


</table>
	</body>

{!! Form::close() !!}

@if ($errors->any())
 	<ul class="alert alert-danger">
 		@foreach ($errors->all() as $error)
 			<li> {{ $error }}</li>
 			@endforeach
 	</ul>
 	@endif

 
@stop



