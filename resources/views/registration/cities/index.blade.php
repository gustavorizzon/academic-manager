@extends('layout.dynamic')

@section('title_prefix', __('Cities') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Registration') }}</h1>
  </div>
</div>
@endsection

@section('route-delete-prefix', 'registration/cities')

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Cities List') }}</h3>
    <div class="card-tools">
      <a href="{{ route('registration.cities.create') }}" class="btn btn-tool">
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
            <th>{{ __('State') }}</th>
            <th class="text-center">{{ __('Actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @if($cities->isEmpty())
            <tr>
              <td colspan="4" class="text-center">@lang('messages.table.empty')</td>
            </tr>
          @else
            @foreach ($cities as $city)
              <tr>
                <td class="text-center">{{ $city->id }}</td>
                <td>{{ $city->nome }}</td>
                <td>{{ $city->state->nome }} / {{ $city->state->uf }}</td>
                <td class="text-center">
                  <a href="{{ route('registration.cities.edit', ['id' => $city->id]) }}" class="btn-sm btn-info fas fa-edit" title="{{ __('Edit') }}"></a>
                  <a href="#" class="btn-sm btn-danger btn-flat fas fa-trash" onclick="return confirmDeletion({{ $city->id }});" title="{{ __('Delete') }}"></a>
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
      {{ $cities->links('pagination::bootstrap-4') }}
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
