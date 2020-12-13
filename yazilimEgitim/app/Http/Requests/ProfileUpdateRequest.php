<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|email',
        ];
    }

    public function messages()
    {
        return [
           'name.required'=>'Kullanıcı adı girmek zorunludur.',
           'email.required'=>'Email adresi girmek zorunludur.',
           'name.min'=>'Kullanıcı adı 3 karakterden daha fazla olmalıdır',
           'email.min'=>'Email adresi 3 karakterden daha fazla olmalıdır',
           'name.max'=>'Kullanıcı adı 255 karakterden daha fazla olamaz.',
           'email.max'=>'Parola 255 karakterden daha fazla olamaz.',
           'email.email'=>'Email adresi istenilen biçimde yazılmadı'
        ];

    }
}
