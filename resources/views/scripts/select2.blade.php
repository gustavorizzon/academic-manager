@section('css')
  <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  @parent
@endsection
@section('js')
  <script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
  @parent
@endsection
