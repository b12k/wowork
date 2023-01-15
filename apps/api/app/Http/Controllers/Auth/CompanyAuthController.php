<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CompanyLoginRequest;
use App\Models\Company;
use App\Traits\HasResponses;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class CompanyAuthController extends Controller
{
    use HasResponses;

    public function store(CompanyLoginRequest $request)
    {
        $company = Company::where('email', $request->email)->first();

        if (! $company || ! Hash::check($request->password, $company->password)) {
            return $this->errorResponse(
                message: 'Bad credentials',
                statusCode: Response::HTTP_UNAUTHORIZED,
            );
        }

        $token = $company->createToken(
            $request->header('User-Agent'),
            [
                'access:company',
            ],
        );

        return $this->successResponse(
            ['token' => $token->plainTextToken],
            'Login successful',
        );
    }

    public function destroy(Request $request): JsonResponse
    {
        $company = $request->user();
        $message = 'Company logout successful';

        if ($request->get('all') == 'true') {
            $message = 'Company logout on all devices successfully';
            $company->tokens()->delete();
        } else {
            $company->currentAccessToken()->delete();
        }

        return $this->successResponse(message: $message);
    }
}
