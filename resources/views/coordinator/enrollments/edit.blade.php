@extends('layout.dynamic')

@section('title_prefix', __('Enrollments') . '|')

@section('content_header')
    <h1>{{ __('Coordinator') }}</h1>
@endsection

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Editing enrollment') . ': ' . $enrollment->institutionMember->nome . ' / ' . $enrollment->course->nome }}</h3>
  </div>
  {!! Form::open(['route' => ['coordinator.enrollments.update', $enrollment->id], 'method' => 'put']) !!}

  <div class="card-body">
    <div class="row">
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('membro_instituicao_id', __('Institution Member')) !!}
          {!! Form::select('membro_instituicao_id',
            \App\Models\MembroInstituicao::where('tipo_membro', \App\Models\MembroInstituicao::STUDENT)->pluck('nome', 'id')->toArray(),
            $enrollment->membro_instituicao_id,
            ['class' => 'form-control' . ($errors->has('membro_instituicao_id') ? ' is-invalid' : '')]
          ) !!}
          {!! $errors->first('membro_instituicao_id', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('curso_id', __('Course')) !!}
          {!! Form::select('curso_id',
            \App\Models\Curso::orderBy('nome')->pluck('nome', 'id')->toArray(),
            $enrollment->curso_id,
            ['class' => 'form-control' . ($errors->has('curso_id') ? ' is-invalid' : '')]
          ) !!}
          {!! $errors->first('curso_id', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm-3 col-md-2">
        <div class="form-group">
          {!! Form::label('status', __('Status')) !!}
          {!! Form::select('status', [
              \App\Models\Matricula::ENROLLED => __('Enrolled'),
              \App\Models\Matricula::LOCKED => __('Locked'),
              \App\Models\Matricula::CONCLUDED => __('Concluded')
            ],
            $enrollment->status,
            ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : '')]
          ) !!}
          {!! $errors->first('status', '<span class="error invalid-feedback">* :message</span>') !!}
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
    <a href="{{ route('coordinator.enrollments.index') }}" class="btn btn-outline-danger float-right">
      <i class="far fa-times-circle fa-fw"></i> {{ __('Cancel') }}
    </a>
  </div>

  {!! Form::close() !!}
</div>
@endsection
