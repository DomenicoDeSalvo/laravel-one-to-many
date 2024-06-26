<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateProjectRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'slug' => ['required', 'max:255', Rule::unique('projects')->ignore($this->project)],
            'description' => 'required',
            'starting_date' => 'required|date',
            'link' => 'required|url',
            'type_id' => 'nullable|exists:types,id'
        ];
    }
}
