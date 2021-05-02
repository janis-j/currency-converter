<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConverterController extends Controller
{
    public function index(Request $request)
    {
//        $request->session()->flush();

        $currency = $request->session()->get('choice');

        $image = Storage::disk('public')->get('images/currencies.jpg');

        $currencies = Currency::all();
        return view('converter.show', [
            'currencies' => $currencies,
            'choice' => $currency,
            'curr_img' => $image
        ]);
    }
}
