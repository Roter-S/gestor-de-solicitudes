<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class RegisterRequest extends FormRequest
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
        $dt = new Carbon();
        $before = $dt->subYears(18)->format("d-m-Y");
        return [
            'firstName' => 'alpha|required',
            'secondName' => 'alpha|required',
            'firstLastName' => 'alpha|required',
            'secondLastName' => 'alpha|required',
            'marriedLastName' => 'alpha|nullable',
            'birthDate' => "required|date|before:" . $before,
            'dpi' => 'required|unique:users|alpha_num|min:13',
            'profession' => 'nullable',
            'yearsWorking' => 'nullable|alpha_num|gt:0',
            'photo' => 'required|mimes:jpg,png|dimensions:min_width=400,min_height=600',
            'salary' => 'required_with:yearsWorking',
            'email' => 'required',
        ];
    }
}
