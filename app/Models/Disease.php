<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    public $timestamps=false;
    use HasFactory;

    protected $fillable=[
        'type',
        'symptoms',
        'medicine',

    ];

}
