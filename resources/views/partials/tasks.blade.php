@section('css')
  <style>
    [data-task-id] { cursor: pointer; }
  </style>

  @parent
@endsection

@section('content')
  <div class="modal fade show" id="tasks-modal" aria-modal="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ __('Task') }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="task-id">
          <div class="row">
            <div class="col">
              <label for="task-date">{{ __('Date') }}</label>
              <input type="date" id="task-date" class="form-control">
            </div>
            <div class="col">
              <label for="task-weight">{{ __('Weight') }}</label>
              <input type="number" id="task-weight" class="form-control">
            </div>
            <div class="col">
              <label for="task-type">{{ __('Type') }}</label>
              <select id="task-type" class="form-control">
                <option value="{{ \App\Models\Avaliacao::TYPE_TEST }}">{{ __('Test') }}</option>
                <option value="{{ \App\Models\Avaliacao::TYPE_WORK }}">{{ __('Work') }}</option>
              </select>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <label for="task-content">{{ __('Content') }}</label>
              <input type="text" id="task-content" class="form-control">
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
                  <tbody id="tasks-table"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-danger" id="delete-task">{{ __('Delete') }}</button>
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
          <button type="button" class="btn btn-outline-primary" id="save-task">{{ __('Save!') }}</button>
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
        let row = $('[data-task-id=' + data.task_id  + ']');

        // Content
        $(row).children('td:nth-child(2)').first().text(data.content.substr(0, 37) + (data.content.length > 37 ? '...' : ''));

        // Task Weight
        $(row).children('td:nth-child(5)').first().text(data.weight);

        // Date
        let dateSpan;
        if (data.date === moment().format('YYYY-MM-DD')) {
          dateSpan = '<span class="badge bg-success">{{ __('Today') }}</span>';
        } else {
          dateSpan = '<span class="badge bg-secondary">' + moment(data.date).format('DD/MM/YYYY') + '</span>';
        }
        $(row).children('td:nth-child(3)').first().html(dateSpan)

        // Type
        let typeSpan;
        if (data.type === '{{ \App\Models\Avaliacao::TYPE_TEST }}') {
          typeSpan = '<span class="badge bg-primary">{{ __('Test') }}</span>';
        } else {
          typeSpan = '<span class="badge bg-success">{{ __('Work') }}</span>';
        }
        $(row).children('td:nth-child(4)').first().html(typeSpan);
      };

      $('button#delete-task').on('click', function () {
        let taskId = $('input#task-id').val();
        let taskContent = $('input#task-content').val();

        if (taskId === '#') {
          $('#tasks-modal').modal('hide');
          return;
        }

        Swal.fire({
			    title: '{{ __('Do you want to proceed?') }}',
          html: '<span class="text-danger">{{ __('This action cannot be reversed!') }}</span>',
			    icon: 'question',
			    showCancelButton: true,
			    confirmButtonColor: '#3085d6',
			    cancelButtonColor: '#d33',
			    confirmButtonText: '{{ __('Yes, proceed!') }}',
			    cancelButtonText: '{{ __('Not now.') }}',
		    }).then(function(result) {
          if (result.value) {
            axios.delete('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/tasks/' + taskId)
              .then(function (response) {
                $('#tasks-modal').modal('hide');
                Swal.fire( '{{ __('Deleted!') }}', '{{ __('Deletion performed successfully.') }}', 'success' );
                $('[data-task-id=' + taskId + ']').remove();
                if ($('#board-tasks-list tr').length === 0) {
                  $('#board-tasks-list').append(
                    $('<tr>'
                      + '<td colspan="5" class="text-center">@lang('messages.table.empty')</td>'
                    + '</tr>')
                  );
                }
              })
              .catch(errorHandler);
          }
        });
      });

      $('button#save-task').on('click', function () {
        let gradeInputs = $('[data-member-grade]');
        let taskDate = $('input#task-date').val();
        let taskWeight = $('input#task-weight').val();
        let taskType = $('select#task-type').val();
        let taskContent = $('input#task-content').val();
        let taskId = $('input#task-id').val();

        let grades = [];
        for(let i = 0; i < gradeInputs.length; i++) {
          grades.push({
            id: $(gradeInputs[i]).data('boardMemberTaskId'),
            member_id: $(gradeInputs[i]).data('memberId'),
            value: $(gradeInputs[i]).val()
          });
        }

        let payload = {
          date: taskDate,
          type: taskType,
          weight: taskWeight,
          content: taskContent,
          grades: grades,
          task_id: taskId
        };

        if (taskId === '#') {
          axios.post('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/tasks', payload)
            .then(function (response) {
              let newTaskId = response.data.task_id;

              $('#tasks-modal').modal('hide');
              Swal.fire( '{{ __('Success!') }}', '{{ __('messages.data.tasks.updated-successfully') }}', 'success' );

              // If the list has only the empty message, we remove it
              if ($('#board-tasks-list tr td[colspan]').length > 0) {
                $('#board-tasks-list').empty();
              }

              // Then we add an empty row
              $('#board-tasks-list').append(
                $(
                  '<tr data-task-id="' + newTaskId + '">'
                    + '<td></td>'
                    + '<td></td>'
                    + '<td class="text-center"></td>'
                    + '<td class="text-center"></td>'
                    + '<td class="text-right"></td>'
                  + '</tr>'
                )
              );

              payload.task_id = newTaskId;

              // And we update the empty row
              handleOnScreenUpdate(payload);
            })
            .catch(errorHandler);

        } else {
          axios.put('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/tasks/' + taskId, payload)
            .then(function (response) {
              $('#tasks-modal').modal('hide');
              Swal.fire( '{{ __('Success!') }}', '{{ __('messages.data.tasks.updated-successfully') }}', 'success' );

              handleOnScreenUpdate(payload);
            })
            .catch(errorHandler);
        }
      });

      $('#tasks-data').on('click', '[data-task-id]', function() {
        let taskId = $(this).data('taskId');

        if (taskId === '#') {
          $('input#task-id').val('#');
          $('input#task-date').val('');
          $('input#task-weight').val('');
          $('input#task-content').val('');
          $('button#delete-task').hide();

          axios.get('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/members')
            .then(function (response) {
              if (!response.data.members) return;

              $('tbody#tasks-table').empty();

              for (let i = 0; i < response.data.members.length; i++) {
                let member = response.data.members[i];

                $('#tasks-table').append(
                  '<tr>'
                    + '<td>'
                      + '<label for="bm' + member.id + '">' + member.nome + '</label>'
                    + '</td>'
                    + '<td class="text-center">'
                      + '<input class="form-control" type="number" data-member-grade="true" data-member-id="' + member.id + '" id="bm' + member.id + '" value="0">'
                    + '</td>'
                  + '</tr>'
                );
              }

              $('#tasks-modal').modal();
            })
            .catch(errorHandler);
        } else {
          axios.get('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/tasks/' + taskId)
            .then(function (response) {
              if (!response.data) return;

              $('tbody#tasks-table').empty();
              $('input#task-id').val(taskId);
              $('input#task-date').val(response.data.date);
              $('input#task-weight').val(response.data.weight);
              $('select#task-type').val(response.data.type);
              $('input#task-content').val(response.data.content);
              $('button#delete-task').show();

              for (let i = 0; i < response.data.members.length; i++) {
                let boardMemberTask = response.data.members[i];

                $('#tasks-table').append(
                  '<tr>'
                    + '<td>'
                      + '<label for="bmt' + boardMemberTask.id + '">' + boardMemberTask.nome + '</label>'
                    + '</td>'
                    + '<td class="text-center">'
                      + '<input class="form-control" type="number" data-member-grade="true" data-board-member-task-id="' + boardMemberTask.id + '" id="bmt' + boardMemberTask.id + '" value="' + boardMemberTask.nota + '">'
                    + '</td>'
                  + '</tr>'
                );
              }

              $('#tasks-modal').modal();
            })
            .catch(errorHandler);
        }
      });
    });
  </script>

  @parent
@endsection
