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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pointOfDeparture' => 'required',
            'pointOfArrival' => 'required',
            'date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'pointOfDeparture.required' => 'Город отправления не введён!',
            'pointOfArrival.required' => 'Город прибития не введён!',
            'date.required' => 'Дата не введена!'
        ];
    }
}
