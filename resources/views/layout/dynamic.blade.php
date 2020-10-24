@php
  switch(Auth::user()->tipo_membro) {
    case(\App\Models\MembroInstituicao::ADMIN);
      $extend = 'admin.layout';
      break;

    case(\App\Models\MembroInstituicao::COORDINATOR);
      $extend = 'coordinator.layout';
      break;

    case(\App\Models\MembroInstituicao::PROFESSOR);
      $extend = 'professor.layout';
      break;

    case(\App\Models\MembroInstituicao::STUDENT);
      $extend = 'student.layout';
      break;

    default;
      $extend = 'adminlte::page';
  }
@endphp

@extends($extend)
