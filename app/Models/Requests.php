<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = [
        'department'
    ];

    protected $hidden = [
        'created_at', 'updated_at','requested_by'
        ];
}
