<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class myValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // make this true
        // return false; 
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|max:20",
            "emai" => "required|email|min:8"
        ];
    }
    /*
    public function messages()
    {
        // override the base function
    }
    */
}
