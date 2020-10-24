@extends('coordinator.layout')

@section('title_prefix', __('Enrollments') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Enrollments') }}</h1>
  </div>
</div>
@endsection

@section('route-delete-prefix', 'coordinator/enrollments')

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Enrollments List') }}</h3>
    <div class="card-tools">
      <a href="{{ route('coordinator.enrollments.create') }}" class="btn btn-tool">
        <i class="fas fa-plus fa-fw"></i>
        {{ __('Enroll') }}
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
            <th>{{ __('Status') }}</th>
            <th class="text-center">{{ __('Actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @if($enrollments->isEmpty())
            <tr>
              <td colspan="5" class="text-center">@lang('messages.table.empty')</td>
            </tr>
          @else
            @foreach ($enrollments as $enrollment)
              <tr>
                <td class="text-center">{{ $enrollment->id }}</td>
                <td>{{ $enrollment->institutionMember->nome }}</td>
                <td>{{ $enrollment->course->nome }}</td>
                <td>
                  @switch($enrollment->status)
                    @case(\App\Models\Matricula::ENROLLED)
                      <span class="badge badge-primary">{{ __('Enrolled') }}</span>
                      @break

                    @case(\App\Models\Matricula::LOCKED)
                      <span class="badge badge-danger">{{ __('Locked') }}</span>
                      @break

                    @case(\App\Models\Matricula::CONCLUDED)
                      <span class="badge badge-success">{{ __('Concluded') }}</span>
                      @break

                    @default
                      -
                  @endswitch
                </td>
                <td class="text-center">
                  <a href="{{ route('coordinator.enrollments.edit', ['id' => $enrollment->id]) }}" class="btn-sm btn-info fas fa-edit" title="{{ __('Edit') }}"></a>
                  <a href="#" class="btn-sm btn-danger btn-flat fas fa-trash" onclick="return confirmDeletion({{ $enrollment->id }});" title="{{ __('Delete') }}"></a>
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
      {{ $enrollments->links('pagination::bootstrap-4') }}
    </div>
  </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endsection

@section('js')
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@include('scripts.confirmdeletion')
@endsection
