<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'ckeditor' => 'required|min:3',
            'category_id' => 'required',
            'tags_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Makale başlığı boş geçilemez',
            'title.min' => 'Makale başlık uzunluğu 3 karakterden küçük olamaz',
            'title.max' => 'Makale başlık uzunluğu 255 karakterden fazla olamaz',
            'image.image' => 'Seçili dosya türü resim olmak zorundadır',
            'image.mimes' => 'Seçili dosya türü jpeg, png veya jpg olmak zorundadır',
            'image.max' => 'Resim boyutu çok büyük. Max:2048',
            'ckeditor.required' => 'Makale içerik alanı boş geçilemez',
            'ckeditor.min' => 'Makale içeriği 3 karakterden az olamaz',
            'category_id.required' => 'Lütfen makaleye ait bir kategori seçiniz',
            'tags_id.required' => 'Lütfen makalenize ait etiket seçimi yapınız'
        ];
    }
}
