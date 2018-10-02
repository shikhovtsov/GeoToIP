<?php

namespace App\Http\Controllers;

use App\Http\Response\Response;
use App\Models\Ip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IpController extends Controller
{
    const VALIDATION_ERROR = 'Ip parameter is missing or has the wrong format';

    public function ipToGeo(Request $request)
    {
        $validationRules = [
            'ip' => 'required|ip',
        ];

        $validator = Validator::make($request->all(), $validationRules);

        if ($validator->fails()) {
            return Response::fail(self::VALIDATION_ERROR);
        }

        $ip = Ip::findByValue($request->get('ip'));

        if (!$ip) {
            return Response::notFound();
        }

        return Response::success($ip);
    }
}
