<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkProduct extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name_product'=>'required',
            'price'=>'required|integer',
            'describe'=>'required|min:20',
            'image'=>'required'

        ];
    }
}
