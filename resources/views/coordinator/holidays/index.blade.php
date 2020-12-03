@extends('coordinator.layout')

@section('title_prefix', __('Holidays') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Holidays') }}</h1>
  </div>
</div>
@endsection

@section('route-delete-prefix', 'coordinator/holidays')

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Holidays List') }}</h3>
    <div class="card-tools">
      <a href="{{ route('coordinator.holidays.create') }}" class="btn btn-tool">
        <i class="fas fa-plus fa-fw"></i>
        {{ __('New') }}
      </a>
    </div>
  </div>
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-striped m-0">
        <thead class="bg-default">
          <tr>
            <th class="text-center">{{ __('Id') }}</th>
            <th>{{ __('Name') }}</th>
            <th class="text-center">{{ __('Date') }}</th>
            <th class="text-center">{{ __('Actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @if($holidays->isEmpty())
            <tr>
              <td colspan="4" class="text-center">@lang('messages.table.empty')</td>
            </tr>
          @else
            @foreach ($holidays as $holiday)
              <tr>
                <td class="text-center">{{ $holiday->id }}</td>
                <td>{{ $holiday->nome }}</td>
                <td class="text-center">{{ DateTime::createFromFormat('Y-m-d', $holiday->data)->format('d/m/Y') }}</td>
                <td class="text-center">
                  <a href="{{ route('coordinator.holidays.edit', ['id' => $holiday->id]) }}" class="btn-sm btn-info fas fa-edit" title="{{ __('Edit') }}"></a>
                  <a href="#" class="btn-sm btn-danger btn-flat fas fa-trash" onclick="return confirmDeletion({{ $holiday->id }}, '{{ $holiday->nome }}');" title="{{ __('Delete') }}"></a>
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
      {{ $holidays->links('pagination::bootstrap-4') }}
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
