<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\CustomerProduct;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [];

        /**
         * STATIC PAGES
         */
        $staticPages = [
            '/',
            '/contact-us',
            '/about-value-ceylon',
            '/advertise-with-us',
            '/sell-on-value-ceylon',
            '/faq',
            '/faq_seller',
            '/faq_customer',
            '/faq_special',
            '/our_services',
            '/value-ceylon-sourcing',
            '/upload_presctiption',
            '/seller-policy',
            '/return-policy',
            '/support-policy',
            '/terms',
            '/privacy-policy',
            '/track-your-order',
            '/brands',
            '/categories',
            '/inhouse',
            '/coupons',
            '/sellers',
            '/customer-packages',
            '/todays-deal',
            '/flash-deals',
            '/blog',
        ];

        foreach ($staticPages as $page) {
            $urls[] = [
                'loc' => url($page),
                'changefreq' => 'daily',
                'priority' => '0.8',
            ];
        }

        /**
         * DYNAMIC CUSTOM PAGES (FROM BACKEND)
         */
        Page::select('slug', 'updated_at')
            ->whereNotNull('slug')
            ->chunk(500, function ($pages) use (&$urls) {
                foreach ($pages as $page) {
                    $urls[] = [
                        'loc' => url("/{$page->slug}"),
                        'lastmod' => $page->updated_at ? $page->updated_at->toAtomString() : null,
                        'changefreq' => 'weekly',
                        'priority' => '0.7',
                    ];
                }
            });

        /**
         * BLOG POSTS
         */
        Blog::select('slug', 'updated_at')
            ->whereNotNull('slug')
            ->chunk(500, function ($posts) use (&$urls) {
                foreach ($posts as $post) {
                    $urls[] = [
                        'loc' => url("/blog/{$post->slug}"),
                        'lastmod' => $post->updated_at ? $post->updated_at->toAtomString() : null,
                        'changefreq' => 'daily',
                        'priority' => '0.7',
                    ];
                }
            });

        /**
         * PRODUCTS (APPROVED & PUBLISHED ONLY)
         */
        Product::isApprovedPublished()
            ->select('slug', 'updated_at')
            ->whereNotNull('slug')
            ->chunk(500, function ($products) use (&$urls) {
                foreach ($products as $product) {
                    $urls[] = [
                        'loc' => url("/product/{$product->slug}"),
                        'lastmod' => $product->updated_at ? $product->updated_at->toAtomString() : null,
                        'changefreq' => 'daily',
                        'priority' => '0.9',
                    ];
                }
            });

        /**
         * CUSTOMER PRODUCTS
         */
        CustomerProduct::select('slug', 'updated_at')
            ->whereNotNull('slug')
            ->chunk(500, function ($items) use (&$urls) {
                foreach ($items as $cp) {
                    $urls[] = [
                        'loc' => url("/customer-product/{$cp->slug}"),
                        'lastmod' => $cp->updated_at ? $cp->updated_at->toAtomString() : null,
                        'changefreq' => 'weekly',
                        'priority' => '0.6',
                    ];
                }
            });

        /**
         * CATEGORIES
         */
        Category::select('slug', 'updated_at')
            ->whereNotNull('slug')
            ->chunk(500, function ($cats) use (&$urls) {
                foreach ($cats as $cat) {
                    $urls[] = [
                        'loc' => url("/category/{$cat->slug}"),
                        'lastmod' => $cat->updated_at ? $cat->updated_at->toAtomString() : null,
                        'changefreq' => 'weekly',
                        'priority' => '0.6',
                    ];
                }
            });

        /**
         * BRANDS
         */
        Brand::select('slug', 'updated_at')
            ->whereNotNull('slug')
            ->chunk(500, function ($brands) use (&$urls) {
                foreach ($brands as $brand) {
                    $urls[] = [
                        'loc' => url("/brand/{$brand->slug}"),
                        'lastmod' => $brand->updated_at ? $brand->updated_at->toAtomString() : null,
                        'changefreq' => 'weekly',
                        'priority' => '0.6',
                    ];
                }
            });

        return response()
            ->view('sitemap.xml', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }
}

