@extends('layout.dynamic')

@section('title_prefix', __('Holidays') . ' | ')

@section('content_header')
    <h1>{{ __('Holidays') }}</h1>
@endsection

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Holidays Registration') }}</h3>
  </div>

  {!! Form::open(['route' => 'coordinator.holidays.store']) !!}

  <div class="card-body">
    <div class="row">
      <div class="col">
        <div class="form-group">
          {!! Form::label('nome', __('Name')) !!}
          {!! Form::text('nome', null, [
            'class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('nome', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          {!! Form::label('data', __('Date')) !!}
          {!! Form::date('data', null, [
            'class' => 'form-control' . ($errors->has('data') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('data', '<span class="error invalid-feedback">* :message</span>') !!}
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
    <a href="{{ route('coordinator.holidays.index') }}" class="btn btn-outline-danger float-right">
      <i class="far fa-times-circle fa-fw"></i> {{ __('Cancel') }}
    </a>
  </div>

  {!! Form::close() !!}
</div>
@endsection
