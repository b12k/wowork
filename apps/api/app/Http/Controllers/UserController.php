<?php

namespace App\Http\Controllers;

use App\Helpers\Sid;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\GetUsersRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\HasResponses;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use HasResponses;

    public function index(GetUsersRequest $request): JsonResponse
    {
        $skip = (int) $request->get('skip', 0);
        $take = (int) $request->get('take', 10);

        $users = User::skip($skip)->take($take)->get();

        $count = User::count();

        return $this->successResponse([
            'users' => UserResource::collection($users),
            'count' => $count,
        ]);
    }

    public function store(CreateUserRequest $request): UserResource
    {
        $requestPayload = $request->validated();

        $user = new User($requestPayload);

        $user->password = bcrypt($requestPayload['password']);

        $user->sid = Sid::generate();

        $user->save();

        return new UserResource($user);
    }

    public function show(User $user): UserResource
    {
        return new UserResource($user);
    }

    public function update(Request $request, User $user): JsonResponse
    {
        return $this->successResponse(['user' => $user], 'User updated');
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return $this->successResponse(message: 'User deleted');
    }
}
