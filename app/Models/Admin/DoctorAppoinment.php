<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAppoinment extends Model
{
    use HasFactory;
    protected $fillable = ['doctor','patient', 'phone','age','date','time'];
}
