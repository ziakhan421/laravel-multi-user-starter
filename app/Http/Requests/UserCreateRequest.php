<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $rules = User::$rules;
        $rules['role'] = [
            Rule::requiredIf(function () {
                return auth()->check() && auth()->user()->role !== User::ADMIN_ROLE;
            }),
        ];
        $rules['plan'] = [
            Rule::requiredIf(function () {
                return auth()->check() && auth()->user()->role == User::ADMIN_ROLE;
            }),
        ];

        return $rules;
    }

}
