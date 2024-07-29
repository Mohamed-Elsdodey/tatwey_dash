<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $schoolId = $this->input('school_id');
        $guardName = $this->input('guard_name');

        $uniqueRule = Rule::unique('roles', 'name')
            ->where('guard_name', $guardName)
            ->where('school_id', $schoolId);

        $rules = [
            'name' => [
                'required',
                $this->id ? '' : $uniqueRule,
            ],
            'school_id' => $this->id ? 'nullable|exists:schools,id' : 'required|exists:schools,id',
            'guard_name' => $this->id ? 'nullable|in:admin,teacher,moderator' : 'required|in:admin,teacher,moderator',
            'permission' => 'nullable|array',
            'permission.*' => 'nullable',
        ];

        return $rules;
    }
}
