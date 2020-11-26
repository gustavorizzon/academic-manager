@extends('layout.dynamic')

@section('title_prefix', __('Documents') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Documents') }}</h1>
  </div>
</div>
@endsection

@section('route-delete-prefix', 'professor/documents')

@section('content')
<div class="card card-outline card-primary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Documents List') }}</h3>
  </div>
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-striped m-0">
        <thead class="bg-default">
          <tr>
            <th class="text-center">{{ __('Id') }}</th>
            <th>{{ __('Name') }}</th>
            <th class="text-center">{{ __('Date') }}</th>
            <th>{{ __('Filename') }}</th>
            <th>{{ __('Board') }}</th>
            <th class="text-center">{{ __('Actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @if($documents->isEmpty())
            <tr>
              <td colspan="6" class="text-center">@lang('messages.table.empty')</td>
            </tr>
          @else
            @foreach ($documents as $document)
              <tr>
                <td class="text-center">{{ $document->id }}</td>
                <td>{{ $document->nome }}</td>
                <td class="text-center">{{ DateTime::createFromFormat('Y-m-d', $document->data)->format('d/m/Y') }}</td>
                <td>{{ $document->nome_arquivo }}</td>
                <td>{{ $document->board->courseDiscipline->discipline->nome }} / {{ $document->board->courseDiscipline->course->nome }}</td>
                <td class="text-center">
                  <a href="{{ route('documents.download', ['docId' => $document->id]) }}" class="btn-sm btn-secondary fas fa-download" title="{{ __('Download') }}"></a>
                  <a href="{{ route('professor.documents.edit', ['id' => $document->id]) }}" class="btn-sm btn-info fas fa-edit" title="{{ __('Edit') }}"></a>
                  <a href="#" class="btn-sm btn-danger btn-flat fas fa-trash" onclick="return confirmDeletion({{ $document->id }}, '{{ $document->nome }}');" title="{{ __('Delete') }}"></a>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer">
    <div class="col-12 d-flex justify-content-center">
      {{ $documents->links('pagination::bootstrap-4') }}
    </div>
  </div>
</div>
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('vendor/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

  @parent
@endsection

@section('js')
  <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
  @include('scripts.confirmdeletion')

  @parent
@endsection
