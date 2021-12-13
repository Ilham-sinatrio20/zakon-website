<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class LawyerRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        switch($this->method()){
            case 'POST': {
                return [
                    'nama_lawyer' => 'required|string',
                    'phone' => 'required|string|max:15',
                    'place_birth' => 'required|string',
                    'date_birth' => 'required|date',
                    'address' => 'required|string',
                    'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
                    'email' => 'required|string',
                    'jenis_hukum' => 'required|string',
                    'deskripsi' => 'required|string'
                ];
            } break;
            case 'PUT': {
                return [
                    'nama_lawyer' => 'sometimes|string',
                    'phone' => 'sometimes|string|max:15',
                    'place_birth' => 'sometimes|string',
                    'date_birth' => 'sometimes|date',
                    'address' => 'sometimes|string',
                    'picture' => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
                    'email' => 'sometimes|string',
                    'jenis_hukum' => 'sometimes|string',
                    'deskripsi' => 'sometimes|string'
                ];
            } break;
        }
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors()->all(), 422));
    }
}
