<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatesRequest extends FormRequest
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
      'nome' => 'required|max:30|unique:membros_instituicao,nome',
      'uf' => 'required|size:2'
    ];

    // Ignores current record on update
    if ($this->method() === self::METHOD_PUT) {
      $rules['nome'] .= ',' . $this->id;
    }

    return $rules;
  }
}
