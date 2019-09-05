<!doctype html>
<html lang="es">
    @include('template.secciones.head')
  <body>
    <div class="container" style='display: grid; align-items: center;justify-content: center;'>
        <a href="{{route('viewHome')}}" title=""><img src="{{asset('images/logo_largo.PNG')}}" class="css-class" alt="Login Ango" height="51" width="123"></a>
        <p> 
        {{ Form::open(array('route' => 'auth.login', 'method' => 'POST')) }}
        <div class="row">
            <div class="form-group col-md-12">
                {{ Form::label('email', 'E-mail') }}
                {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', array('class' => 'form-control')) }}
            </div>
        </div>
        {{ Form::button('Login', array('type' => 'submit', 'class' => 'btn btn-info')) }}  
        
        <small>By continuing, you agree to Ango's Conditions of Use and Privacy Notice. </small>
        {{ Form::close() }}
    </div>
      @include('template.secciones.footerLogin')
    <!-- JQUERY core JS -->   
    <script src="{{ asset('js/plugins/jquery/jquery-3.4.1.slim.js') }}"></script>
     <!-- Bootstrap core JS -->
    <script src="{{ asset('css/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <!-- NAV AMAZON JS -->
    <script src="{{ asset('js/navAmazon/navAmazon.js') }}"></script>
    @yield('jspersonalizado')
  </body>
</html>