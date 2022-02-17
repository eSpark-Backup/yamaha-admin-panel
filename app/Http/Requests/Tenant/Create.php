<?php

namespace App\Http\Requests\Tenant;

use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
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
            "name" => "required",
            "code" => "required",
            "address" => "nullable|string",
            "city" => "nullable|string",
            "prefecture_id" => ['nullable', 'numeric', function ($attribute, $value, $fail) {
                if ($value > 0 && !\App\Models\Prefecture::whereId($value)->exists()) {
                    $fail('The prefecture ID is invalid.');
                }
            }],
            "zip" => "nullable|integer",
            "phone" => "nullable|integer",
            "fax" => "nullable|integer",
            "group_id" => ['nullable', 'numeric', function ($attribute, $value, $fail) {
                if ($value > 0 && !\App\Models\Group::whereId($value)->exists()) {
                    $fail('The group ID is invalid.');
                }
            }],
            "department_id" => ['nullable', 'numeric', function ($attribute, $value, $fail) {
                if ($value > 0 && !\App\Models\Department::whereId($value)->exists()) {
                    $fail('The department ID is invalid.');
                }
            }],
            "tenant_id" => ['nullable', 'numeric', function ($attribute, $value, $fail) {
                if ($value > 0 && !\App\Models\Tenant::where('id', $value)->exists()) {
                    $fail('The tenant ID is invalid.');
                }
            }],
            "established_at" => "required|date",
            "description" => "nullable|string",
            "business_hours" => "nullable|string",
            "regular_holidays" => "nullable|string",
            "access" => "nullable|string"
        ];
    }
}
