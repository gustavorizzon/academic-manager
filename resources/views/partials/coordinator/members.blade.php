@section('content')
  <div class="modal fade show" id="professor-modal" aria-modal="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ __('Professor') }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <label for="select-professor">{{ __('Professor') }}</label>
              <select id="select-professor" class="form-control">
                <option></option>
                @foreach(\App\Models\MembroInstituicao::allProfessors() as $professor)
                  <option value="{{ $professor->id }}">{{ $professor->nome }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
          <button type="button" class="btn btn-outline-primary" id="save-professor">{{ __('Add!') }}</button>
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

      // Select 2 component initialization
      $('select#select-professor').select2({
        placeholder: '{{ __("Search for a professor") }}',
        allowClear: true,
        theme: 'bootstrap4'
      });

      // Professor removal / Student toggle
      $('#board-members-list').on('click', '[data-member-id]', function () {
        let $this = $(this);
        let memberId = $this.data('memberId');
        let memberName = $this.data('memberName');
        let removeProfessor = $this.data('removeProfessor');
        let toggleStudent = $this.data('toggleStudent');

        if (removeProfessor === true) {
          // remove professor
          Swal.fire({
            title: '{{ __("Do you want to proceed?") }}',
            html: '{{ __("Confirm removal of professor") }}: <span class="text-primary text-bold">' + memberName + '</span>',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '{{ __('Yes, proceed!') }}',
            cancelButtonText: '{{ __('Not now.') }}',
          }).then(function(result) {
            if (result.value) {
              axios.delete('/coordinator/boards/{{ $boardId ?? $board->id ?? '' }}/professors/' + memberId)
                .then(function (response) {
                  Swal.fire( '{{ __('Deleted!') }}', '{{ __('Deletion performed successfully.') }}', 'success' );

                  // Update screen elements
                  $this.closest('tr').first().remove();
                })
                .catch(errorHandler);
            }
          });
        } else if (toggleStudent === true) {
          // toggles student (change to waiver status)
          Swal.fire({
            title: '{{ __("Do you want to proceed?") }}',
            html: '{{ __("Set waiver status to the student") }}: <span class="text-primary text-bold">' + memberName + '</span>'
                + '<br><span class="text-danger text-bold">{{ __("This action cannot be reversed!") }}</span>',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '{{ __('Yes, proceed!') }}',
            cancelButtonText: '{{ __('Not now.') }}',
          }).then(function(result) {
            if (result.value) {
              axios.put('/coordinator/boards/{{ $boardId ?? $board->id ?? '' }}/students/' + memberId + '/waiver')
                .then(function (response) {
                  Swal.fire( '{{ __('Success!') }}', '{{ __('Action performed successfully.') }}', 'success' );

                  // Update screen elements
                  let $row = $this.closest('tr').first();
                  $row.children('td:nth-child(4)').html('<span class="badge badge-warning">{{ __("Waiver") }}</span>');
                  $row.children('td:first-child').empty();
                })
                .catch(errorHandler);
            }
          });
        }
      });

      $('button#save-professor').on('click', function () {
        let payload = {
          professor_id: $('select#select-professor').val()
        };

        if (payload.professor_id.length === 0) {
          Swal.fire( '{{ __('Error!') }}', '{{ __("Please, select a professor") }}.', 'error' );
          return;
        }

        axios.post('/coordinator/boards/{{ $boardId ?? $board->id ?? '' }}/professors', payload)
          .then(function (response) {
            let memberId = response.data.member_id;
            let professorName = response.data.professor_name;

            $('#professor-modal').modal('hide');
            Swal.fire( '{{ __('Success!') }}', '{{ __("messages.data.boards.professors.added-successfully") }}', 'success' );

            $('#board-members-list').append(
              $(
                '<tr>'
                  + '<td class="text-center">'
                    + '<button data-remove-professor="true" data-member-id="' + memberId + '" data-member-name="' + professorName + '" type="button" class="btn btn-sm btn-link text-danger" title="{{ __('Remove Professor') }}">'
                      + '<i class="fas fa-trash fa-fw"></i>'
                    + '</button>'
                  + '</td>'
                  + '<td>' + professorName + '</td>'
                  + '<td class="text-center">'
                    + '<span class="badge badge-info">{{ __("Professor") }}</span>'
                  + '</td>'
                  + '<td class="text-center">-</td>'
                  + '<td class="text-center">-</td>'
                + '</tr>'
              )
            );
          })
          .catch(errorHandler);
      });

      $('button#add-professor').on('click', function() {
        $('#select-professor').val(null).trigger('change');

        $('#professor-modal').modal();
      });
    });
  </script>

  @parent
@endsection
