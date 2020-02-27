<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //
           // 'contact_name'=>'alpha|min:3|max:255',
            //'contact_email' => 'email|unique:emails',
            
           
            //'contact_message'=> 'alpha|max:500|min:10'
        ];
    }
}
