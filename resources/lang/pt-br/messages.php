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
    'task-grade-invalid' => 'A nota de uma tarefa deve ser um valor entre 0 e 10.',
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
  ],
  'data' => [
    'frequencies' => [
      'not-available' => 'Não há nenhum dado de frequência disponível para esta banca.',
      'not-found-on-date' => 'Não foi possível encontrar registros de frequência nesta data.',
      'not-found' => 'Não foi possível encontrar o registro de frequência.',
      'updated-successfully' => 'Os registros de frequência foram atualizados com sucesso.',
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
  ],
  'errors' => [
    'unexpected' => 'Houve um erro inesperado. Por favor, tente novamente em alguns instantes.',
  ],
];
