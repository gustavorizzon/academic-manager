<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@lang('login.page.title')</title>

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
    <div class="row align-items-center" style="height:100vh;">
      <div class="col-lg-5">
        <div class="row">
          <div class="col">
            <h2>@lang('login.form.title')</h2>
            <p>@lang('login.form.text')</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            {!! Form::open(['route' => 'login']) !!}
            <div class="form-group">
              {!! Form::label('login', __('login.form.fields.user.label')) !!}
              {!! Form::text('login', null,
                [
                  'class' => 'form-control' . ($errors->has('login') ? ' is-invalid' : ''),
                  'placeholder' => __('login.form.fields.user.placeholder')
                ]
              ) !!}
              {!! $errors->has('login')
                ? $errors->first('login', '<span class="error invalid-feedback">* :message</span>')
                : ('<span class="form-text text-muted">' . __('login.form.fields.user.text') . '</span>') !!}
            </div>
            <div class="form-group">
              {!! Form::label('password', __('login.form.fields.password.label')) !!}
              {!! Form::password('password',
                [
                  'class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''),
                  'placeholder' => __('login.form.fields.password.placeholder')
                ]
              ) !!}
              {!! $errors->first('password', '<span class="error invalid-feedback">* :message</span>') !!}
            </div>
            <div class="row">
              <div class="col-8">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="remember" id="remember">
                  <label class="form-check-label" for="remember">{{ __('login.form.fields.remember_me.label') }}</label>
                </div>
              </div>
              <div class="col-4">
                {!! Form::button(
                  __('login.form.submit'),
                  [
                    'type' => 'submit',
                    'class' => 'btn btn-block btn-outline-success',
                    'style' => 'border-radius:50px;'
                  ]
                ) !!}
              </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <img class="img-fluid" src="{{ asset('img/undraw_Login_re_4vu2.svg') }}">
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
