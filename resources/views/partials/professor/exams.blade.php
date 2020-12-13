@section('css')
  <style>
    [data-exam-id] { cursor: pointer; }
  </style>

  @parent
@endsection

@section('content')
  <div class="modal fade show" id="exams-modal" aria-modal="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ __('Exam') }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="exam-id">
          <div class="row">
            <div class="col">
              <label for="exam-date">{{ __('Date') }}</label>
              <input type="date" id="exam-date" class="form-control">
            </div>
            <div class="col">
              <label for="exam-weight">{{ __('Weight') }}</label>
              <input type="text" value="{{ __('Lowest grade weight') }}" class="form-control disabled" disabled>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <label for="exam-content">{{ __('Content') }}</label>
              <input type="text" id="exam-content" class="form-control">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <div class="table-responsive" style="max-height: 45vh;">
                <table class="table table-striped table-head-fixed text-nowrap m-0">
                  <thead>
                    <tr>
                      <th>{{ __('Student') }}</th>
                      <th class="text-center" style="width:33%;">{{ __('Grade') }}</th>
                    </tr>
                  </thead>
                  <tbody id="exams-table"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-danger" id="delete-exam">{{ __('Delete') }}</button>
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
          <button type="button" class="btn btn-outline-primary" id="save-exam">{{ __('Save!') }}</button>
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

      let handleOnScreenUpdate = function (data) {
        // OnScreen update
        // ROW
        let row = $('[data-exam-id=' + data.task_id  + ']');

        // Content
        $(row).children('td:nth-child(2)').first().text(data.content.substr(0, 37) + (data.content.length > 37 ? '...' : ''));

        // Exam Weight
        $(row).children('td:nth-child(4)').first().text('{{ __("Lowest grade weight") }}');

        // Date
        let dateSpan;
        if (data.date === moment().format('YYYY-MM-DD')) {
          dateSpan = '<span class="badge bg-success">{{ __("Today") }}</span>';
        } else if (moment().isAfter(data.date)) {
          dateSpan = '<span class="badge bg-success">' + moment(data.date).format('DD/MM/YYYY') + '</span>';
        } else {
          dateSpan = '<span class="badge bg-secondary">' + moment(data.date).format('DD/MM/YYYY') + '</span>';
        }
        $(row).children('td:nth-child(3)').first().html(dateSpan)
      };

      $('button#delete-exam').on('click', function () {
        let examId = $('input#exam-id').val();
        let examContent = $('input#exam-content').val();

        if (examId === '#') {
          $('#exams-modal').modal('hide');
          return;
        }

        Swal.fire({
			    title: '{{ __("Do you want to proceed?") }}',
          html: '<span class="text-danger">{{ __("This action cannot be reversed!") }}</span>',
			    icon: 'question',
			    showCancelButton: true,
			    confirmButtonColor: '#3085d6',
			    cancelButtonColor: '#d33',
			    confirmButtonText: '{{ __("Yes, proceed!") }}',
			    cancelButtonText: '{{ __("Not now.") }}',
		    }).then(function(result) {
          if (result.value) {
            axios.delete('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/tasks/' + examId)
              .then(function (response) {
                $('#exams-modal').modal('hide');
                Swal.fire( '{{ __("Deleted!") }}', '{{ __("Deletion performed successfully.") }}', 'success' );
                $('[data-exam-id=' + examId + ']').remove();
                if ($('#board-exams-list tr').length === 0) {
                  $('#board-exams-list').append(
                    $('<tr>'
                      + '<td colspan="4" class="text-center">@lang("messages.table.empty")</td>'
                    + '</tr>')
                  );
                }
              })
              .catch(errorHandler);
          }
        });
      });

      $('button#save-exam').on('click', function () {
        let gradeInputs = $('[data-member-exam-grade]');
        let examDate = $('input#exam-date').val();
        let examContent = $('input#exam-content').val();
        let examId = $('input#exam-id').val();

        let grades = [];
        for(let i = 0; i < gradeInputs.length; i++) {
          grades.push({
            id: $(gradeInputs[i]).data('boardMemberExamId'),
            member_id: $(gradeInputs[i]).data('examMemberId'),
            value: $(gradeInputs[i]).val()
          });
        }

        let payload = {
          date: examDate,
          type: '{{ \App\Models\Avaliacao::TYPE_EXAM }}',
          weight: 0,
          content: examContent,
          grades: grades,
          task_id: examId
        };

        if (examId === '#') {
          axios.post('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/tasks', payload)
            .then(function (response) {
              let newExamId = response.data.task_id;

              $('#exams-modal').modal('hide');
              Swal.fire( '{{ __("Success!") }}', '{{ __("messages.data.tasks.updated-successfully") }}', 'success' );

              // If the list has only the empty message, we remove it
              if ($('#board-exams-list tr td[colspan]').length > 0) {
                $('#board-exams-list').empty();
              }

              // Then we add an empty row
              $('#board-exams-list').append(
                $(
                  '<tr data-exam-id="' + newExamId + '">'
                    + '<td></td>'
                    + '<td></td>'
                    + '<td class="text-center"></td>'
                    + '<td class="text-center"></td>'
                  + '</tr>'
                )
              );

              payload.task_id = newExamId;

              // And we update the empty row
              handleOnScreenUpdate(payload);
            })
            .catch(errorHandler);

        } else {
          axios.put('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/tasks/' + examId, payload)
            .then(function (response) {
              $('#exams-modal').modal('hide');
              Swal.fire( '{{ __("Success!") }}', '{{ __("messages.data.tasks.updated-successfully") }}', 'success' );

              handleOnScreenUpdate(payload);
            })
            .catch(errorHandler);
        }
      });

      $('#exams-data').on('click', '[data-exam-id]', function() {
        let examId = $(this).data('examId');

        if (examId === '#') {
          $('input#exam-id').val('#');
          $('input#exam-date').val('');
          $('input#exam-content').val('');
          $('button#delete-exam').hide();

          axios.get('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/members/inExam')
            .then(function (response) {
              if (!response.data.members) return;

              $('tbody#exams-table').empty();

              for (let i = 0; i < response.data.members.length; i++) {
                let member = response.data.members[i];

                $('#exams-table').append(
                  '<tr>'
                    + '<td>'
                      + '<label for="ebm' + member.id + '">' + member.nome + '</label>'
                    + '</td>'
                    + '<td class="text-center">'
                      + '<input class="form-control" type="number" data-member-exam-grade="true" data-exam-member-id="' + member.id + '" id="ebm' + member.id + '" value="0">'
                    + '</td>'
                  + '</tr>'
                );
              }

              $('#exams-modal').modal();
            })
            .catch(errorHandler);
        } else {
          axios.get('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/tasks/' + examId)
            .then(function (response) {
              if (!response.data) return;

              $('tbody#exams-table').empty();
              $('input#exam-id').val(examId);
              $('input#exam-date').val(response.data.date);
              $('input#exam-content').val(response.data.content);
              $('button#delete-exam').show();

              for (let i = 0; i < response.data.members.length; i++) {
                let boardMemberExam = response.data.members[i];

                $('#exams-table').append(
                  '<tr>'
                    + '<td>'
                      + '<label for="bme' + boardMemberExam.id + '">' + boardMemberExam.nome + '</label>'
                    + '</td>'
                    + '<td class="text-center">'
                      + '<input class="form-control" type="number" data-member-exam-grade="true" data-board-member-exam-id="' + boardMemberExam.id + '" id="bme' + boardMemberExam.id + '" value="' + boardMemberExam.nota + '">'
                    + '</td>'
                  + '</tr>'
                );
              }

              $('#exams-modal').modal();
            })
            .catch(errorHandler);
        }
      });
    });
  </script>

  @parent
@endsection
