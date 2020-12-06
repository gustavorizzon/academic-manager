<?php

return [
	'table' => [
		'empty' => 'There are no data to be shown on this table.'
  ],
  'request' => [
    'parameters-violation' => 'We have detected a parameters violation attempt for this request. Please, reload the page and try again.'
  ],
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
    'documents' => [
      'not-a-professor' => 'You must be a board professor to be able to manage its documents.'
    ],
    'boards' => [
      'not-a-professor' => 'You must be a board professor to be able to manage it.'
    ],
  ],
  'data' => [
    'frequencies' => [
      'not-available' => 'There are no frequency data available for this board.',
      'not-found-on-date' => 'We were unable to find frequency records on this date.',
      'not-found' => 'We were unable to find the frequency record.',
      'updated-successfully' => 'Frequency records were updated successfully.',
      'date-updated-successfully' => 'Frequency date was updated successfully.',
      'already-taught' => 'This class has already been taught, so it is not possible to make changes.',
      'only-dates-in-the-future' => 'You can only set dates in the future for the class.',
      'date-already-taken' => 'There is already a class defined with this date.',
    ],
    'tasks' => [
      'not-available' => 'There are no tasks data available for this board.',
      'not-found-on-date' => 'We were unable to find task records on this date.',
      'not-found' => 'We were unable to find the task record.',
      'updated-successfully' => 'Task records were updated successfully.',
    ],
    'documents' => [
      'not-available' => 'There are no documents data available for this board.',
      'not-found-on-date' => 'We were unable to find document records on this date.',
      'not-found' => 'We were unable to find the document record.',
      'updated-successfully' => 'Document records were updated successfully.',
      'saved-successfully' => 'The document was saved successfully.',
    ],
    'boards' => [
      'classroom-updated' => 'The classroom for this board was updated successfully.',
      'description-updated' => 'The description for this board was updated successfully.',
      'professors' => [
        'added-successfully' => 'The professor was added successfully.',
        'professor-twice' => 'You cannot add the same professor twice.',
        'not-in-board' => 'The professor isn\'t in the board.'
      ],
      'students' => [
        'not-in-board' => 'The student isn\'t in the board.'
      ]
    ],
  ],
  'errors' => [
    'unexpected' => 'There was an unexpected error. Please try again in a few moments.',
  ],
  'info' => [
    'boards' => [
      'generation' => [
        'not-in-best-dates' => 'You are not between the best dates to start a board generation process.',
        'consider' => 'Please consider generating boards between dates that characterize the beginning of a semester.',
        'in-best-dates' => 'You are between the best dates to start boards generation processes.'
      ],
      'pendencies' => [
        'doesnt-have-professors' => 'This board doesn\'t have any professors.',
        'classroom-not-defined' => 'This board doesn\'t have a classroom defined.'
      ]
    ]
  ]
];
