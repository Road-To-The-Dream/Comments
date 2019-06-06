<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'userName' => 'required',
            'email' => 'required|unique:comments,email',
            'myFile' => 'required|max:100|mimes:png, jpg, txt',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'userName.required' => 'Field userName is empty',
            'email.required' => 'Field email is empty',
            'email.unique' => 'Field email is empty',
            'myFile.required' => 'File not selected.',
            'myFile.max' => ' File may not be greater than 100 kilobytes',
            'myFile.mimes' => ' File must be a file of type: png, jpg, txt',
            'message.required' => 'Field message is empty'
        ];
    }
}
