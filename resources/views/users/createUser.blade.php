@extends('master')

@section('content')

    <h1 align="center">Register as a User</h1>
    <hr/>

    <body>
    {!! Form::open(['url' =>'/']) !!}
    <table>
        <tr>
            <td>{!! Form::label('First Name') !!}</td>
            <td> <div class="form-group">
                    {!! Form::text('fname',null,['class' => 'form-control']) !!}
                </div>
            </td>
        </tr>

        <tr>
            <td>{!! Form::label('Last Name') !!}</td>
            <td> <div class="form-group">
                    {!! Form::text('lname',null,['class' => 'form-control']) !!}
                </div></td>
        </tr>

        <tr>
            <td>{!! Form::label('Email') !!}</td>
            <td> <div class="form-group">
                    {!! Form::text('email',null,['class' => 'form-control']) !!}
                </div></td>
        </tr>

        <tr>
            <td>{!! Form::label('Password') !!}</td>
            <td> <div class="form-group">


                    {!! Form::text('password',null,['class' => 'form-control']) !!}
                </div></td>
        </tr>

        <tr colspan='2'>
            <td> <input type="submit" class="btn btn-info" value="Sign Up"> </td>
        </tr>


    </table>
    </body>


    {!! Form::close() !!}

    @if ($errors -> any())
        <ul class="alert alert-danger">
            @foreach ($errors -> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@stop



