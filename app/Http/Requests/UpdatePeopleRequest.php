<?php

namespace App\Http\Requests;

use App\Rules\AgeRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePessoaRequest extends FormRequest
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
        return [
            'email' => ['email'],
            'nome' => ['max:255', 'min:3'],
            'data_nascimento' => [new AgeRule],
        ];
    }
}