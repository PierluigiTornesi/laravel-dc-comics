<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:200',
            'description' => 'nullable',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'The title of the comic is obligatory',
            'title.min' => 'The title of the comic must contain minimum :min characters',
            'title.max' => '
            The title of the comic can contain max :max characters',
            'thumb.required' => 'The comic thumb is obligatory',
            'price.required' => '
            The price of the comic is obligatory',
            'series.required' => 'The comic series
            is obligatory',
            'sale_date.required' => 'The date of the comic
            is obligatory',
            'type.required' => '
            The type of the comic is obligatory',
        ];
    }
}
