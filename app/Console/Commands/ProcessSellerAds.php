<?php

namespace App\Console\Commands;

use App\Models\SellerAd;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ProcessSellerAds extends Command
{
    protected $signature   = 'ads:process';
    protected $description = 'Auto-activate and auto-expire seller ads based on dates.';

    public function handle()
    {
        $today = Carbon::today();

        // Auto-activate: active status, start_date <= today, end_date >= today
        // Ads pending_payment with paid payment that reach start_date → activate
        $activated = SellerAd::where('status', 'pending_payment')
            ->whereHas('payment', fn($q) => $q->where('status', 'paid'))
            ->where('start_date', '<=', $today)
            ->where('end_date', '>=', $today)
            ->update(['status' => 'active']);

        // Also activate already-approved ads that haven't reached start date yet
        // (admin may have approved early; now start_date has arrived)
        $activated2 = SellerAd::where('status', 'pending_payment')
            ->whereHas('payment', fn($q) => $q->where('status', 'paid'))
            ->where('start_date', '<=', $today)
            ->update(['status' => 'active']);

        // Auto-expire: active ads whose end_date < today
        $expired = SellerAd::where('status', 'active')
            ->where('end_date', '<', $today)
            ->update(['status' => 'expired']);

        $this->info("Activated: {$activated} ads. Expired: {$expired} ads.");
    }
}
