<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarShop extends Model
{
    protected $table = 'carshop';
    protected $fillable = ['name', 'location', 'size'];
}
