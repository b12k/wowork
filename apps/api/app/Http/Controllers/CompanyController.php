<?php

namespace App\Http\Controllers;

use App\Helpers\Sid;
use App\Http\Requests\Company\CreateCompanyRequest;
use App\Http\Requests\User\GetUsersRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Traits\HasResponses;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    use HasResponses;

    public function index(GetUsersRequest $request): JsonResponse
    {
        $skip = (int) $request->get('skip', 0);
        $take = (int) $request->get('take', 10);

        $users = Company::skip($skip)->take($take)->get();

        $count = Company::count();

        return $this->successResponse([
            'users' => CompanyResource::collection($users),
            'count' => $count,
        ]);
    }

    public function store(CreateCompanyRequest $request): CompanyResource
    {
        $requestPayload = $request->validated();

        $user = new Company($requestPayload);

        $user->password = bcrypt($requestPayload['password']);

        $user->sid = Sid::generate();

        $user->save();

        return new CompanyResource($user);
    }

    public function show(Company $user): CompanyResource
    {
        return new CompanyResource($user);
    }

    public function update(Request $request, Company $user): JsonResponse
    {
        return $this->successResponse(['user' => $user], 'Company updated');
    }

    public function destroy(Company $user): JsonResponse
    {
        $user->delete();

        return $this->successResponse(message: 'Company deleted');
    }
}
