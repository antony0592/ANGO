@extends('template.user')
@section('csspersonalizado')
@endsection
@section('container')


<div class="container" style='display: grid; align-items: center;justify-content: center;'>
    <a href="{{route('viewHome')}}" title=""><img src="{{asset('images/logo_largo.PNG')}}" class="css-class" alt="Login Ango" height="51" width="123"></a>
    <p> 
    {{ Form::open(array('route' => 'auth.login', 'method' => 'POST')) }}
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('email', 'E-mail') }}
            {{ Form::text('email', null, array('placeholder' => 'mail@mail.com', 'class' => 'form-control')) }}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
    </div>
    {{ Form::button('Continue', array('type' => 'submit', 'class' => 'btn btn-warning')) }}  
    
    <small>By continuing, you agree to Ango's Conditions of Use and Privacy Notice. </small>
    {{ Form::close() }}
    <hr>
    <h5>New to Ango?</h5>
    <a href="{{route('client.users.create')}}" class="btn btn-secondary btn-md active" role="button" aria-pressed="true">Create your Ango account</a>
</div>
@endsection
@section('footer')
@endsection
@section('jspersonalizado')

@endsection