<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentsRequest extends FormRequest
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
      'membro_instituicao_id' => 'required|exists:membros_instituicao,id',
      'curso_id' => 'required|exists:cursos,id',
      'status' => 'required|in:T,M,C',
    ];
  }
}
