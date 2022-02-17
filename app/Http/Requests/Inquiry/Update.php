<?php

namespace App\Http\Requests\Inquiry;

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
            'title' => ['required', 'string'],
            'body' => ['required', 'string'],
            'tenant_id' => ['required', 'numeric', 'exists:tenants,id'],
            'order_no' => ['nullable', 'string'],
            'part_no' => ['nullable', 'string'],
            'type' => ['required'],
            'status' => ['nullable'],
            'sender' => ['required']
        ];
    }
}
