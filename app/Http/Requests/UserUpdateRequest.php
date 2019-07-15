<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'      => 'required|string|max:255',
            'phone'  => 'required|string|max:15',
            'email'     => ['required', Rule::unique('users')->ignore($this->user->id),],
            'password'  => ['sometimes', 'required', 'string', 'min:6', 'confirmed',Rule::unique('users')->ignore($this->user->id)],
        ];

        
        return $rules;
    }
}
