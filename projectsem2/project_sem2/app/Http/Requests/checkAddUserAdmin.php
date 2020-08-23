<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkAddUserAdmin extends FormRequest
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
                'age'=>'required|integer|min:13|max:100',
                'email' => 'required|unique:users|max:255',
                'identity_cart'=>'required|regex:/[0-9]{9}/',
                'gender'=>'required',
                'password'=>'required|min:5',
                // 'address'=>'required|min:3',
                'phone' => 'required|regex:/[0-9]{10}/',
                'wards'=>'required|min:5',
                'district'=>'required|min:5',
                'city'=>'required|regex:/[A-z]+\s[A-z]+/'

     
             ];
        
    }
  
}
