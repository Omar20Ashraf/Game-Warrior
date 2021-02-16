<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LatestNewsRequest extends FormRequest
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
            'description'   =>'required|max:225|string',
            'tag_name'      =>'required|max:225|string',
            'tag_color'     =>'required|max:225|string'
        ];
    }
}
