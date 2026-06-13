<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SellerAd extends Model
{
    protected $fillable = [
        'seller_id',
        'placement',
        'position',
        'ad_type',
        'media',
        'product_id',
        'start_date',
        'end_date',
        'duration_days',
        'price',
        'status',
        'reject_reason',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date'   => 'date',
    ];

    // Relationships
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function payment()
    {
        return $this->hasOne(AdPayment::class, 'ad_id');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeForPlacement($query, string $placement, string $position)
    {
        return $query->where('placement', $placement)->where('position', $position);
    }

    // Helpers
    public function getStatusBadgeAttribute(): string
    {
        $map = [
            'draft'           => 'secondary',
            'pending_payment' => 'warning',
            'active'          => 'success',
            'expired'         => 'dark',
            'rejected'        => 'danger',
        ];
        $color = $map[$this->status] ?? 'secondary';
        $label = ucwords(str_replace('_', ' ', $this->status));
        return "<span class=\"badge badge-inline badge-soft-{$color}\">{$label}</span>";
    }

    public function getPositionLabelAttribute(): string
    {
        return ucwords(str_replace('_', ' ', $this->position));
    }

    /**
     * Count active ads occupying a given slot on given dates.
     */
    public static function occupiedSlots(string $placement, string $position, string $start, string $end, ?int $excludeId = null): int
    {
        $query = self::where('placement', $placement)
            ->where('position', $position)
            ->whereIn('status', ['pending_payment', 'active'])
            ->where(function ($q) use ($start, $end) {
                $q->whereBetween('start_date', [$start, $end])
                  ->orWhereBetween('end_date', [$start, $end])
                  ->orWhere(function ($q2) use ($start, $end) {
                      $q2->where('start_date', '<=', $start)->where('end_date', '>=', $end);
                  });
            });

        if ($excludeId) {
            $query->where('id', '!=', $excludeId);
        }

        return $query->count();
    }
}
