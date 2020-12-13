@section('css')
  <style>
    [data-document-id] { cursor: pointer; }
  </style>

  @parent
@endsection

@section('content')
  <div class="modal fade show" id="documents-modal" aria-modal="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ __('Document') }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="document-id">
          <div class="row">
            <div class="col-sm-7">
              <label for="document-name">{{ __('Name') }}</label>
              <input type="text" id="document-name" class="form-control">
            </div>
            <div class="col-sm-5">
              <label for="document-date">{{ __('Date') }}</label>
              <input type="date" id="document-date" class="form-control">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <label for="document-file">{{ __('File') }}</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="document-file">
                <label class="custom-file-label" for="document-file">{{ __('Choose file') }}</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-danger" id="delete-document">{{ __('Delete') }}</button>
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
          <button type="button" class="btn btn-outline-warning" id="download-document">{{ __('Download') }}</button>
          <button type="button" class="btn btn-outline-primary" id="save-document">{{ __('Save!') }}</button>
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
        let row = $('[data-document-id=' + data.get('document_id')  + ']');

        $(row).children('td:nth-child(2)').first().text(data.get('name'));
        $(row).children('td:nth-child(3)').first().text(moment(data.get('date')).format('DD/MM/YYYY'));

        let file = data.get('file');
        if (typeof file !== 'undefined') {
          $(row).children('td:nth-child(4)').first().text(file.name);
          $(row).children('td:nth-child(5)').first().text(file.size + ' B');
        }
      };

      $('button#save-document').on('click', function () {
        let documentId = $('input#document-id').val();
        let documentName = $('input#document-name').val();
        let documentDate = $('input#document-date').val();

        let formData = new FormData();
        formData.append('document_id', documentId);
        formData.append('name', documentName);
        formData.append('date', documentDate);

        let request = {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        };

        if (documentId === '#') {
          let documentFile = $('input#document-file').get(0);

          if (documentFile.files.length === 0) {
            Swal.fire('{{ __('Error!') }}', '{{ __('Please, choose a file.') }}', 'error' );
            return;
          } else {
            documentFile = documentFile.files[0];
          }

          formData.append('file', documentFile);

          axios.post('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/documents', formData, request)
            .then(function (response) {
              let newDocumentId = response.data.document_id;

              $('#documents-modal').modal('hide');
              Swal.fire( '{{ __('Success!') }}', '{{ __('messages.data.documents.saved-successfully') }}', 'success' );

              // If the list has only the empty message, we remove it
              if ($('#board-documents-list tr td[colspan]').length > 0) {
                $('#board-documents-list').empty();
              }

              // Then we add an empty row
              $('#board-documents-list').append(
                $(
                  '<tr data-document-id="' + newDocumentId + '">'
                    + '<td class="text-center">'
                      + '<i class="far fa-hand-pointer text-success"></i>'
                    + '</td>'
                    + '<td></td>'
                    + '<td></td>'
                    + '<td></td>'
                    + '<td class="text-right"></td>'
                  + '</tr>'
                )
              );

              formData.set('document_id', newDocumentId);

              // handle on screen update
              handleOnScreenUpdate(formData);
            })
            .catch(errorHandler);
        } else {
          // Using json instead of formdata in put request due to a php bug
          axios.put(
            '/professor/documents/' + documentId + '/update', {
              name: formData.get('name'),
              date: formData.get('date')
            })
            .then(function (response) {
              $('#documents-modal').modal('hide');
              Swal.fire( '{{ __('Success!') }}', '{{ __('messages.data.documents.updated-successfully') }}', 'success' );

              handleOnScreenUpdate(formData);
            })
            .catch(errorHandler);
        }
      });

      $('button#delete-document').on('click', function () {
        let documentId = $('input#document-id').val();

        if (documentId === '#') return;

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
            axios.get('/professor/documents/' + documentId + '/destroy')
              .then(function (response) {
                $('#documents-modal').modal('hide');
                Swal.fire( '{{ __('Deleted!') }}', '{{ __('Deletion performed successfully.') }}', 'success' );
                $('[data-document-id=' + documentId + ']').remove();
                if ($('#board-documents-list tr').length === 0) {
                  $('#board-documents-list').append(
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

      $('button#download-document').on('click', function() {
        let documentId = $('input#document-id').val();

        if (documentId === '#') return;

        window.open('/documents/' + documentId + '/download', '_blank');
      });

      $('#documents-data').on('click', '[data-document-id]', function () {
        let documentId = $(this).data('documentId');

        if (documentId === '#') {
          $('input#document-id').val('#');
          $('input#document-name').val('');
          $('input#document-date').val('');
          $('input#document-file').val('');
          $('input#document-file').next('label').text('{{ __('Choose file') }}');
          $('input#document-file').closest('.row').first().show();
          $('button#download-document').hide();
          $('button#delete-document').hide();

          $('#documents-modal').modal();
        } else {
          axios.get('/professor/boards/{{ $boardId ?? $board->id ?? '' }}/documents/' + documentId)
            .then(function (response) {
              if (!response.data) return;

              $('input#document-id').val(documentId);
              $('input#document-name').val(response.data.name);
              $('input#document-date').val(response.data.date);
              $('input#document-file').closest('.row').first().hide();
              $('button#download-document').show();
              $('button#delete-document').show();

              $('#documents-modal').modal();
            })
            .catch(errorHandler);
        }
      });
    });
  </script>

  @parent
@endsection
