<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class validate extends Controller
{
    public function showform(Request $request)
    {
        return view('Validate.formValidate');
    }
    public function getdata(TestRequest $request)
    // a nho cho cai request nay vao n moi validate duoc
    {
        dd($request->UserName);
    }
}
