<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class LoginRequest extends FormRequest
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


        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
   {
      $response = new JsonResponse( [
                'errors' => $validator->errors()->first()], 422);

        throw new \Illuminate\Validation\ValidationException($validator, $response);
    }
}
