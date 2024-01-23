<?php

namespace App\Helpers;

use App\Enums\HttpStatusCodesEnum;
use Illuminate\Http\JsonResponse;

class HttpResponses{
    static function success($data, $message=null, $code=HttpStatusCodesEnum::Ok, $status=HttpStatusCodesEnum::Success) : JsonResponse {
        $_status = HttpStatusCodesEnum::getResponseArrayStatusCode($status);
        return response()->json([
            "status" => $_status['code'],
            "description" => $_status['desc'],
            "message" => $message,
            "data" => $data
        ], $code);
    }

    static function error($data, $message=null, $code=null, $status=HttpStatusCodesEnum::UnexpectedErrorOccurred) : JsonResponse {
        $_status = HttpStatusCodesEnum::getResponseArrayStatusCode($status);
        return response()->json([
            "status" => $_status['code'],
            "description" => $_status['desc'],
            "message" => $message,
            "data" => $data
        ], $code ?? 400);
    }
}
