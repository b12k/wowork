<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait HasResponses
{
    public function successResponse(
        array|null $data = null,
        string|null $message = null,
        int $statusCode = Response::HTTP_OK,
    ): JsonResponse {
        return $this->sendResponse($statusCode, $message, $data);
    }

    public function errorResponse(
        array|null $data = null,
        string|null $message = null,
        int $statusCode = Response::HTTP_BAD_REQUEST,
    ): JsonResponse {
        return $this->sendResponse($statusCode, $message, $data);
    }

    private function sendResponse(
        int $statusCode,
        string|null $message,
        array|null $data,
    ): JsonResponse {
        return response()->json([
            'status' => Response::$statusTexts[$statusCode],
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }
}
