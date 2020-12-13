@extends('layout.dynamic')

@section('title_prefix', __('Disciplines') . ' | ')

@section('content_header')
    <h1>{{ __('Registration') }}</h1>
@endsection

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Disciplines Registration') }}</h3>
  </div>

  {!! Form::open(['route' => 'registration.disciplines.store']) !!}

  <div class="card-body">
    <div class="row">
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('nome', __('Name')) !!}
          {!! Form::text('nome', null, [
            'class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('nome', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-group">
          {!! Form::label('total_creditos', __('Total credits')) !!}
          {!! Form::number('total_creditos', null, [
            'class' => 'form-control' . ($errors->has('total_creditos') ? ' is-invalid' : ''),
            'min' => '1'
          ]) !!}
          {!! $errors->first('total_creditos', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-group">
          {!! Form::label('minimo_creditos_necessarios', __('Required')) !!}
          {!! Form::number('minimo_creditos_necessarios', null, [
            'class' => 'form-control' . ($errors->has('minimo_creditos_necessarios') ? ' is-invalid' : ''),
            'min' => '1'
          ]) !!}
          {!! $errors->first('minimo_creditos_necessarios', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-group">
          {!! Form::label('media', __('Average')) !!}
          {!! Form::number('media', null, [
            'class' => 'form-control' . ($errors->has('media') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('media', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    {!! Form::button(
      '<i class="far fa-save fa-fw"></i> ' . __('Create!'),
      [
        'type' => 'submit',
        'class' => 'btn btn-success'
      ]
    ) !!}
    <a href="{{ route('registration.disciplines.index') }}" class="btn btn-outline-danger float-right">
      <i class="far fa-times-circle fa-fw"></i> {{ __('Cancel') }}
    </a>
  </div>

  {!! Form::close() !!}
</div>
@endsection
