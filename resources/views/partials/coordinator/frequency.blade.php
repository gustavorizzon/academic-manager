@section('css')
  <style>
    [data-frequency-id] { cursor: pointer; }
  </style>
  @parent
@endsection

@section('content')
  <div class="modal fade show" id="frequency-modal" aria-modal="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ __('Change class date') }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="frequency-id">
          <div class="row">
            <div class="col">
              <label for="frequency-date">{{ __('Class Date') }}</label>
              <input type="date" id="frequency-date" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>
          <button type="button" class="btn btn-primary" id="save-frequency">{{ __('Save!') }}</button>
        </div>
      </div>
    </div>
  </div>

  @parent
@endsection

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

      $('button#save-frequency').on('click', function () {
        let payload = {
          frequency_id: $('input#frequency-id').val(),
          date: $('input#frequency-date').val()
        };

        if (payload.date.length === 0) {
          Swal.fire('{{ __("Error!") }}', '{{ __("Please, pick a date") }}', 'error');
          return;
        }

        axios.put('/coordinator/boards/{{ $boardId ?? $board->id ?? '' }}/frequencies/' + payload.frequency_id, payload)
          .then(function (response) {
            // Update on screen
            let $row = $('[data-frequency-id=' + payload.frequency_id + ']').first();
            $row.data('frequencyDate', payload.date);
            $row.children('td:nth-child(2)').html(
              '<span class="badge badge-secondary">' + moment(payload.date).format('DD/MM/YYYY') + '</span>'
            );

            // Hide modal
            $('#frequency-modal').modal('hide');

            // Show success message
            Swal.fire( '{{ __("Success!") }}', '{{ __("messages.data.frequencies.date-updated-successfully") }}', 'success' );
          })
          .catch(errorHandler);
      });

      $('[data-frequency-id]').on('click', function() {
        let $this = $(this);
        let frequencyId = $this.data('frequencyId');
        let frequencyDate = $this.data('frequencyDate');

        $('#frequency-id').val(frequencyId);
        $('#frequency-date').val(frequencyDate);
        $('#frequency-modal').modal();
      });
    });
  </script>

  @parent
@endsection
