<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RowRequest extends FormRequest
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
                'title_ar' => "required|unique:rows,title_ar," . $this->id . ",id,school_id," . auth('admin')->user()->school_id,
                'title_en' => "nullable|unique:rows,title_en," . $this->id . ",id,school_id," . auth('admin')->user()->school_id,
                'categories' => 'required|array',
                'categories.*' => 'required',
            ];
        } else {
            return [
                'title_ar' => 'required|unique:rows,title_ar,NULL,id,school_id,' . auth('admin')->user()->school_id,
                'title_en' => 'nullable|unique:rows,title_en,NULL,id,school_id,' . auth('admin')->user()->school_id,
                'categories' => 'required|array',
                'categories.*' => 'required',
            ];
        }
    }
}
