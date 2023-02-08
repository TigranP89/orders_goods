<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * BaseController constructor.
     */
    public function __construct()
    {
    }
}
