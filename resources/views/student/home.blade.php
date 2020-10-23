@extends('adminlte::page')

@section('title_prefix', __('Student Dashboard') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Student Dashboard') }}</h1>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ $remainingBoardsCount }}</h3>
        <p>{{ __('Remaining Boards') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-clipboard-list"></i>
      </div>
      <a href="{{ route('student.boards.index') }}" class="small-box-footer">{{ __('More info')}} <i class="fas fa-fw fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $documentsCount }}</h3>
        <p>{{ __('Documents') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-file-alt"></i>
      </div>
      <a href="{{ route('student.documents.index') }}" class="small-box-footer">{{ __('More info')}} <i class="fas fa-fw fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ $pendingTasksCount }}</h3>
        <p>{{ __('Tasks') . ' (' . __('Tests & Jobs') . ')' }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-pencil-ruler"></i>
      </div>
      <a href="{{ route('student.tasks.pending') }}" class="small-box-footer">{{ __('More info')}} <i class="fas fa-fw fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ $foulsCount }}</h3>
        <p>{{ __('Fouls') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-clock"></i>
      </div>
      <a href="{{ route('student.frequency.fouls') }}" class="small-box-footer">{{ __('More info')}} <i class="fas fa-fw fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-7">
    <div class="card card-outline card-success">
      <div class="card-header border-transparent">
        <h3 class="card-title">{{ __('Your boards') }}</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive" style="max-height: 500px;">
          <table class="table table-hover table-head-fixed text-nowrap m-0">
            <thead>
              <tr>
                <th class="text-center">{{ __('Id') }}</th>
                <th>{{ __('Short Description') }}</th>
                <th class="text-center">{{ __('Status') }}</th>
                <th>{{ __('Discipline') }}</th>
              </tr>
            </thead>
            <tbody>
              @if($boards->isEmpty())
                <tr>
                  <td colspan="4" class="text-center">@lang('messages.table.empty')</td>
                </tr>
              @else
                @foreach ($boards as $board)
                  <tr>
                    <td class="text-center">{{ $board->id }}</td>
                    <td><a href="{{ route('student.boards.show', $board->id) }}">{{ Str::limit($board->descricao, 30) }}</a></td>
                    <td class="text-center">{!!
                      $board->status
                        ? ('<span class="badge badge-success">' . __('Finished') . '</span>')
                        : ('<span class="badge badge-warning">' . __('Pending') . '</span>')
                    !!}</td>
                    <td>{{ $board->courseDiscipline->discipline->nome }}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer clearfix">
        <a href="{{ route('student.boards.index') }}" class="btn btn-sm btn-outline-success float-right">
          <i class="fas fa-fw fa-external-link-alt"></i>
          {{ __('List all boards') }}
        </a>
      </div>
    </div>
  </div>
  <div class="col-md-5">
    <div class="card card-outline card-warning">
      <div class="card-header border-transparent">
        <h3 class="card-title">{{ __('Next Tests/Works') }}</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive" style="max-height: 500px;">
          <table class="table table-hover table-head-fixed text-nowrap m-0">
            <thead>
              <tr>
                <th>{{ __('Board') }}</th>
                <th class="text-center">{{ __('Date') }}</th>
                <th class="text-center">{{ __('Type') }}</th>
                <th class="text-right">{{ __('Weight') }}</th>
              </tr>
            </thead>
            <tbody>
              @if($tasks->isEmpty())
                <tr>
                  <td colspan="4" class="text-center">@lang('messages.table.empty')</td>
                </tr>
              @else
                @foreach ($tasks as $task)
                  <tr>
                    <td><a href="{{ route('student.boards.show', $task->board->id) }}">{{ Str::limit($task->board->descricao, 20) }}</a></td>
                    <td class="text-center">{{ DateTime::createFromFormat('Y-m-d', $task->data)->format('d/m/Y') }}</td>
                    <td class="text-center">{!!
                      $task->tipo == \App\Models\Avaliacao::TYPE_TEST
                        ? ('<span class="badge badge-warning">' . __('Test') . '</span>')
                        : ('<span class="badge badge-primary">' . __('Work') . '</span>')
                    !!}</td>
                    <td class="text-right">{{ $task->peso }}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer clearfix">
        <a href="{{ route('student.tasks.index') }}" class="btn btn-sm btn-outline-warning float-right">
          <i class="fas fa-fw fa-external-link-alt"></i>
          {{ __('List all tasks') }}
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
