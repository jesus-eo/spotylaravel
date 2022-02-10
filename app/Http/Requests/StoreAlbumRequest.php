<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlbumRequest extends FormRequest
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
   /*  Aqui creamis la validación que utilizaremos después en el create */
        return [
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'portada' => 'required|image|mimes:jpg',
        ];
    }
}
