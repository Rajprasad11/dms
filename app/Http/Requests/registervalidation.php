<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class registervalidation extends Request
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
            'd_fname' => 'required',
            'd_lname' => 'required',
            'd_email' => 'required',
            'd_mobile' => 'required',
            'd_code' => 'required'

        ];
    }
}
