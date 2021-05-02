<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function index(Request $request): string
    {
        session()->put('choice',[$request['amount']]);
        return redirect("/currencies/{$request['currency']}");
    }
}
