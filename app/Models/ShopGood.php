<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopGood extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [];
}
