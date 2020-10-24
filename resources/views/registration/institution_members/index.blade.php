@extends('layout.dynamic')

@section('title_prefix', __('Institution Members') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Registration') }}</h1>
  </div>
</div>
@endsection

@section('route-delete-prefix', 'registration/institution_members')

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Institution Members List') }}</h3>
    <div class="card-tools">
      <a href="{{ route('registration.institution_members.create') }}" class="btn btn-tool">
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
            <th>{{ __('Birth date') }}</th>
            <th>{{ __('Gender') }}</th>
            <th>{{ __('Telephone') }}</th>
            <th>E-mail</th>
            <th>{{ __('Member type') }}</th>
            <th class="text-center">{{ __('Actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @if($institution_members->isEmpty())
            <tr>
              <td colspan="4" class="text-center">@lang('messages.table.empty')</td>
            </tr>
          @else
            @foreach ($institution_members as $institution_member)
              <tr>
                <td class="text-center">{{ $institution_member->id }}</td>
                <td>{{ $institution_member->nome }}</td>
                <td>{{ $institution_member->data_nascimento }}</td>
                <td>{{ $institution_member->orientacao_sexual }}</td>
                <td>{{ $institution_member->telefone }}</td>
                <td>{{ $institution_member->email }}</td>
                <td>{{ $institution_member->tipo_membro }}</td>
                <td class="text-center">
                  <a href="{{ route('registration.institution_members.edit', ['id' => $institution_member->id]) }}" class="btn-sm btn-info fas fa-edit" title="{{ __('Edit') }}"></a>
                  <a href="#" class="btn-sm btn-danger btn-flat fas fa-trash" onclick="return confirmDeletion({{ $institution_member->id }});" title="{{ __('Delete') }}"></a>
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
      {{ $institution_members->links('pagination::bootstrap-4') }}
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
