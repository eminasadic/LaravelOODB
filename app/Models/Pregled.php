<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregled extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $fillable=[
        'doktor1',
        'pacijent1',
        'bolest1',
        'lijek1',
        



    ];
}
