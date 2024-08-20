<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules():array
    {
        return [
            "nome"=> ["required", "string", "unique:posts", "min:3", "max:255"],
            "linguaggio"=> ["required", "string", "min:3", "max:100"],
            "url_repository"=> ["required", "url", "min:5"]
        ];
    }

    public function messages(): array
    {
        return[
            "nome.required"=>"E' necessario inserire un titlo",
            "nome.min:3"=>"Il titolo deve essere piu' lungo di tre caratteri",
            "linguaggio.required"=>"E' necessario inserire almeno un titlo",
            "url_repository"=> "L'url inserita non e' valida"
        ];

    }
}
