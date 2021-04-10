<?php

namespace App\Http\Controllers\API\Traits;


trait ApiResponseTrait
{
    public function ApiResponse($data = null , $error = null, $code = 200)
    {
        $array = [

            'status' => $code == in_array($code, $this->successCode()) ? true : false,
            'message' => $error,
        ];
        return response($array, $code);
    }
    public function successCode()
    {
        return [
            200, 201, 202
        ];
    }
}
