@extends('layout.dynamic')

@section('title_prefix', __('Institution Members') . '|')

@section('content_header')
    <h1>{{ __('Maintenance') }}</h1>
@endsection

@section('content')
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ __('Editing institution member') . ': ' . $institution_member->nome }}</h3>
  </div>
  {!! Form::open(['route' => ['registration.institution_members.update', $institution_member->id], 'method' => 'put']) !!}

  <div class="card-body">
    <fieldset>
      <legend>{{ __('Personal information') }}</legend>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('nome', __('Name')) !!}
            {!! Form::text('nome', $institution_member->nome, [
              'class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : '')
            ]) !!}
            {!! $errors->first('nome', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('rg', 'RG') !!}
            {!! Form::text('rg', $institution_member->rg, [
              'class' => 'form-control' . ($errors->has('rg') ? ' is-invalid' : '')
            ]) !!}
            {!! $errors->first('rg', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('cpf', 'CPF') !!}
            {!! Form::text('cpf', $institution_member->cpf, [
              'class' => 'form-control' . ($errors->has('cpf') ? ' is-invalid' : ''),
              'data-inputmask-mask' => '999.999.999-99'
            ]) !!}
            {!! $errors->first('cpf', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('tipo_membro', __('Member type')) !!}
            {!! Form::select('tipo_membro',
              [
                \App\Models\MembroInstituicao::ADMIN => __('Administrator'),
                \App\Models\MembroInstituicao::COORDINATOR => __('Coordinator'),
                \App\Models\MembroInstituicao::PROFESSOR => __('Professor'),
                \App\MOdels\MembroInstituicao::STUDENT => __('Student')
              ], $institution_member->tipo_membro,
              ['class' => 'form-control' . ($errors->has('tipo_membro') ? ' is-invalid' : '')
            ]) !!}
            {!! $errors->first('tipo_membro', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('data_nascimento', __('Birth date')) !!}
            {!! Form::date('data_nascimento', $institution_member->data_nascimento, [
              'class' => 'form-control' . ($errors->has('data_nascimento') ? ' is-invalid' : '')
            ]) !!}
            {!! $errors->first('data_nascimento', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('orientacao_sexual', __('Gender')) !!}
            {!! Form::select('orientacao_sexual',
              [
                'M' => __('Male'),
                'F' => __('Female'),
                'O' => __('Other'),
              ], $institution_member->orientacao_sexual,
              ['class' => 'form-control' . ($errors->has('orientacao_sexual') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('orientacao_sexual', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('estado_civil', __('Marital status')) !!}
            {!! Form::select('estado_civil',
              [
                'S' => __('Not married'),
                'C' => __('Married'),
                'D' => __('Divorced')
              ], $institution_member->estado_civil,
              ['class' => 'form-control' . ($errors->has('estado_civil') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('estado_civil', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>{{ __('Family')}}</legend>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('nome_pai', __("Father's name")) !!}
            {!! Form::text('nome_pai',  $institution_member->nome_pai,
              ['class' => 'form-control' . ($errors->has('nome_pai') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('nome_pai', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('nome_mae', __("Mother's name")) !!}
            {!! Form::text('nome_mae', $institution_member->nome_mae,
              ['class' => 'form-control' . ($errors->has('nome_mae') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('nome_mae', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>{{ __('Contact information') }}</legend>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('telefone', __("Telephone")) !!}
            {!! Form::text('telefone', $institution_member->telefone,
              ['class' => 'form-control' . ($errors->has('telefone') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('telefone', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('email', __("E-mail")) !!}
            {!! Form::email('email', $institution_member->email,
              ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('email', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>{{ __('Address') }}</legend>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('rua', __("Street")) !!}
            {!! Form::text('rua', $institution_member->rua,
              ['class' => 'form-control' . ($errors->has('rua') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('rua', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
            {!! Form::label('numero_rua', __("Number")) !!}
            {!! Form::number('numero_rua', $institution_member->numero_rua,
              ['class' => 'form-control' . ($errors->has('numero_rua') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('numero_rua', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('bairro', __("Neighborhood")) !!}
            {!! Form::text('bairro', $institution_member->bairro,
              ['class' => 'form-control' . ($errors->has('bairro') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('bairro', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('complemento', __("Address add-on")) !!}
            {!! Form::text('complemento', $institution_member->complemento,
              ['class' => 'form-control' . ($errors->has('complemento') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('complemento', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('referencia', __("Reference")) !!}
            {!! Form::text('referencia', $institution_member->referencia,
              ['class' => 'form-control' . ($errors->has('referencia') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('referencia', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('cidade_id', __('City')) !!}
            {!! Form::select('cidade_id',
              \App\Models\Cidade::orderBy('nome')->pluck('nome', 'id')->toArray(), $institution_member->cidade_id,
              ['class' => 'form-control' . ($errors->has('cidade_id') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('cidade_id', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>{{ __('Login information') }}</legend>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('login', __("Login")) !!}
            {!! Form::text('login', $institution_member->login,
              ['class' => 'form-control' . ($errors->has('login') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('login', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('senha', __("Password")) !!}
            {!! Form::password('senha',
              ['class' => 'form-control' . ($errors->has('senha') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('senha', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            {!! Form::label('senha_confirmation', __("Password confirmation")) !!}
            {!! Form::password('senha_confirmation',
              ['class' => 'form-control' . ($errors->has('senha_confirmation') ? ' is-invalid' : '')]
            ) !!}
            {!! $errors->first('senha_confirmation', '<span class="error invalid-feedback">* :message</span>') !!}
          </div>
        </div>
      </div>
    </fieldset>
  </div>
  <div class="card-footer">
    {!! Form::button(
      '<i class="far fa-save fa-fw"></i> ' . __('Save!'),
      [
        'type' => 'submit',
        'class' => 'btn btn-success'
      ]
    ) !!}
    <a href="{{ route('registration.institution_members.index') }}" class="btn btn-outline-danger float-right">
      <i class="far fa-times-circle fa-fw"></i> {{ __('Cancel') }}
    </a>
  </div>

  {!! Form::close() !!}
</div>
@endsection

@include('scripts.inputmask')
