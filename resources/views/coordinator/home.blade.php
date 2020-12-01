@extends('coordinator.layout')

@section('title_prefix', __('Coordinator Dashboard') . ' | ')

@section('content_header')
<div class="row mb-2">
  <div class="col-12">
    <h1>{{ __('Coordinator Dashboard') }}</h1>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-primary">
      <div class="inner">
        <h3>{{ $institutionMembersCount }}</h3>
        <p>{{ __('Institution Members') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ $coursesCount }}</h3>
        <p>{{ __('Courses') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-graduation-cap"></i>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-secondary">
      <div class="inner">
        <h3>{{ $professorsCount }}</h3>
        <p>{{ __('Professors') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-tie"></i>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $graduatedStudentsCount }}</h3>
        <p>{{ __('Graduated Students') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-graduate"></i>
      </div>
    </div>
  </div>
</div>
@endsection
