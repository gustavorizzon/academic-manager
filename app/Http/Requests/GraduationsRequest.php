<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GraduationsRequest extends FormRequest
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
      'titulo' => 'required|max:64',
      'numero_titulo' => 'required|numeric|unique:graduacoes,numero_titulo',
      'membro_instituicao_id' => 'required|exists:membros_instituicao,id'
    ];

    // Ignores current record on update
    if ($this->method() === self::METHOD_PUT) {
      $rules['numero_titulo'] .= ',' . $this->id;
    }

    return $rules;
  }
}
