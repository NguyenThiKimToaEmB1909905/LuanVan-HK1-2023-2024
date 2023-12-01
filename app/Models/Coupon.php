<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'coupon_name', 'coupon_code', 'coupon_times', 'coupon_number', 'coupon_condition'
    ];
    protected $primaryKey = 'coupon_id';
    protected $table = 'tbl_coupon';
}