<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
            'txttitle' => 'required|min:10|max:255',
            'txtclass' => 'required',
            'txtimage' => 'max:255',
            'txtmeta' => 'max:255',
            'txtcontent' => 'required|min:10'
        ];
    }
}
