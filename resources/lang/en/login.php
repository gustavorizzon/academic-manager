<?php

return [
  'page' => [
    'title' => 'Login | Academic Manager'
  ],
  'form' => [
    'title' => 'Academic Manager',
    'text' => 'Use your login and password to authenticate yourself.',
    'fields' => [
      'user' => [
        'label' => 'Username',
        'placeholder' => 'Enter your username here',
        'text' => "We'll never share your email with anyone else."
      ],
      'password' => [
        'label' => 'Password',
        'placeholder' => 'Enter your password here'
      ],
      'remember_me' => [
        'label' => 'Remember me'
      ],
    ],
    'submit' => 'Sign-in'
  ]
];
