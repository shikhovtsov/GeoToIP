<?php

namespace App\Http\Response;

class Response
{
    const SUCCESS_STATUS = 'success';
    const FAIL_STATUS    = 'fail';

    static function success($data = null, $code = 200)
    {
        return self::response(self::SUCCESS_STATUS, $code, $data);
    }

    static function fail($data = null, $code = 400)
    {
        return self::response(self::FAIL_STATUS, $code, $data);
    }

    static function notFound()
    {
        return response('', 404);
    }

    static protected function response($status, $code, $data = null)
    {
        $response = [
            'status' => $status,
            'data'   => $data,
        ];

        return response()->json($response, $code);
    }


}