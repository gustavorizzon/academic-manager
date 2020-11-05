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
</div>
@endsection
