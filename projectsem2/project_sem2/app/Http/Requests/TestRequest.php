<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
           'name' => 'required',
           'email' => 'required| min:5',
           'address'=>'required|min:3',
           'phone' => 'required|regex:/[0-9]{9}/',
           'District'=>'required'

        ];
    }
    // public function mess()
    // {
    //     return [
    //        'address.required' => 'Khong duoc de trong',
           
    //        'Password.required' => 'Khong duoc de trong'
    //     ];
    // }
}
