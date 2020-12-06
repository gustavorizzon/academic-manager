@section('css')
  <style>
    [data-frequency-id] { cursor: pointer; }
  </style>

  @parent
@endsection

@section('content')
  <div class="modal fade show" id="frequencies-modal" aria-modal="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ __('Frequency') }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="frequency-id">
          <div class="row">
            <div class="col">
              <label for="frequency-summary">{{ __('Class Summary') }}</label>
              <textarea id="frequency-summary" class="form-control" rows="5"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="table-responsive" style="max-height: 48vh;">
                <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">{{ __('Present') }}?</th>
                      <th>{{ __('Student') }}</th>
                    </tr>
                  </thead>
                  <tbody id="frequencies-table"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>
          <button type="button" class="btn btn-primary" id="save-frequencies">{{ __('Save!') }}</button>
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

      $('button#save-frequencies').on('click', function () {
        let summary = $('textarea#frequency-summary').val();
        let checkboxes = $('[data-board-member-frequency-id]');
        let frequencyId = $('input#frequency-id').val();

        let frequencies = [];
        for(let i = 0; i < checkboxes.length; i++) {
          frequencies.push({
            id: $(checkboxes[i]).data('boardMemberFrequencyId'),
            checked: checkboxes[i].checked
          });
        }

        axios.put('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/frequencies/' + frequencyId, {
            summary: summary,
            frequencies: frequencies,
            frequency_id: frequencyId
          })
          .then(function (response) {
            $('[data-frequency-id=' + frequencyId + '] td:nth-child(3)')
              .first()
              .text(
                summary.substr(0, 67)
                + (summary.length > 67 ? '...' : '')
              );
            $('#frequencies-modal').modal('hide');
            Swal.fire( '{{ __('Success!') }}', '{{ __('messages.data.frequencies.updated-successfully') }}', 'success' );
          })
          .catch(errorHandler);
      });

      $('[data-frequency-id]').on('click', function() {
        let frequencyId = $(this).data('frequencyId');
        axios.get('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/frequencies/' + frequencyId)
          .then(function (response) {
            if (!response.data) return;

            $('tbody#frequencies-table').empty();
            $('textarea#frequency-summary').val(response.data.class_summary);
            $('input#frequency-id').val(frequencyId);

            let classSummary = '';
            for (let i = 0; i < response.data.frequencies.length; i++) {
              let boardMemberFrequency = response.data.frequencies[i];

              $('#frequencies-table').append(
                '<tr>'
                  + '<td class="text-center">'
                    + '<input type="checkbox" data-board-member-frequency-id="' + boardMemberFrequency.id + '" id="bmf' + boardMemberFrequency.id + '"' + (boardMemberFrequency.presente ? ' checked' : '') + '>'
                  + '</td>'
                  + '<td>'
                    + '<label for="bmf' + boardMemberFrequency.id + '">' + boardMemberFrequency.nome + '</label>'
                  + '</td>'
                + '</tr>'
              );
            }

            $('#frequencies-modal').modal();
          })
          .catch(errorHandler);
      });
    });
  </script>

  @parent
@endsection
