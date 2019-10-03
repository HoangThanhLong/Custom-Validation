<?php

namespace App\Http\Controllers;

use App\Http\Requests\FomrExampleRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function checkValidation(FomrExampleRequest $request){
        $success = "Dữ liệu được xác thực thành công";
        return view('welcome', compact('success'));
    }

}
