<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisingBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'banner',
        'category_id',
        'meta',
    ];
    
    protected $guarded = [];


    public function category(){
        return $this->belongsTo(AdvertisingCategory::class,'category_id');
    }
}
