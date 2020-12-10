@extends('coordinator.layout')

@section('title_prefix', __('Boards with Pendencies') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1><i class="fas fa-fw fa-clipboard-list"></i> {{ __('Boards with Pendencies') }}</h1>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col">
    <div class="card card-outline card-info">
      <div class="card-header">
        <h3 class="card-title">{{ __('Boards with Pendencies list') }}</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th class="text-center">{{ __('School Year') }}</th>
              <th>{{ __('Board Description') }}</th>
              <th class="text-center">{{ __('Students') }}</th>
              <th class="text-center">{{ __('Next Class') }}</th>
              <th class="text-center">{{ __('Pendencies') }}</th>
            </tr>
          </thead>
          <tbody>
            @if($boards->isEmpty())
              <tr>
                <td colspan="5" class="text-center">@lang('messages.table.empty')</td>
              </tr>
            @else
              @foreach ($boards as $board)
                <tr class="clickable-row" data-href="{{ route('coordinator.boards.show', $board->id) }}">
                  <td class="text-center text-bold">{{ $board->periodo_letivo }}</td>
                  <td>
                    <strong class="text-primary">{{ $board->courseDiscipline->discipline->nome }}</strong>
                    <br>
                    <span class="text-muted">{{ $board->courseDiscipline->course->nome }}</span>
                  </td>
                  <td class="text-center">{{ $board->students->count() }}</td>
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
                  <td class="text-center">
                    <p class="text-bold">
                      @if (!$board->professors->count())
                        <span class="text-danger">@lang('messages.info.boards.pendencies.doesnt-have-professors')</span>
                      @endif
                      @if (empty($board->sala))
                        <br><span class="text-secondary">@lang('messages.info.boards.pendencies.classroom-not-defined')</span>
                      @endif
                    </p>
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
