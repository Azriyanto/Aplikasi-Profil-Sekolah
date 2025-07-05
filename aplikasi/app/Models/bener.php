<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bener extends Model
{
    use HasFactory;
    protected $table = 'bener';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
