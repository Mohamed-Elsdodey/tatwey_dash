<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        if ($this->id) {
            return [
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
                'name' => 'required',
                'phone' => 'required',
                'identification_number' => 'nullable|unique:students,identification_number,' . $this->id . ',id,school_id,' . auth('admin')->user()->school_id,
            ];
        } else {
            return [
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
                'name' => 'required',
                'phone' => 'required',
                'identification_number' => 'nullable|unique:students,identification_number,NULL,id,school_id,' . auth('admin')->user()->school_id,
            ];
        }

    }
}
