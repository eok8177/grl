<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function push(Request $request)
    {
        if ($request->get('ref',false) == 'refs/heads/master') {
            $script = "git pull origin master 2>&1";
            exec($script, $response);
            logger('run git pull:'.json_encode($response));
        }
        return 'OK';
    }
}