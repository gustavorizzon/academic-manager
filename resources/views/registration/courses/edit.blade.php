@extends('layout.dynamic')

@section('title_prefix', __('Courses') . '|')

@section('content_header')
    <h1>{{ __('Maintenance') }}</h1>
@endsection

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Editing course') . ': ' . $course->nome }}</h3>
  </div>
  {!! Form::open(['route' => ['registration.courses.update', $course->id], 'method' => 'put']) !!}

  <div class="card-body">
    <div class="row">
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('nome', __('Name')) !!}
          {!! Form::text('nome', $course->nome, [
            'class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('nome', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('quantidade_semestres', __('Semesters')) !!}
          {!! Form::number('quantidade_semestres', $course->quantidade_semestres, [
            'class' => 'form-control' . ($errors->has('quantidade_semestres') ? ' is-invalid' : ''),
            'min' => '1'
          ]) !!}
          {!! $errors->first('quantidade_semestres', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('valor', __('Price')) !!}
          {!! Form::number('valor', $course->valor, [
            'class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''),
            'step' => '0.01',
            'min' => '0.01'
          ]) !!}
          {!! $errors->first('valor', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('turno', __('Shift')) !!}
          {!! Form::select('turno', [
              \App\Models\Curso::SHIFT_MORNING => __('Morning'),
              \App\Models\Curso::SHIFT_AFTERNOON => __('Afternoon'),
              \App\Models\Curso::SHIFT_NIGHT => __('Night')
            ], $course->turno,
            [ 'class' => 'form-control' . ($errors->has('turno') ? ' is-invalid' : '') ]
          ) !!}
          {!! $errors->first('turno', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('horas_turno', __('Hours')) !!}
          {!! Form::number('horas_turno', $course->horas_turno, [
            'class' => 'form-control' . ($errors->has('horas_turno') ? ' is-invalid' : ''),
            'min' => '1',
            'max' => '5'
          ]) !!}
          {!! $errors->first('horas_turno', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
          {!! Form::label('descricao', __('Description')) !!}
          {!! Form::textarea('descricao', $course->descricao, [
            'class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('descricao', '<span class="error invalid-feedback">* :message</span>') !!}
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
    <a href="{{ route('registration.courses.index') }}" class="btn btn-outline-danger float-right">
      <i class="far fa-times-circle fa-fw"></i> {{ __('Cancel') }}
    </a>
  </div>

  {!! Form::close() !!}
</div>
@endsection
