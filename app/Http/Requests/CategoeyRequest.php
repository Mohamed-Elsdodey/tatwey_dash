<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoeyRequest extends FormRequest
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
                'title_ar' => "required|unique:categories,title_ar,".$this->id,
                'title_en' => "nullable|unique:categories,title_en,".$this->id,
                'slug' => "required|unique:categories,slug,".$this->id,
                'degree_of_exam'=>'required|regex:/^\d+(\.\d{1,2})?$/',

            ];
        }
        else{
            return [
                'title_ar' => "required|unique:categories,title_ar",
                'title_en' => "nullable|unique:categories,title_en,",
                'slug' => "required|unique:categories,slug,",
                'degree_of_exam'=>'required|regex:/^\d+(\.\d{1,2})?$/',

            ];
        }
    }
}
