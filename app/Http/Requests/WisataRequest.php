<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WisataRequest extends FormRequest
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
            'nama_wisata' => 'required|max:50',
            'deskripsi' => 'required',
            'kategori' => 'required|max:20',
            'provinsi' => 'required|max:20'
        ];
    }
}
