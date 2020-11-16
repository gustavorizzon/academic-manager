<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TasksRequest extends FormRequest
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
    return  [
      'data' => 'required|date',
      'peso' => 'required|numeric|min:0|max:10',
      'tipo' => 'required|in:P,T',
      'conteudo' => 'required|min:10'
    ];
  }
}
