<?php

namespace App\Http\Requests;

use App\Models\category;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Auth;

class updateRequest extends FormRequest
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
//        $category = category::where('user_id', Auth::user()->id)->where('id', $id)->first();
//
//        return [
//            'parent_id' => 'bail|regex:(^[0-9]*$)|nullable|not_in:' . $category->id
//        ];
    }
}
