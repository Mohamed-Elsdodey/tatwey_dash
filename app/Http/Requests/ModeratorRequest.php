<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ModeratorRequest extends FormRequest
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
        $rules = [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'name' => 'required',
            'is_active' => 'nullable|in:0,1',
            'school_id' => 'required|exists:schools,id',
        ];

        if ($this->id) {
            $rules['email'] = [
                'required',
                Rule::unique('admins', 'email')->ignore($this->id)->where(function ($query) {
                    $query->where('school_id', $this->school_id);
                }),
                Rule::unique('moderators', 'email')->ignore($this->id)->where(function ($query) {
                    $query->where('school_id', $this->school_id);
                }),
                Rule::unique('teachers', 'email')->ignore($this->id)->where(function ($query) {
                    $query->where('school_id', $this->school_id);
                }),
                'email',
            ];
            $rules['password'] = 'nullable|min:6';
        } else {
            $rules['email'] = [
                'required',
                'email',
                Rule::unique('admins', 'email')->where('school_id', $this->school_id),
                Rule::unique('moderators', 'email')->where('school_id', $this->school_id),
                Rule::unique('teachers', 'email')->where('school_id', $this->school_id),
            ];
            $rules['password'] = 'required|min:6';
        }

        return $rules;
    }
}
