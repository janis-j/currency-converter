<?php

namespace App\Services\Currencies\Show;

use App\Models\Currency;

class ShowCurrencyService
{
    public function execute(ShowCurrencyRequest $request)
    {
        return Currency::findOrFail($request->symbol());
    }
}
