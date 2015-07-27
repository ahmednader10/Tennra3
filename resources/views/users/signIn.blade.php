@extends ('master')

@section ('content')
    <h1 align="center">Welcome Back! Please Sign In..</h1>

    <hr/>

    {!! Form::open(['url' =>'/']) !!}

    <!-- Email form input -->
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Password form input -->
    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Inserting a submit button -->
    <tr colspan='2'>
        <td> <input type="submit" class="btn btn-info" value="Sign In"> </td>
    </tr>

    {!! Form::close() !!}

    @if ($errors -> any())
        <ul class="alert alert-danger">
            @foreach ($errors -> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@stop