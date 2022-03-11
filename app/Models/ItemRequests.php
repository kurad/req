<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemRequests extends Model
{
    protected $fillable = [
        'itemname', 'quantity','unit_price'
    ];

    protected $hidden = [
        'created_at', 'updated_at','request_id'
        ];
}
