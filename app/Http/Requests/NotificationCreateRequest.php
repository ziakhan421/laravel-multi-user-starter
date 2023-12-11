<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        /**
         * Validation rules
         *
         * @var array
         */
        return [
            'email-to' => 'exists:users,id',
            'email-message' => 'required|max:255',
            'email-subject' => 'required'
        ];
    }

}
