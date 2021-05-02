<?php

namespace App\Http\Controllers;

use App\Services\Currencies\Import\ImportCurrenciesService;

class ImportCurrenciesController extends Controller
{
    private ImportCurrenciesService $importCurrenciesService;

    public function __construct(ImportCurrenciesService $importCurrenciesService)
    {
        $this->importCurrenciesService = $importCurrenciesService;
    }

    public function perform()
    {
        $this->importCurrenciesService->execute();
    }
}
