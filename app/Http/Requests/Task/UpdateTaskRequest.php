<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
            'title' => 'string',
            'priority' => 'integer|min:0|max:10',
            'project_id' => 'integer|exists:projects,id',
            'description' => 'string|max:50',
            'image_attachment' => 'string',
            'author' => 'string',
            'assignee' => 'string',
        ];
    }
}
