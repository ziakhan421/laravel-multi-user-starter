<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $rules = User::$rules;
        $rules['newPassword'] = 'min:6';
        $rules['role'] = [
            Rule::requiredIf(function () {
                return auth()->check() && auth()->user()->role !== User::ADMIN_ROLE;
            }),
        ];
        $rules['email'] = $rules['email'] . "," . $this->route("id");
        $rules['username'] = $rules['username'] . "," . $this->route("id");
        return $rules;
    }

}
