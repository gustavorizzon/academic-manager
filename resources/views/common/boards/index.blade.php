@extends('professor.layout')

@section('title_prefix', __($pageTitle) . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1><i class="fas fa-fw fa-clipboard-list"></i> {{ __($pageTitle) }}</h1>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col">
    <div class="card card-outline card-{{ $cardColor }}">
      <div class="card-header">
        <h3 class="card-title">{{ __($cardTitle) }}</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>{{ __('Board Description') }}</th>
              <th class="text-center">{{ __('Students') }}</th>
              <th class="text-center">{{ __('Professors') }}</th>
              <th class="text-center">{{ __('Tests') }}</th>
              <th class="text-center">{{ __('Works') }}</th>
              <th class="text-center">{{ __('Total Tasks') }}</th>
            </tr>
          </thead>
          <tbody>
            @if($boards->isEmpty())
              <tr>
                <td colspan="6" class="text-center">@lang('messages.table.empty')</td>
              </tr>
            @else
              @foreach ($boards as $board)
                <tr class="clickable-row" data-href="{{ route($rowClickRoute, $board->id) }}">
                  <td>
                    <strong class="text-primary">{{ $board->courseDiscipline->discipline->nome }}</strong>
                    <br>
                    <span class="text-muted">{{ $board->courseDiscipline->course->nome }}</span>
                  </td>
                  <td class="text-center">{{ $board->students->count() }}</td>
                  <td class="text-center">{{ $board->professors->count() }}</td>
                  <td class="text-center">{{ $board->tests()->count() }}</td>
                  <td class="text-center">{{ $board->works()->count() }}</td>
                  <td class="text-center">{{ $board->tasks->count() }}</td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@include('scripts.clickable-row')
