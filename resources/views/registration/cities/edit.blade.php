@extends('adminlte::page')

@section('title_prefix', __('Cities') . '|')

@section('content_header')
    <h1>{{ __('Maintenance') }}</h1>
@endsection

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Editing city') . ': ' . $city->nome }}</h3>
  </div>
  {!! Form::open(['route' => ['registration.cities.update', $city->id], 'method' => 'put']) !!}

  <div class="card-body">
    <div class="row">
      <div class="col">
        <div class="form-group">
          {!! Form::label('nome', __('Name')) !!}
          {!! Form::text('nome', $city->nome, [
            'class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('nome', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          {!! Form::label('estado_id', __('State')) !!}
          {!! Form::select('estado_id',
            \App\Models\Estado::orderBy('nome')->pluck('nome', 'id')->toArray(), null,
            ['class' => 'form-control' . ($errors->has('estado_id') ? ' is-invalid' : '')]
          ) !!}
          {!! $errors->first('estado_id', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    {!! Form::button(
      '<i class="far fa-save fa-fw"></i> ' . __('Save!'),
      [
        'type' => 'submit',
        'class' => 'btn btn-success'
      ]
    ) !!}
    <a href="{{ route('registration.cities.index') }}" class="btn btn-outline-danger float-right">
      <i class="far fa-times-circle fa-fw"></i> {{ __('Cancel') }}
    </a>
  </div>

  {!! Form::close() !!}
</div>
@endsection
