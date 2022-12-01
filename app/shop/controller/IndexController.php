<?php

namespace app\shop\controller;

use support\Request;

class IndexController
{
    public function index(Request $request)
    {
        return response("hellow rodl");
    }

    public function view(Request $request)
    {
        return view('index', ['name' => 'oman']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

}