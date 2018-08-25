<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addSlideRequest extends FormRequest
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
            'image' => 'required|image',
            'status' => 'required'
        ];
    }

    public function messages(){
           return [
            'image.required' => 'truong nay khong dc de trong',
            'image.image' => 'truong nay bat buoc la anh',
            'status.required' =>'truong nay khong duoc de trong'
           ];
    }
}
