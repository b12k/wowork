<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class GetCompaniesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'skip' => 'numeric|min:0',
            'take' => 'numeric|min:1|max:100',
        ];
    }
}
