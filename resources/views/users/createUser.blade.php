@extends ('master')

@section ('content')
    <h1>Register as a user</h1>

    <hr/>

    {!! Form::open(['url' =>'/']) !!}

        <!-- First name form input -->
        <div class="form-group">
            {!! Form::label('fname', 'First Name:') !!}
            {!! Form::text('fname', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Last name form input -->
        <div class="form-group">
            {!! Form::label('lname', 'Last Name:') !!}
            {!! Form::text('lname', null, ['class' => 'form-control']) !!}
        </div>

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

        <!-- Retype password form input -->
        <div class="form-group">
            {!! Form::label('repassword', 'Retype Password:') !!}
            {!! Form::text('repassword', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Inserting a submit button -->
        <tr colspan='2'>
            <td> <input type="submit" class="btn btn-info" value="Sign Up" href="/"> </td>
        </tr>

    {!! Form::close() !!}


@stop