@extends('template.user')
@section('csspersonalizado')
@endsection
@section('container')
    <div class="container" style='display: grid; align-items: center;justify-content: center;'>
        <a href="{{route('home')}}" title=""><img src="{{asset('images/logo_largo.PNG')}}" class="css-class" alt="Login Ango" height="51" width="123"></a>
        <p> 
        {!! Form::open(['route'=>'register','method'=>'POST']) !!}
        <div class="row">
            <div class="form-group col-md-6">
                <h3>Create your account</h3>
                {{ Form::label('name', 'Your name ') }}
                {{ Form::text('name', null,  array('placeholder' => 'Example: Anthony', 'class' => 'form-control', 'required')) }}

                {{ Form::label('email', 'E-mail') }}
                {{ Form::text('email', null, array('placeholder' => 'mail@mail.com', 'class' => 'form-control', 'required')) }}


                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', array('placeholder' => '******','class' => 'form-control', 'required')) }}
                <small>Passwords must be at least 6 characters.</small>
            </div>  
            <div class="form-group col-md-6">
                {{ Form::label('level', 'Rol') }}
                {{ Form::select('level', ['2' => 'Cliente'], null , ['class' => 'form-control']) }}

                {{ Form::label('country', 'Country') }}
                {{ Form::select('country', ['55' => 'Costa Rica'], null , ['class' => 'form-control']) }}
            </div>  
            <p>        
            {{ Form::button('Create your Ango account', array('type' => 'submit', 'class' => 'btn btn-warning')) }}
            <p>
            <small>By creating an account, you agree to Ango´s Conditions of Use and Privacy Notice</small>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
@section('footer')
@endsection
@section('jspersonalizado')

@endsection