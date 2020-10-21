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
@endsection
