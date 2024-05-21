<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PDCFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif',
            'first_name' => 'required|min:3',
            'last_name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|min:11|max:11',
            'age' => 'required',
            'birthday' => 'required',
            'date' => 'required',
            'course' => '',
            'valid_id' => 'required|image|mimes:jpeg,png,jpg,gif',
            'paid_attachment' => 'required|image|mimes:jpeg,png,jpg,gif',
            'transmission' => 'required',
        ];
    }
}
