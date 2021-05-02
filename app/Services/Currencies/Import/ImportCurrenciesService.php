<?php

namespace App\Services\Currencies\Import;

use App\Models\Currency;

class ImportCurrenciesService
{
    public function execute()
    {
        $xmlString = file_get_contents('https://www.bank.lv/vk/ecb.xml');
        $xmlObject = simplexml_load_string($xmlString);
        $json = json_encode($xmlObject);
        $currencies = (json_decode($json, true))['Currencies']['Currency'];

        foreach ($currencies as $currency) {
            Currency::updateOrCreate([
                'symbol' => $currency['ID']
            ], [
                'symbol' => $currency['ID'],
                'rate' => (int) ((float) $currency['Rate'] * 100000)
            ]);
        };
    }
}
