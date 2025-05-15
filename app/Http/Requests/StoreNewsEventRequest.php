<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsEventRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:100'],
            'type' => ['required', 'in:news,events'],
            'location' => ['required', 'in:nigeria, other'],
             // Event fields: required if type is "events"
            'event_date' => ['nullable', 'required_if:type,events', 'date'],
            'event_time' => ['nullable','required_if:type,events'],
            'event_venue' => ['nullable','required_if:type,events', 'string', 'max:255'],

            // News content: required if type is "news"
            'news_content' => ['nullable', 'required_if:type,news', 'string'],

            // Optional file upload
            'photo' => ['nullable', 'mimes:png,jpg,jpeg,gif', 'max:2048']

        ];
    }
}
