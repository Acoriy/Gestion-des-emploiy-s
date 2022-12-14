<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploiye extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'registration_number','fullname','depart','hire_date','	phone','address','city'
    ];
}
