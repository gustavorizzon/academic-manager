@extends('coordinator.layout')

@section('title_prefix', __('Students Graduation') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Students Graduation') }}</h1>
  </div>
</div>
@endsection

@section('content')
<div class="card card-outline card-info">
  <div class="card-header">
    <h3 class="card-title">{{ __('Students to be graduated') }}</h3>
    <div class="card-tools">
      <a href="{{ route('coordinator.graduations.index') }}" class="btn btn-sm btn-outline-info">
        <i class="fas fa-sync fa-fw"></i>
        {{ __('Reload') }}
      </a>
    </div>
  </div>
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-striped m-0">
        <thead class="bg-default">
          <tr>
            <th class="text-center">{{ __('Id') }}</th>
            <th>{{ __('Institution Member Name') }}</th>
            <th>{{ __('Course Name') }}</th>
            <th class="text-center">{{ __('Actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @if($enrollments->isEmpty())
            <tr>
              <td colspan="4" class="text-center">@lang('messages.table.empty')</td>
            </tr>
          @else
            @foreach ($enrollments as $enrollment)
              <tr>
                <td class="text-center">{{ $enrollment->id }}</td>
                <td>{{ $enrollment->institutionMember->nome }}</td>
                <td>{{ $enrollment->course->nome }}</td>
                <td class="text-center">
                  <a href="{{ route('coordinator.graduations.graduate', ['id' => $enrollment->id]) }}" class="btn btn-outline-success btn-sm">
                    <i class="fas fa-graduation-cap fa-fw"></i> {{ __('Graduate') }}</a>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@include('scripts.sweetalert2')

@if ($cantGraduate ?? false)
  @section('js')
    <script>
      Swal.fire('{{ __("Error!") }}', '{{ __("messages.validation.graduation.not-yet") }}', 'error');
    </script>
    @parent
  @endsection
@endif

@if ($graduated ?? false)
  @section('js')
    <script>
      Swal.fire('{{ __("Success!") }}', '{{ __("messages.validation.graduation.graduated") }}', 'success');
    </script>
    @parent
  @endsection
@endif
