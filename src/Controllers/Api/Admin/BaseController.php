<?php

namespace SheaXiang\LaravelAdmin\Controllers\Api\Admin;

use Illuminate\Routing\Controller;
use Dingo\Api\Routing\Helpers;

class BaseController extends Controller
{
    use Helpers;

    protected function respondWithToken($token, $guard = 'api', $data = null)
    {
        $resData = [
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth($guard)->factory()->getTTL()
        ];

        if(!empty($data)){
            $resData = array_merge($data,$resData);
        }
        return succeed($resData);
    }
}
