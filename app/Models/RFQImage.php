<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RFQImage extends Model
{
    use HasFactory;

    protected $table = 'rfq_images';

    protected $guarded = [];


    public function rfq(){
        return $this->belongsTo(Rfq::class,'rfq_id');
    }
}
