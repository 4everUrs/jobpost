<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantForm extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','position','email','phone','address','resume_file','company','location','status','listing_id'
    ];
}
