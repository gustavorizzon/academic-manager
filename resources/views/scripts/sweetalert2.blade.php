@section('css')
  <link rel="stylesheet" href="{{ asset('vendor/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

  @parent
@endsection

@section('js')
  <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

  @parent
@endsection
