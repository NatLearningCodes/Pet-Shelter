<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoptor extends Model
{
    use HasFactory;
    protected $fillable = ['adoptor_ID', 'adoptor_Name', 'adoptor_Contactnumber', 'adoptor_Address','adoptor_Age', 'adoptor_Birthday', 'adoptor_Gender'];
}
