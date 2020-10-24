@extends('layout.dynamic')

@section('title_prefix', __('Graduations') . ' | ')

@section('content_header')
    <h1>{{ __('Registration') }}</h1>
@endsection

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Graduations Registration') }}</h3>
  </div>

  {!! Form::open(['route' => 'registration.graduations.store']) !!}

  <div class="card-body">
    <div class="row">
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('titulo', __('Title')) !!}
          {!! Form::text('titulo', null, [
            'class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('titulo', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          {!! Form::label('numero_titulo', __('Title Number')) !!}
          {!! Form::text('numero_titulo', null, [
            'class' => 'form-control' . ($errors->has('numero_titulo') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('numero_titulo', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('membro_instituicao_id', __('Institution Member')) !!}
          {!! Form::select('membro_instituicao_id',
            \App\Models\MembroInstituicao::orderBy('nome')->pluck('nome', 'id')->toArray(), null,
            ['class' => 'form-control' . ($errors->has('membro_instituicao_id') ? ' is-invalid' : '')]
          ) !!}
          {!! $errors->first('membro_instituicao_id', '<span class="error invalid-feedback">* :message</span>') !!}
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
    <a href="{{ route('registration.graduations.index') }}" class="btn btn-outline-danger float-right">
      <i class="far fa-times-circle fa-fw"></i> {{ __('Cancel') }}
    </a>
  </div>

  {!! Form::close() !!}
</div>
@endsection
