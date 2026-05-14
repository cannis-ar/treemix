<?php

namespace App\Http\Controllers;

use App\Support\ProductCatalog;
use Illuminate\View\View;

class CalculatorController extends Controller
{
    public function index(): View
    {
        $products = collect(ProductCatalog::all())->sortBy('order')->values()->all();

        return view('pages.calculator', [
            'products' => $products,
        ]);
    }
}
