<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SurToken extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'amount', 'wallet', 'token', 'status', 'is_bonus'
    ];
}
