<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rescuer extends Model
{
    use HasFactory;
    protected $fillable = ['rescuer_ID', 'rescuer_Name', 'rescuer_ContactNumber', 'rescuer_Address','rescuer_Age', 'rescuer_Birthday', 'rescuer_Gender'];
}
