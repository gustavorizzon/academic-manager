@section('js')
  <script>
    $(document).ready(function () {
      let errorHandler = function (error) {
        let errorMessage = '{{ __("messages.errors.unexpected") }}';

        if (error.response.data.errors) {
          let firstKey = Object.keys(error.response.data.errors)[0];

          errorMessage = error.response.data.errors[firstKey];
        }

        Swal.fire( '{{ __('Error!') }}', errorMessage, 'error' );
      };

      $('button#save-board-classroom').on('click', function () {
        let $input = $('input#board-classroom');
        let payload = {
          board_id: $input.data('boardId'),
          classroom: $input.val()
        };

        if (payload.classroom.length === 0) {
          Swal.fire( '{{ __('Error!') }}', '{{ __("Please, inform a classroom") }}.', 'error' );
          $input.focus();
          return;
        }

        axios.put('{{ route("coordinator.boards.updateClassroom") }}', payload)
          .then(function (response) {
            Swal.fire( '{{ __('Success!') }}', '{{ __("messages.data.boards.classroom-updated") }}', 'success' );
          })
          .catch(errorHandler);
      });
    });
  </script>

  @parent
@endsection
