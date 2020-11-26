@section('js')
  <script src="{{ asset('vendor/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

  <script>
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
  </script>

  @parent
@endsection
