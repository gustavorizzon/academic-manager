<?php

return [
	'table' => [
		'empty' => 'Não há dados a serem exibidos nesta tabela.'
  ],
  'request' => [
    'parameters-violation' => 'Detectamos uma tentativa de violação de parâmetros para esta requisição. Por favor, recarregue a página e tente novamente.'
  ],
  'validation' => [
    'enrollment-unique' => 'Um membro da instituição só pode estar matriculado em um curso por vez.',
    'enrollment-same-course-twice' => 'Você não pode matricular um aluno no mesmo curso duas vezes.',
    'enrollment-has-boards' => 'Você não pode remover/editar uma matrícula que já tem bancas.',
    'task-grade-invalid' => 'A nota de uma tarefa deve ser um valor entre 0 e 10.',
    'unique-discipline-in-course' => 'Uma disciplina só pode ser adicionada à um curso uma vez.',
    'frequencies' => [
      'empty-summary' => 'Você deve informar um breve resumo para esta aula.'
    ],
    'graduation' => [
      'not-yet' => 'Esta matrícula ainda não pode ser graduada.',
      'graduated' => 'Estudante graduado com sucesso!'
    ]
  ],
  'permission' => [
    'frequencies' => [
      'not-a-professor' => 'Você deve ser um professor da banca para poder gerenciar a frequência dos alunos.',
    ],
    'tasks' => [
      'not-a-professor' => 'Você deve ser um professor da banca para poder gerenciar as tarefas dos alunos.',
    ],
    'documents' => [
      'not-a-professor' => 'Você deve ser um professor da banca para poder gerenciar os documentos da mesma.',
    ],
    'boards' => [
      'not-a-professor' => 'Você deve ser um professor da banca para poder gerenciá-la.',
    ],
  ],
  'data' => [
    'frequencies' => [
      'not-available' => 'Não há nenhum dado de frequência disponível para esta banca.',
      'not-found-on-date' => 'Não foi possível encontrar registros de frequência nesta data.',
      'not-found' => 'Não foi possível encontrar o registro de frequência.',
      'updated-successfully' => 'Os registros de frequência foram atualizados com sucesso.',
      'date-updated-successfully' => 'A data da frequência foi atualizada com sucesso.',
      'already-taught' => 'Esta aula já foi ministrada, portanto não é possível fazer alterações.',
      'not-on-class-date' => 'Muito cedo! Você só pode alterar a frequência no dia da aula!',
      'only-dates-in-the-future' => 'Você só pode definir datas futuras para a aula.',
      'date-already-taken' => 'Já existe uma aula definida com esta data.',
    ],
    'tasks' => [
      'not-available' => 'Não há nenhum dado de tarefas disponível para esta banca.',
      'not-found-on-date' => 'Não foi possível encontrar registros de tarefas nesta data.',
      'not-found' => 'Não foi possível encontrar o registro de tarefas.',
      'updated-successfully' => 'Os registros de tarefas foram atualizados com sucesso.',
    ],
    'documents' => [
      'not-available' => 'Não há nenhum dado de documentos disponível para esta banca.',
      'not-found-on-date' => 'Não foi possível encontrar registros de documentos nesta data.',
      'not-found' => 'Não foi possível encontrar o registro de documentos.',
      'updated-successfully' => 'Os registros de documentos foram atualizados com sucesso.',
      'saved-successfully' => 'O documento foi salvo com sucesso.',
    ],
    'boards' => [
      'classroom-updated' => 'A sala de aula para esta banca foi atualizada com sucesso.',
      'description-updated' => 'A descrição desta banca foi atualizada com sucesso.',
      'professors' => [
        'added-successfully' => 'O professor foi adicionado com sucesso.',
        'professor-twice' => 'Você não pode adicionar o mesmo professor duas vezes.',
        'not-in-board' => 'O professor não está na banca.'
      ],
      'students' => [
        'not-in-board' => 'O aluno não está na banca.'
      ]
    ],
  ],
  'errors' => [
    'unexpected' => 'Houve um erro inesperado. Por favor, tente novamente em alguns instantes.',
  ],
  'info' => [
    'boards' => [
      'generation' => [
        'not-in-best-dates' => 'Você não está entre as melhores datas para iniciar um processo de geração de placa.',
        'consider' => 'Por favor, considere gerar as bancas entre datas que caracterizam o inicio de um semestre.',
        'in-best-dates' => 'Você está entre as melhores datas para iniciar processos de geração de bancas.'
      ],
      'pendencies' => [
        'doesnt-have-professors' => 'Esta banca não tem nenhum professor.',
        'classroom-not-defined' => 'Esta banca não tem uma sala de aula definida.'
      ]
    ]
  ]
];
