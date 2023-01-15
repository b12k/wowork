<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserLoginRequest;
use App\Models\User;
use App\Traits\HasResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserAuthController extends Controller
{
    use HasResponses;

    public function store(UserLoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return $this->errorResponse(
                message: 'Bad credentials',
                statusCode: Response::HTTP_UNAUTHORIZED,
            );
        }

        $token = $user->createToken(
            $request->header('User-Agent'),
            [
                'access:user',
            ],
        );

        return $this->successResponse([
            'token' => $token->plainTextToken,
        ], 'Login successful');
    }

    public function destroy(Request $request)
    {
        $user = $request->user();
        $message = 'User logout successful';

        if ($request->get('all') == 'true') {
            $message = 'User logout on all devices successfully';
            $user->tokens()->delete();
        } else {
            $user->currentAccessToken()->delete();
        }

        return $this->successResponse(message: $message);
    }
}
