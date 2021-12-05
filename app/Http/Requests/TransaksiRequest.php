<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiRequest extends FormRequest
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
        switch($this->method()){
            case 'POST': {
                return [
                    'lawyer_id' => 'required|integer',
                    'nama_klien' => 'required|string',
                    'phone' => 'required|string|max:15',
                    'tgl_meet' => 'date|required',
                    'keterangan' => 'required|string'
                ];
            } break;
        }

    }
}
