@extends('template.main')
@section('csspersonalizado')
  <link href="{{asset('js/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('container')
<label for="">Usuario</label>

@endsection
@section('footer')
@endsection
@section('jspersonalizado')
<script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $(document).ready(function() {
    $('#example').dataTable( {
          "language": {
            "lengthMenu": "Mostrando _MENU_ registros por página",
            "zeroRecords": "Nada que mostrar - disculpe!",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No se encontrarón registros",
            "infoFiltered": "(Filtrando _MAX_ del total de registros)",
            "search": "Buscar ",
            "sPrevious": " Anterior ",
            "next": " Siguiente "
          },
          "paging":   true,
          "order":   [[0, 'desc']],
          "ordering": true,
          "info":     true
        });
  } );
  } );
</script>
@endsection