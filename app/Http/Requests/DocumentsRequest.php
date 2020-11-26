<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentsRequest extends FormRequest
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
      'nome' => 'required|max:100',
      'data' => 'required|date',
      'nome_arquivo' => 'required',
      'nome_arquivo_salvo' => 'required',
      'tamanho_arquivo' => 'required',
      'banca_id' => 'exists:bancas,id',
      'membro_banca_id' => 'exists:membros_banca,id',
    ];
  }
}
