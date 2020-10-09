<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplinesRequest extends FormRequest
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
    $rules = [
      'nome' => 'required|unique:disciplinas,nome',
      'total_creditos' => 'required|numeric|min:0',
      'minimo_creditos_necessarios' => 'required|numeric|min:0'
    ];

    // Ignores current record on update
    if ($this->method() === self::METHOD_PUT) {
      $rules['nome'] .= ',' . $this->id;
    }

    return $rules;
  }
}
