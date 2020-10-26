<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionMembersRequest extends FormRequest
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
      'nome' => 'required|min:10',
      'data_nascimento' => 'required|date|before:now',
      'orientacao_sexual' => 'required|in:M,F,O',
      'estado_civil' => 'required|in:S,C,D',
      'cpf' => 'required|formato_cpf|cpf|unique:membros_instituicao,cpf',
      'rg' => 'required|digits:10|unique:membros_instituicao,rg',
      'nome_mae' => 'required|min:10',
      'nome_pai' => 'required|min:10',
      'telefone' => 'required',
      'email' => 'required|email',
      'rua' => 'required',
      'numero_rua' => 'required|numeric',
      'complemento' => 'required',
      'referencia' => 'required',
      'bairro' => 'required',
      'cidade_id' => 'required|exists:cidades,id',
      'login' => 'required|unique:membros_instituicao,login',
      'senha' => 'confirmed|min:8',
      'senha_confirmation' => 'required_with:senha',
      'tipo_membro' => 'required|in:A,C,D,*',
    ];

    // Ignores current record on update
    if ($this->method() === self::METHOD_PUT) {
      $rules['rg'] .= ',' . $this->id;
      $rules['cpf'] .= ',' . $this->id;
      $rules['login'] .= ',' . $this->id;
      $rules['senha'] .= '|nullable';
    } else {
      $rules['senha'] .= '|required';
    }

    return $rules;
  }
}
