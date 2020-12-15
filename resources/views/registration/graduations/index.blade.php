@extends('layout.dynamic')

@section('title_prefix', __('Graduations') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Registration') }}</h1>
  </div>
</div>
@endsection

@section('route-delete-prefix', 'registration/graduations')

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Graduations List') }}</h3>
    <div class="card-tools">
      @if(Auth::user()->tipo_membro === \App\Models\MembroInstituicao::COORDINATOR)
        <a href="{{ route('coordinator.graduations.index') }}" class="btn btn-outline-primary btn-tool">
          <i class="fas fa-user-graduate fa-fw"></i>
          {{ __('Graduate Students') }}
        </a>
      @endif
      <a href="{{ route('registration.graduations.create') }}" class="btn btn-tool">
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
            <th>{{ __('Course') }}</th>
            <th>{{ __('Title number') }}</th>
            <th>{{ __('Institution Member') }}</th>
            <th class="text-center">{{ __('Actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @if($graduations->isEmpty())
            <tr>
              <td colspan="5" class="text-center">@lang('messages.table.empty')</td>
            </tr>
          @else
            @foreach ($graduations as $graduation)
              <tr>
                <td class="text-center">{{ $graduation->id }}</td>
                <td>{{ $graduation->course->nome }}</td>
                <td>{{ $graduation->numero_titulo }}</td>
                <td>{{ $graduation->institution_member->nome }}</td>
                <td class="text-center">
                  <a href="{{ route('registration.graduations.edit', ['id' => $graduation->id]) }}" class="btn-sm btn-info fas fa-edit" title="{{ __('Edit') }}"></a>
                  <a href="#" class="btn-sm btn-danger btn-flat fas fa-trash" onclick="return confirmDeletion({{ $graduation->id }}, '{{ __('Title number') . ': ' . $graduation->numero_titulo }}');" title="{{ __('Delete') }}"></a>
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
      {{ $graduations->links('pagination::bootstrap-4') }}
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
