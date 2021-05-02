<?php

namespace App\Http\Controllers;

use App\Services\Currencies\Show\ShowCurrencyRequest;
use App\Services\Currencies\Show\ShowCurrencyService;

class ShowCurrencyController extends Controller
{
    private ShowCurrencyService $showCurrencyService;

    public function __construct(ShowCurrencyService $showCurrencyService)
    {

        $this->showCurrencyService = $showCurrencyService;
    }

    public function show(string $symbol)
    {
        $currency = $this->showCurrencyService->execute(
            new ShowCurrencyRequest($symbol)
        );
        session()->push('choice', $currency['symbol']);
        session()->push('choice', $currency['rate']);
        return redirect('/');
    }
}
