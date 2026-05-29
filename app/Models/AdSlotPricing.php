<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdSlotPricing extends Model
{
    protected $fillable = [
        'placement',
        'position',
        'total_slots',
        'price_per_day',
    ];

    /**
     * Human readable position label.
     */
    public function getLabelAttribute(): string
    {
        return ucwords(str_replace('_', ' ', $this->position));
    }

    /**
     * Placement labels map.
     */
    public static function placements(): array
    {
        return ['home', 'category'];
    }

    /**
     * All defined positions per placement.
     */
    public static function positionsFor(string $placement): array
    {
        $map = [
            'home' => [
                'premium_hero_slider'   => 4,
                'sidebar_spotlight'     => 1,
                'featured_ad_blocks'    => 3,
                'mid_page_carousel'     => 4,
                'bottom_showcase_slider'=> 4,
            ],
            'category' => [
                'category_top'     => 3,
                'category_sidebar' => 1,
            ],
        ];

        return $map[$placement] ?? [];
    }
}
