<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendeeRequest extends FormRequest
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
            'title'             => 'nullable|string|max:10',
            'first_name'        => 'required|string|max:255',
            'last_name'         => 'required|string|max:255',
            'gender'            => 'nullable|string|in:Male,Female,Other',
            'date_of_birth'     => 'nullable|date',
            'id_passport'       => 'required|string', // 'required|string|unique:attendees,id_passport',
            'email'             => 'required|email',
            'contact_number'    => 'required|string|max:20',
            'occupation'        => 'nullable|string|max:255',
            'company'           => 'nullable|string|max:255',
            'industry'          => 'nullable|string|max:255',
            'citizenship'       => 'nullable|string|max:255',
            'region'            => 'nullable|string|max:255',
            'package'           => 'required|string',
            'disability'        => 'nullable|string',
            'status'            => 'nullable|string',
            'payment_status'    => 'nullable|string',
            'attendance'        => 'nullable|boolean',
            'ticket_number'     => 'string|unique:attendees,ticket_number',
        ];
    }
}