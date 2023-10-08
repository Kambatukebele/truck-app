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
            'name' => 'required|string|max:50',
            'email' => 'required|email|Rule::unique(User::class)->ignore($this->user()->id)',
            'company_name' => 'required|string',
            "company_phone" => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            "company_address" => 'required|string',
            "company_address2" => 'nullable|string',
            "company_city" => 'required|string',
            "company_state" => 'required|string',
            "company_zipcode" => 'required|numeric|min:5',
            "company_website" => 'nullable|url:http,https',      
        ];
    }
}