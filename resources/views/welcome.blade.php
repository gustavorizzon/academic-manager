<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ __('Academic Manager')}} </title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <style>
    body { font-family: 'Nunito'; }
  </style>
</head>
<body class="antialiased">
    <div class="container">
      <div class="row align-content-center justify-content-center" style="height:100vh;">
        <div class="row mb-5">
          <div class="col">
            <h1 class="text-center">@lang('welcome.page.title')</h1>
            <p class="text-center">@lang('welcome.page.description')</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="text-center">@lang('welcome.page.header.title')</h1>
            <p class="text-center mb-5">@lang('welcome.page.header.text')</p>
            <div class="d-flex justify-content-center">
              <a class="btn btn-outline-primary btn-lg" style="border-radius:50px;" href="{{ route('login') }}">{{ __('Sign-in') }}</a>
            </div>
          </div>
          <div class="col-lg-6 d-none d-lg-block">
            <img class="img-fluid" src="{{ asset('img/undraw_teacher_35j2.svg') }}">
          </div>
        </div>
      </div>
    </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
