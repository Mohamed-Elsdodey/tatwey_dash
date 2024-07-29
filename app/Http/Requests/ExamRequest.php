<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
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
//                'title' => "required",
//                'degree_of_exam' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'degree_of_student' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'student_id' => "nullable|exists:students,id",

            ];
        }
        else{
            return [
//                'title' => "required",
//                'degree_of_exam' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'degree_of_student' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'student_id' => "nullable|exists:students,id",


            ];
        }
    }
}
