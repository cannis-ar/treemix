<?php

namespace App\Http\Controllers;

use App\Support\ProductCatalog;
use Illuminate\View\View;

class HomeController extends Controller
{
	public function index(): View
	{
		$slugs    = ['tree-mix-pro', 'biok-nn', 'zym', 'treemix-a'];
		$all      = collect(ProductCatalog::all())->keyBy('slug');
		$featured = collect($slugs)
			->map(fn($slug) => $all->get($slug))
			->filter()
			->values()
			->all();

		return view('pages.home', compact('featured'));
	}
}
