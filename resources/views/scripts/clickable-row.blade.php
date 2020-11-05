@section('css')
  <style>
    [data-href] { cursor: pointer; }
  </style>

  @parent
@endsection

@section('js')
  <script>
    $(document).ready(function() {
      $(".clickable-row").click(function() {
        window.location = $(this).data("href");
      });
    });
  </script>

  @parent
@endsection
