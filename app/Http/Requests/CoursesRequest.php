<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursesRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    $rules = [
      'nome' => 'required|unique:cursos,nome',
      'descricao' => 'required|max:1024',
      'quantidade_semestres' => 'required|numeric|min:1',
      'valor' => 'required|numeric|min:0.01',
      'turno' => 'required|in:A,B,C',
      'horas_turno' => 'required|numeric|between:1,5'
    ];

    // Ignores current record on update
    if ($this->method() === self::METHOD_PUT) {
      $rules['nome'] .= ',' . $this->id;
    }

    return $rules;
  }
}
