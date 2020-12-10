@include('reports.css.table')
@include('reports.css.text')
@include('reports.css.colors')
<table>
  {{-- Header --}}
  <tr>
    <th colspan="3" class="text-center text-bold">{{ __('Academic Manager') }}</th>
    <th colspan="3" class="text-center text-bold">{{ __('Board Summary') }}</th>
  </tr>

  {{-- Spacer --}}
  <tr><td colspan="6"></td></tr>

  {{-- Board description --}}
  <tr>
    <td colspan="6" class="text-center">
      <span class="text-bold text-muted">{{ __('Discipline') }}</span>
      <br>
      <span class="text-primary" style="font-size:16pt;">{{ $board->courseDiscipline->discipline->nome }}</span>
      <br>
      <br>
      <span class="text-bold text-muted">{{ __('Course') }}</span>
      <br>
      <span>{{ $board->courseDiscipline->course->nome }}</span>
    </td>
  </tr>

  {{-- Spacer --}}
  <tr><td colspan="6"></td></tr>

  {{-- Board Info --}}
  <tr>
    <th class="text-bold text-center">{{ __('School Year') }}</th>
    <th class="text-bold text-center">{{ __('Board') }}</th>
    <th class="text-bold text-center">{{ __('Type') }}</th>
    <th class="text-bold text-center">{{ __('Total credits') }}</th>
    <th class="text-bold text-center">{{ __('Members') }}</th>
    <th class="text-bold text-center">{{ __('Workload') }}</th>
  </tr>
  <tr>
    <td class="text-center">{{ $board->periodo_letivo }}</td>
    <td class="text-center">{{ $board->id }}</td>
    <td class="text-center">{{ $board->courseDiscipline->obrigatoria ? __('Mandatory') : __('Optional') }}</td>
    <td class="text-center">{{ $board->courseDiscipline->discipline->total_creditos }}</td>
    <td class="text-center">{{ $board->members->count() }}</td>
    <td class="text-center">{{ $board->courseDiscipline->discipline->total_creditos }}</td>
  </tr>

  {{-- Spacer --}}
  <tr><td colspan="6"></td></tr>

  {{-- Professors --}}
  <tr>
    <th colspan="6" class="text-uppercase text-center text-bold">{{ __('Professors linked to the board') }}</th>
  </tr>
  <tr>
    <th class="text-center text-bold">{{ __('Enrollment') }}</th>
    <th colspan="3" class="text-left text-bold">{{ __('Name') }}</th>
    <th colspan="2" class="text-left text-bold">{{ __('E-mail') }}</th>
  </tr>
  @foreach ($board->professors as $professor)
    <tr class="striped">
      <td class="text-center">{{ $professor->institutionMember->id }}</td>
      <td colspan="3" class="text-left">{{ $professor->institutionMember->nome }}</td>
      <td colspan="2" class="text-left">{{ $professor->institutionMember->email }}</td>
    </tr>
  @endforeach

  {{-- Spacer --}}
  <tr><td colspan="6"></td></tr>

  {{-- Students --}}
  <tr>
    <th colspan="6" class="text-uppercase text-center text-bold">{{ __('Students linked to the board') }}</th>
  </tr>
  <tr>
    <th class="text-bold text-center">#</th>
    <th class="text-bold text-center">{{ __('Enrollment') }}</th>
    <th class="text-bold text-left">{{ __('Name') }}</th>
    <th class="text-bold text-right">{{ __('Credits') }}</th>
    <th class="text-bold text-right">{{ __('Exam') }}</th>
    <th class="text-bold text-right">{{ __('Average') }}</th>
  </tr>
  @foreach($board->students as $key => $student)
    <tr class="striped">
      <td class="text-center">{{ $key }}</td>
      <td class="text-center">{{ $student->institutionMember->id }}</td>
      <td class="text-left">{{ $student->institutionMember->nome }}</td>
      <td class="text-right">{{ $student->creditos }}</td>
      <td class="text-right">{{ $student->hasExam() ? $student->exam->first()->nota : '-' }}</td>
      <td class="text-right">{{ $student->getWeightedAverage() }}</td>
    </tr>
  @endforeach

  {{-- Spacer --}}
  <tr><td colspan="6"></td></tr>

  {{-- Frequency --}}
  <tr>
    <th colspan="6" class="text-center text-bold text-uppercase">{{ __('Frequency of the board') }}</th>
  </tr>
  <tr>
    <th class="text-center text-bold">{{ __('Date') }}</th>
    <th colspan="5" class="text-left text-bold">{{ __('Class Summary') }}</th>
  </tr>
  @foreach ($board->frequencies as $key => $frequency)
    <tr>
      <td class="text-center">{{ DateTime::createFromFormat('Y-m-d', $frequency->data)->format('d/m/Y') }}</td>
      <td colspan="5" class="text-left">{{ $frequency->resumo_aula }}</td>
    </tr>
  @endforeach
</table>
