<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class TopDeskUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'topdesk_url' => ['nullable', 'string', 'max:255'],
            'topdesk_username' => ['nullable', 'string', 'max:255'],
            'topdesk_password' => ['nullable', 'string', 'max:255'],
        ];
    }
}
