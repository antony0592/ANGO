@extends('template.user')
@section('csspersonalizado')
@endsection
@section('container')

<div class="container" style='display: grid; align-items: center;justify-content: center;'>
    <a href="{{route('home')}}" title=""><img src="{{asset('images/logo_largo.PNG')}}" class="css-class" alt="Login Ango" height="51" width="123"></a>
    <p> 
    {{ Form::open(array('route' => 'login', 'method' => 'POST')) }}
   // {{ auth()->user()->name }}
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('useremail', 'E-mail') }}
            {{ Form::text('useremail', null, array('placeholder' => 'mail@mail.com', 'class' => 'form-control')) }}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('userpassword', 'Password') }}
            {{ Form::password('userpassword', array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">

            {{ Form::button('Continue', array('type' => 'submit', 'class' => 'btn btn-warning')) }}  

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
    
    
    <small>By continuing, you agree to Ango's Conditions of Use and Privacy Notice. </small>
    {{ Form::close() }}
    <hr>
    <h5>New to Ango?</h5>
    <a href="{{route('home')}}" class="btn btn-secondary btn-md active" role="button" aria-pressed="true">Create your Ango account</a>
</div>
@endsection
@section('footer')
@endsection
@section('jspersonalizado')

@endsection