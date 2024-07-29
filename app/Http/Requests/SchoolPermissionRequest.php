<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolPermissionRequest extends FormRequest
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
        if ($this->id){
            return [
                'guard_name' => "required|in:admin,moderator,teacher",
                'permission'=>'nullable|array',
                'permission.*'=>'nullable',
                'school_id'=>'required|exists:schools,id',
            ];
        }
        else{
            return [
                'guard_name' => "required|in:admin,moderator,teacher",
                'permission'=>'nullable|array',
                'permission.*'=>'nullable',
                'school_id'=>'required|exists:schools,id',
            ];
        }
    }
}
