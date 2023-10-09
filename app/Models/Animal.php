<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['animal_ID', 'animal_Name', 'animal_Breed', 'animal_Age', 'animal_Birthday', 'animal_Gender'];
    
}