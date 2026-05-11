<?php

namespace App\Http\Controllers;

use App\Support\ProductCatalog;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = collect(ProductCatalog::all())->sortBy('order')->values()->all();

        return view('pages.products-index', [
            'products' => $products,
        ]);
    }

    public function show(string $slug): View
    {
        $product = ProductCatalog::find($slug);

        if (!$product) {
            throw new NotFoundHttpException('Producto no encontrado.');
        }

        $related = collect(ProductCatalog::all())
            ->where('slug', '!=', $slug)
            ->shuffle()
            ->take(3)
            ->values()
            ->all();

        return view('pages.product-show', [
            'product' => $product,
            'related' => $related,
        ]);
    }
}
