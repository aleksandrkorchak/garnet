<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
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
            'user' => 'required|min:2|max:30',
            'email' => 'required|email',
            'text' => 'required|max:300'
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'user.required' => 'Имя пользователя обязательно',
            'user.min' => 'Минимальная длина имени пользователя 2 буквы',
            'user.max' => 'Максимальная длина имени пользователя 30 букв',
            'email.required' => 'Email обязателен',
            'email.email' => 'Поле email некорректно',
            'text.required' => 'Сообщение обязательно',
            'text.max' => 'Максимальная длина сообщения 300 символов'
        ];
    }


}
