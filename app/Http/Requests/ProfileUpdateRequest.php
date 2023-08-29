<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'company_name' => ['nullable', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            "company_phone" => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
            "company_address" => ['nullable','regex:/(^[-0-9A-Za-z.,\/ ]+$)/'],
            "company_address2" => ['nullable', 'regex:/(^[-0-9A-Za-z.,\/ ]+$)/'],
            "company_city" => ['nullable', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            "company_state" => ['nullable', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            "company_zipcode" => ['nullable', 'regex:/\b\d{5}\b/'],
            "company_website" => 'nullable|url:http,https',      
        ];
    }
}