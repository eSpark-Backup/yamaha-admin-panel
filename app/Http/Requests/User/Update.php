<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'role_id' => ['required', 'numeric', 'exists:roles,id'],
            'tenant_id' => ['nullable', 'numeric', 'exists:tenants,id'],
            'prefecture_id' => ['nullable', 'numeric', 'exists:prefectures,id'],
            'gender' => ['nullable', 'string', 'max:10'],
            'date_of_birth' => ['nullable', 'date'],
            'phone' => ['nullable', 'numeric', 'digits_between:8,13'],
            'fax' => ['nullable', 'numeric', 'digits_between:8,13'],
            'address' => ['nullable', 'string', 'max:150'],
            'city' => ['nullable', 'string', 'max:50'],
            'zip' => ['nullable', 'numeric'],
        ];
    }
}
