@extends('layout.dynamic')

@section('title_prefix', __('States') . '|')

@section('content_header')
    <h1>{{ __('Maintenance') }}</h1>
@endsection

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Editing state') . ': ' . $state->nome }}</h3>
  </div>
  {!! Form::open(['route' => ['registration.states.update', $state->id], 'method' => 'put']) !!}

  <div class="card-body">
    <div class="row">
      <div class="col">
        <div class="form-group">
          {!! Form::label('nome', __('Name')) !!}
          {!! Form::text('nome', $state->nome, [
            'class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('nome', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          {!! Form::label('uf', __('Initials')) !!}
          {!! Form::text('uf', $state->uf, [
            'class' => 'form-control' . ($errors->has('uf') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('uf', '<span class="error invalid-feedback">* :message</span>') !!}
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
    <a href="{{ route('registration.states.index') }}" class="btn btn-outline-danger float-right">
      <i class="far fa-times-circle fa-fw"></i> {{ __('Cancel') }}
    </a>
  </div>

  {!! Form::close() !!}
</div>
@endsection
