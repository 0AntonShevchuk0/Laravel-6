<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'key' => [
                'required',
                'regex:/(^[A-Z0-9]{5}-[A-Z0-9]{5}-[A-Z0-9]{5}$)/u'
            ]
        ];
    }

    public function messages()
    {
        return [
            'key.required' => 'Ви не ввели ключ',
            'key.regex' => 'Ключ має бути записаний в форматі XXXXX-XXXXX-XXXXX'
        ];
    }
}
