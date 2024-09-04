<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotificationRequest extends FormRequest
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
            'type' => 'required|string|in:marketing,invoices,system', // Allowed notification types
            'content' => 'required|string', // Notification content
            'expiration' => 'nullable|date|after:now', // Expiration date should be in the future
            'user_id' => 'nullable|exists:users,id', // Valid user ID
        ];
    }
}
