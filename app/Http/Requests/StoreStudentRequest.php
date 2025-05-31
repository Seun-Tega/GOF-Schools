<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'student_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:Male,Female'], 
            'dob' => ['required', 'date'], 
            'guardian_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:students,email'],
            'phone' => ['required', 'string', 'max:20'],
            'relationship_to_student' => ['required', 'string', 'max:100'],
            'guardian_address' => ['required', 'string', 'max:255'],
            'student_class' => ['required', 'in:JSS1,JSS2,JSS3,SS1,SS2,SS3'],
            'student_type' => ['required', 'in:DAY,BOARDING'],
            'location' => ['required', 'in:osogbo,abidjan,ejigbo'],
            'condition' => ['nullable', 'string', 'max:1000'],
            'terms' => ['accepted'],

        ];
    }
}
