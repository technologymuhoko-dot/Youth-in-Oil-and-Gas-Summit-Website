<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSponsorRequest extends FormRequest
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
            // Individual Representative
            'title'                  => 'nullable|string|max:10',
            'first_name'             => 'required|string|max:255',
            'last_name'              => 'required|string|max:255',
            'gender'                 => 'nullable|string|in:Male,Female,Other',
            'id_passport'            => 'required|string|unique:sponsorships,id_passport',
            'citizenship'            => 'nullable|string|max:255',
            'city_town'              => 'nullable|string|max:255',
            'email'                  => 'required|email|unique:sponsorships,email',
            'contact_number'         => 'required|string|max:20',
            'occupation'             => 'nullable|string|max:255',

            // Company Info
            'company'                => 'required|string|max:255',
            'company_contact_number' => 'nullable|string|max:20',
            'registration_number'    => 'nullable|string|max:100',
            'website'                => 'nullable|url|max:255',
            'industry'               => 'nullable|string|max:255',
            'region'                 => 'nullable|string|max:255',

            // Sponsorship Details
            'package'                => 'required|string',
            'register_datetime'      => 'nullable|date',
            'status'                 => 'nullable|string',
            'payment_status'         => 'nullable|string',
            'ticket_number'          => 'required|string|unique:sponsorships,ticket_number',
        ];
    }
}