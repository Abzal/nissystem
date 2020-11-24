<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoxRequest extends FormRequest
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
            'name' => 'required|min:5|max:50',
            'link' => 'required|min:5|max:50',
        ];
    }

    public function attributes(){
        return [
            'name'=>'Hазвания',
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Поля Названия сайта является обязательным',
        ];
    }

}
