<?php

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Brand;
use App\Models\CustomerProduct;
use App\Models\Page;

Route::get('/sitemap.xml', function () {

    $sitemap = Sitemap::create();

    /**
     *  STATIC PUBLIC ROUTES
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
        '/terms_condition',
        '/policy_section',
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
        $sitemap->add(
            Url::create($page)
                ->setChangeFrequency('daily')
                ->setPriority(0.8)
        );
    }

    /**
     *  DYNAMIC BLOG POSTS
     */
    foreach (Blog::all() as $post) {
        if ($post->slug) {
            $sitemap->add(
                Url::create("/blog/{$post->slug}")
                    ->setChangeFrequency('daily')
                    ->setPriority(0.7)
            );
        }
    }

    /**
     *  DYNAMIC PRODUCTS
     */
    foreach (Product::all() as $product) {
        if ($product->slug) {
            $sitemap->add(
                Url::create("/product/{$product->slug}")
                    ->setChangeFrequency('daily')
                    ->setPriority(0.9)
            );
        }
    }

    /**
     *  DYNAMIC CUSTOMER PRODUCTS
     */
    foreach (CustomerProduct::all() as $cp) {
        if ($cp->slug) {
            $sitemap->add(
                Url::create("/customer-product/{$cp->slug}")
                    ->setChangeFrequency('weekly')
                    ->setPriority(0.6)
            );
        }
    }

    /**
     *  DYNAMIC CATEGORIES
     */
    foreach (Category::all() as $cat) {
        if ($cat->slug) {
            $sitemap->add(
                Url::create("/category/{$cat->slug}")
                    ->setChangeFrequency('weekly')
                    ->setPriority(0.6)
            );
        }
    }

    /**
     *  DYNAMIC BRANDS=
     */
    foreach (Brand::all() as $brand) {
        if ($brand->slug) {
            $sitemap->add(
                Url::create("/brand/{$brand->slug}")
                    ->setChangeFrequency('weekly')
                    ->setPriority(0.6)
            );
        }
    }

    /**
     *  DYNAMIC CUSTOM PAGES
     *  (Route: /{slug})
     */
    // foreach (Page::all() as $page) {
    //     if ($page->slug) {
    //         $sitemap->add(
    //             Url::create("/{$page->slug}")
    //                 ->setChangeFrequency('monthly')
    //                 ->setPriority(0.5)
    //         );
    //     }
    // }

    /**
     *  RENDER + ADD XSL STYLING
     */

    $sitemapXml = $sitemap->render();

    $xml = preg_replace(
        '/^<\?xml[^>]+\?>/i',
        '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL .
        '<?xml-stylesheet type="text/xsl" href="/sitemap.xsl"?>',
        $sitemapXml
    );

    return response($xml, 200)->header('Content-Type', 'application/xml');
});
