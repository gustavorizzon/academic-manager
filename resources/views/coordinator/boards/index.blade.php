@extends('coordinator.layout')

@section('title_prefix', __('Not finished boards') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1><i class="fas fa-fw fa-clipboard-list"></i> {{ __('Not finished boards') }}</h1>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col">
    <div class="card card-outline card-info">
      <div class="card-header">
        <h3 class="card-title">{{ __('Not finished boards list') }}</h3>
        <div class="card-tools">
          <a href="{{ route('coordinator.boards.generation.index') }}" class="btn btn-tool">
            <i class="fas fa-plus fa-fw"></i>
            {{ __('Generate new boards') }}
          </a>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>{{ __('Board Description') }}</th>
              <th class="text-center">{{ __('Students') }}</th>
              <th class="text-center">{{ __('Professors') }}</th>
              <th class="text-center">{{ __('Documents') }}</th>
              <th class="text-center">{{ __('Tests') }}</th>
              <th class="text-center">{{ __('Works') }}</th>
              <th class="text-center">{{ __('Total Tasks') }}</th>
              <th class="text-center">{{ __('Total Classes') }}</th>
              <th class="text-center">{{ __('Next Class') }}</th>
            </tr>
          </thead>
          <tbody>
            @if($boards->isEmpty())
              <tr>
                <td colspan="9" class="text-center">@lang('messages.table.empty')</td>
              </tr>
            @else
              @foreach ($boards as $board)
                <tr class="clickable-row" data-href="{{ route('coordinator.boards.show', $board->id) }}">
                  <td>
                    <strong class="text-primary">{{ $board->courseDiscipline->discipline->nome }}</strong>
                    <br>
                    <span class="text-muted">{{ $board->courseDiscipline->course->nome }}</span>
                  </td>
                  <td class="text-center">{{ $board->students->count() }}</td>
                  <td class="text-center">{{ $board->professors->count() }}</td>
                  <td class="text-center">{{ $board->documents->count() }}</td>
                  <td class="text-center">{{ $board->tests()->count() }}</td>
                  <td class="text-center">{{ $board->works()->count() }}</td>
                  <td class="text-center">{{ $board->tasks->count() }}</td>
                  <td class="text-center">{{ $board->frequencies->count() }}</td>
                  <td class="text-center">
                    @if ($board->hasNextClass())
                      @if ($board->getNextClass()->data === \Carbon\Carbon::now()->toDateString())
                        <span class="badge bg-success">{{ __('Today') }}</span>
                      @else
                        <span class="badge bg-primary">{{ DateTime::createFromFormat('Y-m-d', $board->getNextClass()->data)->format('d/m/Y') }}</span>
                      @endif
                    @else
                      <span class="badge bg-secondary">{{ __('Not defined') }}</span>
                    @endif
                  </td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        <div class="col-12 d-flex justify-content-center">
          {{ $boards->links('pagination::bootstrap-4') }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@include('scripts.clickable-row')
