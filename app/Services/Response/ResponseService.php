<?php

namespace App\Services\Response;

/**
 * Description of ResponseService
 *
 * @author D835
 */
class ResponseService 
{
    private static function responseParams($status, $errors = [], $data = []) {
        
        return [
            'status' => $status,
            'errors' => (object)$errors,
            'data' => (object)$data,
        ];
    }
    
    public static function sendJsonResponse($status, $code = 200, $errors = [], $data = []) {
        return response()->json(
            self::responseParams($status, $errors, $data),
            $code
        );
    }
    
    public static function success($data = []) {
        return self::sendJsonResponse(false, 404, $data, [], []);
    }
}
