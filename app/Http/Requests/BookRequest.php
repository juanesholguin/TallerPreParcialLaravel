<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name_book' => ['required', 'string', 'max:255'],
            'author_name' => ['required', 'string', 'max:255'],
            'editorial_name' => ['required', 'string', 'max:255'],
            'number_pages' => ['required', 'integer', 'min:1'],
            'number_chapters' => ['required', 'integer', 'min:1'],
            'publication_date' => ['required', 'date'],
            'synopsis' => ['required', 'string'],
            'available' => ['boolean'],
        ];
    }
}
