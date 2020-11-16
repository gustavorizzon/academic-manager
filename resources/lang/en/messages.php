<?php

return [
	'table' => [
		'empty' => 'There are no data to be shown on this table.'
  ],
  'request' => [
    'parameters-violation' => 'We have detected a parameters violation attempt for this request. Please, reload the page and try again.'
  ],,
  'validation' => [
    'enrollment-unique' => 'An institution member can only be enrolled in one course at a time.',
    'task-grade-invalid' => 'A task grade must be a value between 0 and 10',
  ],
  'permission' => [
    'frequencies' => [
      'not-a-professor' => 'You must be a board professor to be able to manage student frequency.'
    ],
    'tasks' => [
      'not-a-professor' => 'You must be a board professor to be able to manage student tasks.'
    ],
  ],
  'data' => [
    'frequencies' => [
      'not-available' => 'There are no frequency data available for this board.',
      'not-found-on-date' => 'We were unable to find frequency records on this date.',
      'not-found' => 'We were unable to find the frequency record.',
      'updated-successfully' => 'Frequency records were updated successfully.',
    ],
  ],
  'data' => [
    'tasks' => [
      'not-available' => 'There are no tasks data available for this board.',
      'not-found-on-date' => 'We were unable to find task records on this date.',
      'not-found' => 'We were unable to find the task record.',
      'updated-successfully' => 'Task records were updated successfully.',
    ],
  ],
  'errors' => [
    'unexpected' => 'There was an unexpected error. Please try again in a few moments.',
  ],
];
