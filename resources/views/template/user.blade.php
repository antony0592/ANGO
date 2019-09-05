<!doctype html>
<html lang="es">
    @include('template.secciones.head')
  <body>
      <div class="container">
        @yield('container')
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