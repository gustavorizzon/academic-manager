@extends('coordinator.layout')

@section('title_prefix', __('Board Visualization') . ' | ')

@section('content_header')
<div class="row mb-1">
  <div class="col-10 col-sm-9">
    <h1><i class="fas fa-fw fa-clipboard-list"></i> {{ __('Board Visualization') }}</h1>
  </div>
  <div class="col-2 col-sm-3">
    <a href="{{ route('coordinator.boards.index') }}" class="btn btn-outline-primary float-right">
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
              <textarea rows="10" class="disabled form-control" disabled>{{ $board->descricao }}</textarea>
            </p>
            <p class="text-muted">
              <strong>{{ __('School Year') }}:</strong> {{ $board->periodo_letivo }}
            </p>
            <div class="form-group row">
              <label for="board-classroom" class="text-muted ml-2" style="width:95px;">{{ __('Classroom') }}:</label>
              <div class="input-group input-group-sm" style="width:150px;">
                <input type="text" class="form-control" id="board-classroom" value="{{ $board->sala }}" data-board-id="{{ $board->id }}">
                <span class="input-group-append">
                  <button type="button" class="btn btn-info" id="save-board-classroom">
                    <i class="fas fa-check"></i>
                  </button>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-8">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="members-tab" data-toggle="pill" href="#members-data" role="tab" aria-controls="members-data" aria-selected="true">{{ __('Members')}}</a>
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
              <div class="tab-pane fade active show pt-3" id="members-data" role="tabpanel" aria-labelledby="members-tab">
                <div class="row">
                  <div class="col-12">
                    <div class="card card-outline card-primary">
                      <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 58vh;">
                          <table class="table table-hover table-head-fixed text-nowrap m-0">
                            <thead>
                              <tr>
                                <th class="text-center" style="width:40px;">
                                  <button id="add-professor" type="button" class="btn btn-sm btn-outline-primary" title="{{ __('Add a Professor') }}">
                                    <i class="fas fa-plus fa-fw"></i>
                                  </button>
                                </th>
                                <th>{{ __('Name') }}</th>
                                <th class="text-center">{{ __('Member type') }}</th>
                                <th class="text-center">{{ __('Status') }}</th>
                                <th class="text-center">{{ __('Credits') }}</th>
                              </tr>
                            </thead>
                            <tbody id="board-members-list">
                              @if($board->members->isEmpty())
                                <tr>
                                  <td colspan="5" class="text-center">@lang('messages.table.empty')</td>
                                </tr>
                              @else
                                @foreach ($board->members as $member)
                                  <tr>
                                    @if($member->institutionMember->tipo_membro == \App\Models\MembroInstituicao::PROFESSOR)
                                      <td class="text-center">
                                        <button data-remove-professor="true" data-member-id="{{ $member->id }}" data-member-name="{{ $member->institutionMember->nome }}" type="button" class="btn btn-sm btn-link text-danger" title="{{ __('Remove Professor') }}">
                                          <i class="fas fa-trash fa-fw"></i>
                                        </button>
                                      </td>
                                      <td>{{ $member->institutionMember->nome }}</td>
                                      <td class="text-center">
                                        <span class="badge badge-info">{{ __('Professor') }}</span>
                                      </td>
                                      <td class="text-center">-</td>
                                      <td class="text-center">-</td>
                                    @else
                                      <td class="text-center">
                                        @if($member->status != \App\Models\MembroBanca::STATUS_WAIVER)
                                          <button data-toggle-student="true" data-member-id="{{ $member->id }}" data-member-name="{{ $member->institutionMember->nome }}" type="button" class="btn btn-sm btn-link text-warning" title="{{ __('Waiver') }}">
                                            <i class="fas fa-power-off fa-fw"></i>
                                          </button>
                                        @endif
                                      </td>
                                      <td>{{ $member->institutionMember->nome }}</td>
                                      <td class="text-center">
                                        <span class="badge badge-primary">{{ __('Student') }}</span>
                                      </td>
                                      <td class="text-center">
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
                                          @case(\App\Models\MembroBanca::STATUS_WAIVER)
                                            <span class="badge badge-warning">{{ __('Waiver') }}</span>
                                            @break
                                          @default
                                            -
                                        @endswitch
                                      </td>
                                      <td class="text-center">{{ $member->creditos }}</td>
                                    @endif
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
                <div class="row">
                  <div class="col-12">
                    <div class="card card-outline card-danger">
                      <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 58vh;">
                          <table class="table table-hover table-head-fixed text-nowrap m-0">
                            <thead>
                              <tr>
                                <th class="text-center" style="width:40px;"></th>
                                <th class="text-center" style="width:120px;">{{ __('Date') }}</th>
                                <th>{{ __('Class Summary') }}</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if($board->frequencies->isEmpty())
                                <tr>
                                  <td colspan="3" class="text-center">@lang('messages.table.empty')</td>
                                </tr>
                              @else
                                @foreach ($board->frequencies as $frequency)
                                  <tr data-frequency-id="{{ $frequency->id }}" data-frequency-date="{{ $frequency->data }}">
                                    @if (DateTime::createFromFormat('Y-m-d', $frequency->data) > (new DateTime))
                                      <td class="text-center">
                                        <i class="far fa-circle text-secondary" title="{{ __('Pending') }}"></i>
                                      </td>
                                      <td class="text-center">
                                        <span class="badge bg-secondary">
                                          {{ DateTime::createFromFormat('Y-m-d', $frequency->data)->format('d/m/Y') }}
                                        </span>
                                      </td>
                                    @else
                                      @if ($frequency->data === (new DateTime)->format('Y-m-d'))
                                        <td class="text-center">
                                          <i class="far fa-play-circle text-warning" title="{{ __('In progress') }}"></i>
                                        </td>
                                        <td class="text-center">
                                          <span class="badge bg-success">
                                            {{ __('Today') }}
                                          </span>
                                        </td>
                                      @else
                                        <td class="text-center">
                                          <i class="far fa-check-circle text-success" title="{{ __('Concluded') }}"></i>
                                        </td>
                                        <td class="text-center">
                                          <span class="badge bg-success">
                                            {{ DateTime::createFromFormat('Y-m-d', $frequency->data)->format('d/m/Y') }}
                                          </span>
                                        </td>
                                      @endif
                                    @endif
                                    <td>{{ empty($frequency->resumo_aula) ? (__('To be defined.') ) : Str::limit($frequency->resumo_aula, 70) }}</td>
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
              <div class="tab-pane fade pt-3" id="tasks-data" role="tabpanel" aria-labelledby="tasks-tab">
                <div class="row">
                  <div class="col-12">
                    <div class="card card-outline card-primary">
                      <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 58vh;">
                          <table class="table table-hover table-head-fixed text-nowrap m-0">
                            <thead>
                              <tr>
                                <th>{{ __('Content') }}</th>
                                <th class="text-center">{{ __('Date') }}</th>
                                <th class="text-center">{{ __('Type') }}</th>
                                <th class="text-right">{{ __('Weight') }}</th>
                              </tr>
                            </thead>
                            <tbody id="board-tasks-list">
                              @if($board->tasks->isEmpty())
                                <tr>
                                  <td colspan="4" class="text-center">@lang('messages.table.empty')</td>
                                </tr>
                              @else
                                @foreach ($board->tasks as $task)
                                  <tr>
                                    <td>{{ Str::limit($task->conteudo, 40) }}</td>
                                    <td class="text-center">
                                      @if ($task->data === \Carbon\Carbon::now()->toDateString())
                                        <span class="badge bg-success">{{ __('Today') }}</span>
                                      @else
                                        <span class="badge bg-secondary">{{ DateTime::createFromFormat('Y-m-d', $task->data)->format('d/m/Y') }}</span>
                                      @endif
                                    </td>
                                    <td class="text-center">
                                      @switch($task->tipo)
                                        @case(\App\Models\Avaliacao::TYPE_TEST)
                                          <span class="badge badge-primary">{{ __('Test') }}</span>
                                          @break
                                        @case(\App\Models\Avaliacao::TYPE_WORK)
                                          <span class="badge badge-success">{{ __('Work') }}</span>
                                          @break
                                        @default
                                          -
                                      @endswitch
                                    </td>
                                    <td class="text-right">{{ $task->peso }}</td>
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
              <div class="tab-pane fade pt-3" id="documents-data" role="tabpanel" aria-labelledby="documents-tab">
                <div class="row">
                  <div class="col-12">
                    <div class="card card-outline card-success">
                      <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 58vh;">
                          <table class="table table-hover table-head-fixed text-nowrap m-0">
                            <thead>
                              <tr>
                                <th class="text-center" style="width:40px;"></th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Date') }}</th>
                                <th>{{ __('Filename') }}</th>
                                <th class="text-right">{{ __('Size') }}</th>
                              </tr>
                            </thead>
                            <tbody id="board-documents-list">
                              @if($board->documents->isEmpty())
                                <tr>
                                  <td colspan="5" class="text-center">@lang('messages.table.empty')</td>
                                </tr>
                              @else
                                @foreach ($board->documents as $document)
                                  <tr>
                                    <td class="text-center">
                                      <a href="{{ route('documents.download', ['docId' => $document->id]) }}" class="btn-sm btn-link fas fa-download" title="{{ __('Download') }}"></a>
                                    </td>
                                    <td>{{ $document->nome }}</td>
                                    <td>{{ DateTime::createFromFormat('Y-m-d', $document->data)->format('d/m/Y') }}</td>
                                    <td>{{ $document->nome_arquivo }}</td>
                                    <td class="text-right">{{ $document->tamanho_arquivo }} B</td>
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
@include('scripts.select2')
@include('scripts.moment')

@include('partials.coordinator.classroom')
@include('partials.coordinator.members')
@include('partials.coordinator.frequency')
