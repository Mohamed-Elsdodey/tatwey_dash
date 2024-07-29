<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
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
        ];

        if ($this->id) {
            $rules['email'] = [
                'required',
                'email',
            ];
            $rules['password'] = 'nullable|min:6';
        } else {
            $rules['email'] = [
                'required',
                'email',
            ];
            $rules['password'] = 'required|min:6';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter admin name.',
            'email.required' => 'Please enter email address.',
            'email.unique' => 'Email address was used before',
            'password.required' => 'Please enter a password.',
            'password.min' => 'Your password must be at least :min characters long.',
        ];
    }
}
