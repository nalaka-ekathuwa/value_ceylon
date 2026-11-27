<?php

namespace App\Http\Controllers;

use App\Models\AdvertisingBanner;
use App\Models\AdvertisingCategory;
use App\Models\Product;
use App\Models\ProductStock;
use Illuminate\Http\Request;

class ProductBannerController extends Controller
{
    /**
     * The title prefix used to identify product banners in the AdvertisingBanner table.
     */
    const TITLE_PREFIX = 'home-product-banner';

    public function index()
    {
        $banners = AdvertisingBanner::where('title', 'LIKE', '%' . self::TITLE_PREFIX . '%')
            ->latest()
            ->paginate(10);

        return view('backend.advertising.product-banners.index', compact('banners'));
    }

    public function create()
    {
        $products = Product::where('published', 1)->with('stocks')->orderBy('name')->get();
        return view('backend.advertising.product-banners.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'banner'     => 'required',
        ]);

        // Fetch product to get the SKU from the first stock entry
        $product = Product::findOrFail($request->product_id);
        $stock   = ProductStock::where('product_id', $product->id)->first();
        $sku     = ($stock && !empty($stock->sku)) ? $stock->sku : $product->id;

        // Ensure the title contains 'home-product-banner' so the helper picks it up
        $title = self::TITLE_PREFIX . '-' . $product->id;

        // We use AdvertisingCategory id=5 (or any that fits). If no category needed,
        // we store 0; the helper ignores category_id for product banners.
        AdvertisingBanner::updateOrCreate(
            [
                'title'  => $title,
                'banner' => $request->banner,
            ],
            [
                'category_id' => 0,
                'meta'        => $sku,
            ]
        );

        flash(translate('Product banner created successfully'))->success();
        return redirect()->route('product-banners.index');
    }

    public function delete($id)
    {
        $banner = AdvertisingBanner::findOrFail($id);
        $banner->delete();

        flash(translate('Product banner deleted'))->success();
        return redirect()->route('product-banners.index');
    }

    /**
     * AJAX: search products by name for Select2.
     */
    public function searchProducts(Request $request)
    {
        $term = $request->get('term', '');
        $products = Product::where('published', 1)
            ->where('name', 'LIKE', "%{$term}%")
            ->select('id', 'name')
            ->limit(20)
            ->get();

        $results = $products->map(function ($p) {
            return ['id' => $p->id, 'text' => $p->name];
        });

        return response()->json(['results' => $results]);
    }
}
