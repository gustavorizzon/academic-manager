@extends('professor.layout')

@section('title_prefix', __('Board Visualization') . ' | ')

@section('content_header')
<div class="row mb-1">
  <div class="col-10 col-sm-9">
    <h1><i class="fas fa-fw fa-clipboard-list"></i> {{ __('Board Visualization') }}</h1>
  </div>
  <div class="col-2 col-sm-3">
    <a href="{{ route('professor.boards.index') }}" class="btn btn-outline-primary float-right">
      <i class="fa fa-arrow-left fa-fw"></i>
      <span class="d-none d-sm-inline-block">{{ __('Back') }}</span>
    </a>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col">
    <div class="card card-primary card-outline card-tabs">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-xl-4">
            <h3 class="text-primary">
              {{ $board->courseDiscipline->discipline->nome }}
              <br>
              <small class="text-muted">{{ $board->courseDiscipline->course->nome }}</small>
            </h3>
            <p class="text-muted">
              <strong>{{ __('Status') }}:</strong>
              @if ($board->status)
                <span class="badge bg-success">{{ __('Concluded') }}</span>
              @else
                <span class="badge bg-primary">{{ __('In progress') }}</span>
              @endif
            </p>
            <p class="text-muted">
              <strong>{{ __('Description') }}:</strong>
              <br>
              {{ $board->descricao }}
            </p>
            <p class="text-muted">
              <strong>{{ __('School Year') }}:</strong> {{ $board->periodo_letivo }}
            </p>
            <p class="text-muted">
              <strong>{{ __('Classroom') }}:</strong> {{ $board->sala }}
            </p>
          </div>
          <div class="col-12 col-xl-8">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="board-tab" data-toggle="pill" href="#board-data" role="tab" aria-controls="board-data" aria-selected="true">{{ __('Board')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="frequency-tab" data-toggle="pill" href="#frequency-data" role="tab" aria-controls="frequency-data" aria-selected="false">{{ __('Frequency') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tasks-tab" data-toggle="pill" href="#tasks-data" role="tab" aria-controls="tasks-data" aria-selected="false">{{ __('Tasks') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="documents-tab" data-toggle="pill" href="#documents-data" role="tab" aria-controls="documents-data" aria-selected="false">{{ __('Documents') }}</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade active show pt-3" id="board-data" role="tabpanel" aria-labelledby="board-tab">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">{{ __('Members') }}</span>
                        <span class="info-box-number text-center text-muted mb-0">{{ $board->members()->count() }}</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-pencil-ruler"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">{{ __('Tasks') }}</span>
                        <span class="info-box-number text-center text-muted mb-0">{{ $board->tasks()->count() }}</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-alt"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">{{ __('Documents') }}</span>
                        <span class="info-box-number text-center text-muted mb-0">{{ $board->documents()->count() }}<span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="card card-outline card-primary">
                      <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 58vh;">
                          <table class="table table-hover table-head-fixed text-nowrap m-0">
                            <thead>
                              <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Member type') }}</th>
                                <th>{{ __('Status') }}</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if($board->members->isEmpty())
                                <tr>
                                  <td colspan="3" class="text-center">@lang('messages.table.empty')</td>
                                </tr>
                              @else
                                @foreach ($board->members as $member)
                                  <tr>
                                    <td>{{ $member->institutionMember->nome }}</td>
                                    <td>{!!
                                      $member->institutionMember->tipo_membro == \App\Models\MembroInstituicao::PROFESSOR
                                        ? ('<span class="badge badge-secondary">' . __('Professor') . '</span>')
                                        : ('<span class="badge badge-primary">' . __('Student') . '</span>')
                                    !!}</td>
                                    <td>
                                      @switch($member->status)
                                        @case(\App\Models\MembroBanca::STATUS_ENROLLED)
                                          <span class="badge badge-secondary">{{ __('Enrolled') }}</span>
                                          @break
                                        @case(\App\Models\MembroBanca::STATUS_APPROVED)
                                          <span class="badge badge-success">{{ __('Approved') }}</span>
                                          @break
                                        @case(\App\Models\MembroBanca::STATUS_DISAPPROVED)
                                          <span class="badge badge-danger">{{ __('Disapproved') }}</span>
                                          @break
                                        @case(\App\Models\MembroBanca::STATUS_EXAM)
                                          <span class="badge badge-warning">{{ __('Exam') }}</span>
                                          @break
                                        @default
                                          -
                                      @endswitch
                                    </td>
                                  </tr>
                                @endforeach
                              @endif
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade pt-3" id="frequency-data" role="tabpanel" aria-labelledby="frequency-tab">
                <div class="table-responsive" style="max-height: 58vh;">
                  <table class="table table-hover table-head-fixed text-nowrap m-0">
                    <thead>
                      <tr>
                        <th class="text-center">{{ __('Date') }}</th>
                        <th>{{ __('Class Summary') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($board->frequencies->isEmpty())
                        <tr>
                          <td colspan="4" class="text-center">@lang('messages.table.empty')</td>
                        </tr>
                      @else
                        @foreach ($board->frequencies as $frequency)
                          <tr data-frequency-id="{{ $frequency->id }}">
                            <td class="text-center">
                              @if ($frequency->data === \Carbon\Carbon::now()->toDateString())
                                <span class="badge bg-success">{{ __('Today') }}</span>
                              @else
                                <span class="badge bg-secondary">{{ DateTime::createFromFormat('Y-m-d', $frequency->data)->format('d/m/Y') }}</span>
                              @endif
                            </td>
                            <td>{{ Str::limit($frequency->resumo_aula, 70) }}</td>
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade pt-3" id="tasks-data" role="tabpanel" aria-labelledby="tasks-tab">

              </div>
              <div class="tab-pane fade pt-3" id="documents-data" role="tabpanel" aria-labelledby="documents-tab">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@parent
@endsection

@include('scripts.clickable-row')
@include('scripts.axios')
@include('scripts.sweetalert2')

@include('partials.frequency')
