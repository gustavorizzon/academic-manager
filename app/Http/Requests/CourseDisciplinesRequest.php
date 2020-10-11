<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseDisciplinesRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
      'curso_id' => 'required|exists:cursos,id',
      'disciplina_id' => 'required|exists:disciplinas,id',
      'obrigatoria' => 'required|boolean'
    ];
  }
}
