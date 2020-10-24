@extends('layout.dynamic')

@section('title_prefix', __('Course Disciplines') . '|')

@section('content_header')
    <h1>{{ __('Maintenance') }}</h1>
@endsection

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Editing course discipline') . ': ' . $course_discipline->course->nome . ' / ' . $course_discipline->discipline->nome }}</h3>
  </div>
  {!! Form::open(['route' => ['registration.courses.disciplines.update', ['id' => $course_discipline->curso_id, 'idcd' => $course_discipline->id]], 'method' => 'put']) !!}

  {!! Form::hidden('curso_id', $course_discipline->curso_id) !!}

  <div class="card-body">
    @if ($errors->has('parameters-violation'))
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        <h5><i class="icon fas fa-exclamation-triangle fa-fw"></i> {{ __("Oops! There's something wrong.") }}</h5>
        {{ $errors->first('parameters-violation') }}
      </div>
    @endif
    <div class="row">
      <div class="col">
        <div class="form-group">
          {!! Form::label('disciplina_id', __('Discipline')) !!}
          {!! Form::select('disciplina_id',
            \App\Models\Disciplina::orderBy('nome')->pluck('nome', 'id')->toArray(), $course_discipline->disciplina_id,
            ['class' => 'form-control' . ($errors->has('disciplina_id') ? ' is-invalid' : '')]
          ) !!}
          {!! $errors->first('disciplina_id', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-4 col-sm-3 col-md-2">
        <div class="form-group">
          {!! Form::label('obrigatoria', __('Mandatory')) !!}
          {!! Form::select('obrigatoria', [
              true => __('Yes'),
              false => __('No')
            ], $course_discipline->obrigatoria,
            ['class' => 'form-control' . ($errors->has('obrigatoria') ? ' is-invalid' : '')]
          ) !!}
          {!! $errors->first('obrigatoria', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    {!! Form::button(
      '<i class="far fa-save fa-fw"></i> ' . __('Save!'),
      [
        'type' => 'submit',
        'class' => 'btn btn-primary'
      ]
    ) !!}
    <a href="{{ route('registration.courses.disciplines.index', ['id' => $course_discipline->curso_id]) }}" class="btn btn-outline-danger float-right">
      <i class="far fa-times-circle fa-fw"></i> {{ __('Cancel') }}
    </a>
  </div>

  {!! Form::close() !!}
</div>
@endsection
