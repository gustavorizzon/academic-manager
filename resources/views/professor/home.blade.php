@extends('professor.layout')

@section('title_prefix', __('Professor Dashboard') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Professor Dashboard') }}</h1>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ $activeBoardsCount }}</h3>
        <p>{{ __('Active Boards') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-clipboard-list"></i>
      </div>
      <a href="{{ route('professor.boards.index') }}" class="small-box-footer">{{ __('More info')}} <i class="fas fa-fw fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-primary">
      <div class="inner">
        <h3>{{ $nextClass ? DateTime::createFromFormat('Y-m-d', $nextClass->data)->format('d/m/y') : __('N/D') }}</h3>
        <p>{{ __('Next Class') }}</p>
      </div>
      <div class="icon">
        <i class="far fa-calendar-check"></i>
      </div>
      <a href="{{ $nextClass ? route('professor.boards.show', ['id' => $nextClass->banca_id]) : '#' }}" class="small-box-footer">{{ __('Go to the board')}} <i class="fas fa-fw fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-secondary">
      <div class="inner">
        <h3>{{ $documentsCount }}</h3>
        <p>{{ __('Documents') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-file-alt"></i>
      </div>
      <a href="{{ route('professor.documents.index') }}" class="small-box-footer">{{ __('More info')}} <i class="fas fa-fw fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ $nextTask ? DateTime::createFromFormat('Y-m-d', $nextTask->data)->format('d/m/y') : __('N/D') }}</h3>
        <p>{{ __('Next Task') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-pencil-ruler"></i>
      </div>
      <a href="{{ $nextTask ? route('professor.boards.show', ['id' => $nextTask->banca_id]) : '#' }}" class="small-box-footer">{{ __('Go to the board')}} <i class="fas fa-fw fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
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
        <div class="table-responsive" style="max-height:35vh;">
          <table class="table table-hover table-head-fixed text-nowrap m-0">
            <thead>
              <tr>
                <th class="text-center">{{ __('Id') }}</th>
                <th>{{ __('Short Description') }}</th>
                <th>{{ __('Discipline') }}</th>
              </tr>
            </thead>
            <tbody>
              @if($boards->isEmpty())
                <tr>
                  <td colspan="3" class="text-center">@lang('messages.table.empty')</td>
                </tr>
              @else
                @foreach ($boards as $board)
                  <tr class="clickable-row" data-href="{{ route('professor.boards.show', $board->id) }}">
                    <td class="text-center">{{ $board->id }}</td>
                    <td>{{ Str::limit($board->descricao, 30) }}</td>
                    <td>{{ $board->courseDiscipline->discipline->nome }}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer clearfix">
        <a href="{{ route('professor.boards.index') }}" class="btn btn-sm btn-outline-success float-right">
          <i class="fas fa-fw fa-external-link-alt"></i>
          {{ __('More details') }}
        </a>
      </div>
    </div>
    <div class="card card-outline card-danger">
      <div class="card-header border-transparent">
        <h3 class="card-title">{{ __('Your students') }}</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive" style="max-height:35vh;">
          <table class="table table-hover table-head-fixed text-nowrap m-0">
            <thead>
              <tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Course') }}</th>
                <th class="text-right">{{ __('Last grade') }}</th>
              </tr>
            </thead>
            <tbody>
              @if($students->isEmpty())
                <tr>
                  <td colspan="3" class="text-center">@lang('messages.table.empty')</td>
                </tr>
              @else
                @foreach ($students as $student)
                  <tr>
                    <td>{{ $student->nome }}</td>
                    <td>{{ $student->getEnrolledCourse()->course->nome ?? __('N/D') }}</td>
                    <td class="text-right">{{ $student->getLastGrade()->nota ?? __('N/D') }}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer clearfix">
        <a href="{{ route('professor.students.index') }}" class="btn btn-sm btn-outline-danger float-right">
          <i class="fas fa-fw fa-external-link-alt"></i>
          {{ __('More details') }}
        </a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
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
        <div class="table-responsive" style="max-height:30vh;">
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
                    <td><a href="{{ route('professor.boards.show', $task->board->id) }}">{{ Str::limit($task->board->descricao, 20) }}</a></td>
                    <td class="text-center">
                      @if ($task->data === \Carbon\Carbon::now()->toDateString())
                        <span class="badge bg-success">{{ __('Today') }}</span>
                      @else
                        {{ DateTime::createFromFormat('Y-m-d', $task->data)->format('d/m/Y') }}
                      @endif
                    </td>
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
    </div>
    <div class="card card-outline card-primary">
      <div class="card-header border-transparent">
        <h3 class="card-title">{{ __('Next Classes') }}</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive" style="max-height:30vh;">
          <table class="table table-hover table-head-fixed text-nowrap m-0">
            <thead>
              <tr>
                <th>{{ __('Board') }}</th>
                <th class="text-center">{{ __('Date') }}</th>
              </tr>
            </thead>
            <tbody>
              @if($nextClasses->isEmpty())
                <tr>
                  <td colspan="2" class="text-center">@lang('messages.table.empty')</td>
                </tr>
              @else
                @foreach ($nextClasses as $class)
                  <tr class="clickable-row" data-href="{{ route('professor.boards.show', $class->board->id) }}">
                    <td>{{ Str::limit($class->board->descricao, 50) }}</td>
                    <td class="text-center">
                      @if ($class->data === \Carbon\Carbon::now()->toDateString())
                        <span class="badge bg-success">{{ __('Today') }}</span>
                      @else
                        {{ DateTime::createFromFormat('Y-m-d', $class->data)->format('d/m/Y') }}
                      @endif
                    </td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card card-outline card-secondary">
      <div class="card-header border-transparent">
        <h3 class="card-title">{{ __('Recent documents') }}</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive" style="max-height:30vh;">
          <table class="table table-hover table-head-fixed text-nowrap m-0">
            <thead>
              <tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Filename') }}</th>
              </tr>
            </thead>
            <tbody>
              @if($recentDocuments->isEmpty())
                <tr>
                  <td colspan="2" class="text-center">@lang('messages.table.empty')</td>
                </tr>
              @else
                @foreach ($recentDocuments as $document)
                  <tr>
                    <td>{{ $document->nome }}</td>
                    <td>{{ $document->nome_arquivo }}</td>
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
@endsection

@include('scripts.clickable-row')
