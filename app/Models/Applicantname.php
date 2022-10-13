<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicantname extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','position','email','phone','location','resume'
    ];
}
