<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $fillable=[
        'ime',
        'prezime',
        'datum',
        'specijalizacija',
       



    ];
}
