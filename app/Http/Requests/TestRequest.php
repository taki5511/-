<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'test.subject' => 'required|string|max:100',
            'test.date' => 'required|string',
            'test.title' => 'required|string|max:100',
            'test.body' => 'required|string|max:5000',
            'test.answer' => 'required|string|max:5000',
        ];
    }
}
