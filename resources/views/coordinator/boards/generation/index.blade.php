@extends('coordinator.layout')

@section('title_prefix', __('Courses') . ' | ' . __('Boards Generation') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1><i class="fas fa-fw fa-clipboard-list"></i> {{ __('Available courses to board generation') }}</h1>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col">
    @if (in_array(\Carbon\Carbon::now()->format('m'), [2, 7]))
    <div class="alert alert-success">
      <h4><i class="icon fas fa-check"></i> {{ __('Great!') }}</h4>
      <p class="h6">@lang('messages.info.boards.generation.in-best-dates')</p>
    </div>
    @else
      <div class="alert alert-warning">
        <h4><i class="icon fas fa-exclamation-triangle"></i> {{ __('Important!') }}</h4>
        <p class="h6">
          @lang('messages.info.boards.generation.not-in-best-dates')
          <br>
          @lang('messages.info.boards.generation.consider')
        </p>
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="card card-outline card-info">
      <div class="card-header">
        <h3 class="card-title">{{ __('Available courses to board generation') }}</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>{{ __('Course Name') }}</th>
              <th class="text-center">{{ __('Students') }}</th>
              <th class="text-center">{{ __('Disciplines') }}</th>
              <th class="text-center">{{ __('Actions') }}</th>
            </tr>
          </thead>
          <tbody>
            @if($enrollments->isEmpty())
              <tr>
                <td colspan="9" class="text-center">@lang('messages.table.empty')</td>
              </tr>
            @else
              @foreach ($enrollments as $enrollment)
                <tr>
                  <td>{{ $enrollment->course->nome }}</td>
                  <td class="text-center">{{ $enrollment->total }}</td>
                  <td class="text-center">{{ $enrollment->course->courseDisciplines->count() }}</td>
                  <td class="text-center">
                    <a href="{{ route('coordinator.boards.generation.generate', $enrollment->curso_id) }}" class="btn btn-outline-success" title="{{ __('Generate boards') }}">
                      <i class="fas fa-fw fa-clipboard-check"></i>
                      <span>{{ __('Generate boards') }}</span>
                    </a>
                  </td>
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

@if ($generated ?? false)
  @include('scripts.sweetalert2')
  @section('js')
    <script>
      Swal.fire(
        '{{ __("Success!") }}',
        '{{ __("The boards were successfully generated.") }}',
        'success'
      );
    </script>
    @parent
  @endsection
@endif

