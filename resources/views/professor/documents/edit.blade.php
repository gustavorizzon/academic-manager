@extends('layout.dynamic')

@section('title_prefix', __('Cities') . '|')

@section('content_header')
  <h1>{{ __('Documents') }}</h1>
@endsection

@section('content')
<div class="card card-outline card-primary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Editing document') . ': ' . $document->nome }}</h3>
  </div>
  {!! Form::open(['route' => ['professor.documents.update', $document->id], 'method' => 'put']) !!}

  <div class="card-body">
    <div class="row">
      <div class="col-sm">
        <div class="form-group">
          {!! Form::label('name', __('Name')) !!}
          {!! Form::text('name', $document->nome, [
            'class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('nome', '<span class="error invalid-feedback">* :message</span>') !!}
        </div>
      </div>
      <div class="col-sm-4 col-md-3">
        <div class="form-group">
          {!! Form::label('date', __('Date')) !!}
          {!! Form::date('date', $document->data, [
            'class' => 'form-control' . ($errors->has('data') ? ' is-invalid' : '')
          ]) !!}
          {!! $errors->first('data', '<span class="error invalid-feedback">* :message</span>') !!}
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
    <a href="{{ route('professor.documents.index') }}" class="btn btn-outline-danger float-right">
      <i class="far fa-times-circle fa-fw"></i> {{ __('Cancel') }}
    </a>
  </div>

  {!! Form::close() !!}
</div>
@endsection
