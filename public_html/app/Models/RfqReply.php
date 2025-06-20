<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RfqReply extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function shop(){
        return $this->hasOne(Shop::class,'user_id', 'user_id');
    }

}
