<?php

namespace App\Http\Controllers;

use App\Support\ProductCatalog;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $featured = collect(ProductCatalog::all())
            ->sortBy('order')
            ->take(6)
            ->values()
            ->all();

        return view('pages.home', [
            'featured' => $featured,
        ]);
    }
}
