@extends('template.main')
@section('csspersonalizado')
  <link href="{{asset('js/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('container')
<label for="">Usuario</label>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        You are logged in!
    </div>
    <div class="row">
        @foreach ($join as $image)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                            {{ $image->tbproductprice}}
                    </div>
                </div>
                <div class="panel-footer"></div>
            </div>
        @endforeach
    </div>
@endsection
@section('footer')
@endsection
@section('jspersonalizado')
@endsection