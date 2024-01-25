<?php

namespace App\Traits;

use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;

trait HttpResponses
{
    public function success(array|null|Model|JsonResource $data = [], string $message = 'Data returned successfully', string|int $status = 200)
    {
        return response()->json([
            'message' => $message,
            'success' => true,
            'data' => $data
        ], $status);
    }

    public function error(array|null|MessageBag $errors = [], string $message = 'Something went wrong', string|int $status = 400)
    {
        return response()->json([
            'message' => $message,
            'success' => false,
            'errors' => $errors,
        ], $status);
    }
}
