@extends('layout.dynamic')

@section('title_prefix', __('Course Disciplines') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Registration') }}</h1>
  </div>
</div>
@endsection

@section('route-delete-prefix', "registration/courses/{$course_id}/disciplines")

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Listing disciplines of the course') . ': ' . \App\Models\Curso::find($course_id)->nome }}</h3>
    <div class="card-tools">
      <a href="{{ route('registration.courses.index') }}" class="btn btn-tool">
        <i class="fa fa-arrow-left fa-fw"></i>
        {{ __('Back') }}
      </a>
      <a href="{{ route('registration.courses.disciplines.create', ['id' => $course_id]) }}" class="btn btn-tool">
        <i class="fa fa-plus fa-fw"></i>
        {{ __('Add') }}
      </a>
    </div>
  </div>
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-striped m-0">
        <thead class="bg-default">
          <tr>
            <th>{{ __('Name') }}</th>
            <th>{{ __('Total credits') }}</th>
            <th>{{ __('Required') }}</th>
            <th>{{ __('Mandatory') }}</th>
            <th class="text-center">{{ __('Actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @if($course_disciplines->isEmpty())
            <tr>
              <td colspan="5" class="text-center">@lang('messages.table.empty')</td>
            </tr>
          @else
            @foreach ($course_disciplines as $course_discipline)
              <tr>
                <td>{{ $course_discipline->discipline->nome }}</td>
                <td>{{ $course_discipline->discipline->total_creditos }}</td>
                <td>{{ $course_discipline->discipline->minimo_creditos_necessarios }}</td>
                <td>{{ $course_discipline->obrigatoria ? __('Yes') : __('No') }}</td>
                <td class="text-center">
                  <a href="{{ route('registration.courses.disciplines.edit', ['id' => $course_id, 'idcd' => $course_discipline->id]) }}" class="btn-sm btn-info fas fa-edit" title="{{ __('Edit') }}"></a>
                  <a href="#" class="btn-sm btn-danger btn-flat fas fa-trash" onclick="return confirmDeletion({{ $course_discipline->id }}, '{{ $course_discipline->course->nome . ' / ' . $course_discipline->discipline->nome }}');" title="{{ __('Delete') }}"></a>
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

@section('css')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endsection

@section('js')
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
@include('scripts.confirmdeletion')
@endsection
