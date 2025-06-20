<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\RFQImage;
use App\Models\RFQStatus;
use App\Models\RfqPackageType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rfq extends Model
{
    use HasFactory;

    public $table = "rfqs";

    public $guarded = [];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'product_category');
    }

    public function package_type(){
        return $this->belongsTo(RfqPackageType::class,'package_type_id');
    }

    public function images(){
        return $this->hasMany(RFQImage::class, 'rfq_id');
    }

    public function quoteStatus(){
        return $this->belongsTo(RFQStatus::class, 'status');
    }

}
