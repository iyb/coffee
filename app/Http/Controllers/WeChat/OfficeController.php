<?php

namespace App\Http\Controllers\WeChat;

use Illuminate\Http\Request;
use Overtrue\LaravelWeChat\Facade as EasyWeChat;

class OfficeController extends Controller
{
    public function serve()
    {
        $app = EasyWeChat::officialAccount();
        return $app->server->serve();
    }
}
