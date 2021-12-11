<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeRequest extends FormRequest
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
            'name' => 'bail|required|unique:categorys|regex:([a-z]+)',
            'name_en' => 'bail|required|unique:categorys|regex:([a-z]+)',
            'parent_id' => 'bail|regex:(^[0-9]*$)|nullable|'
        ];
    }
}
