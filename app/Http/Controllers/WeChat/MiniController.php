<?php

namespace App\Http\Controllers\WeChat;

use Illuminate\Http\Request;
use Overtrue\LaravelWeChat\Facade as EasyWeChat;

class MiniController extends Controller
{
    public function serve()
    {
        $app = EasyWeChat::miniProgram();
        return $app->server->serve();
    }
}
