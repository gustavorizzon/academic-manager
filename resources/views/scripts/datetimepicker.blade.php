@section('css')
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}">

  @parent
@endsection

@section('js')
	<script src="{{ asset('vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

  @parent
@endsection
