@extends('template.main')
@section('csspersonalizado')
  <link href="{{asset('js/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('container')
  <!-- Advanced Tables -->
  <div class="panel panel-default">
      <div class="panel-heading">
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="example">
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Precio</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($join as $row)
                  <tr>
                    <th scope="row">{{ $row->tbproductid }}</th>
                    <td>{{ $row->tbproductname }}</td>
                    <td>{{ $row->tbcategoryname }}</td>
                    <td>{{ $row->tbproductprice}}</td>
                  </tr>
                  @endforeach
                </tbody>
          </table>
        <!--End Advanced Tables -->
        </div>
      </div>
    </div>
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