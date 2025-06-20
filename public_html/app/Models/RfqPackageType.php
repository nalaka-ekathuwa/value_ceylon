<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfqPackageType extends Model
{
    use HasFactory;

    public $table = "rfq_package_types";

    public $fillable = ['name'];



}
