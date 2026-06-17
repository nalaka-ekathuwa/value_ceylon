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

    protected $appends = ['label', 'remaining_slots'];

    /**
     * Human readable position label.
     */
    public function getLabelAttribute(): string
    {
        return ucwords(str_replace('_', ' ', $this->position));
    }

    /**
     * Get remaining slots attribute.
     */
    public function getRemainingSlotsAttribute(): int
    {
        return $this->getRemainingSlotsCount();
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
                'category_top'     => 4,
                'category_sidebar' => 1,
            ],
        ];

        return $map[$placement] ?? [];
    }

    /**
     * Check if the position's slot quantity is editable.
     */
    public function isEditable(): bool
    {
        $editable = [
            'home' => ['premium_hero_slider', 'mid_page_carousel', 'bottom_showcase_slider'],
            'category' => ['category_top'],
        ];

        return in_array($this->position, $editable[$this->placement] ?? []);
    }

    /**
     * Get occupied slots count for a given date range.
     */
    public function getOccupiedSlotsCount(?string $start = null, ?string $end = null, ?int $category_id = null, ?int $subcategory_id = null): int
    {
        $start = $start ?: date('Y-m-d');
        $end = $end ?: date('Y-m-d');
        return SellerAd::occupiedSlots($this->placement, $this->position, $start, $end, null, $category_id, $subcategory_id);
    }

    /**
     * Get remaining slots count for a given date range.
     */
    public function getRemainingSlotsCount(?string $start = null, ?string $end = null, ?int $category_id = null, ?int $subcategory_id = null): int
    {
        return max(0, $this->total_slots - $this->getOccupiedSlotsCount($start, $end, $category_id, $subcategory_id));
    }
}

