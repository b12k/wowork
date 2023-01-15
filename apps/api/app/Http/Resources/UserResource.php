<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'sid' => $this->sid,
            'name' => $this->name,
            'surname' => $this->surname,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'email' => $this->email,
            'birthday' => $this->birthday,
            'isEmailVerified' => (bool) $this->email_verified_at,
            'isPhoneVerified' => (bool) $this->phone_verified_at,
            'isIdentityVerified' => (bool) $this->identity_verified_at,
        ];
    }
}
