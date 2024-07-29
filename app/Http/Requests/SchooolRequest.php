<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchooolRequest extends FormRequest
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
                'domain' => "required|unique:schools,domain,".$this->id,
                'name' => 'required|unique:schools,name,'.$this->id,

            ];
        }
        else{
            return [
                'domain' => "required|unique:schools,domain",
                'name' => 'required|unique:schools,name',
            ];
        }
    }
}
