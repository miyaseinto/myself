<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use App\Http\Validators;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->get();
        return view('hello.index', ['items'=>$items ]);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view('hello.index',
            ['msg' => '「' . $msg .
            '」Cookieに保存しました。']);
        $response->cookie('msg', $msg, 100);
        return $response;
    }

    public function show(Request $request)
    {
        $items = DB::table('people')->orderBy('age', 'asc')
            ->get();
        return view('hello.show', ['items' => $items]);
    }

}
