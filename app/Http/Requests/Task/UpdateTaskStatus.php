<?php

namespace App\Http\Requests\Task;

use App\Definitions\TaskStatus;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskStatus extends FormRequest
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
            'status' => 'required|in:' . implode(',', TaskStatus::getAllStatuses()), // validate if status passed is a valid status
        ];
    }
}
