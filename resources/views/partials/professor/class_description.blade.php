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

      $('a#save-board-description').on('click', function () {
        let $textarea = $('textarea#board-description');
        let payload = {
          board_id: $textarea.data('boardId'),
          description: $textarea.val()
        };

        if (payload.description.length === 0) {
          Swal.fire( '{{ __("Error!") }}', '{{ __("Please, inform a description") }}.', 'error' );
          $textarea.focus();
          return;
        }

        axios.put('{{ route("professor.boards.updateDescription") }}', payload)
          .then(function (response) {
            Swal.fire( '{{ __("Success!") }}', '{{ __("messages.data.boards.description-updated") }}', 'success' );
          })
          .catch(errorHandler);
      });
    });
  </script>

  @parent
@endsection
