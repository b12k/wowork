<?php

namespace App\Http\Requests\User;

use DateTimeInterface;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
            ],
            'surname' => [
                'required',
                'string',
            ],
            'birthday' => [
                'required',
                'date_format:'.DateTimeInterface::ATOM,
            ],
            'gender' => [
                'required',
                'in:m,f,x',
            ],
            'email' => [
                'required',
                'email',
                'unique:users',
            ],
            'phone' => [
                'required',
                'integer',
                'digits:11',
                'unique:users',
            ],
            'password' => [
                'required',
                'string',
                'min:6',
            ],
            'passwordConfirmation' => [
                'same:password',
            ],
        ];
    }
}
