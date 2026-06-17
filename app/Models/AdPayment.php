<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdPayment extends Model
{
    protected $fillable = [
        'ad_id',
        'amount',
        'payment_method',
        'transaction_id',
        'payment_slip',
        'status',
    ];

    public function ad()
    {
        return $this->belongsTo(SellerAd::class, 'ad_id');
    }

    public function getStatusBadgeAttribute(): string
    {
        $map = [
            'pending' => 'warning',
            'paid'    => 'success',
            'failed'  => 'danger',
        ];
        $color = $map[$this->status] ?? 'secondary';
        $label = ucfirst($this->status);
        return "<span class=\"badge badge-inline badge-soft-{$color}\">{$label}</span>";
    }
}
