<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuratRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nosurat'=>'unique:cetak_surats',
           
        ];
    }

    public function messages()
    {
        return [
        'nosurat.unique' => 'Nomor Surat Sudah Digunakan',
        

        ];
    }
}
