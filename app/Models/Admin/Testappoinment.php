<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testappoinment extends Model
{
    use HasFactory;
    protected $fillable = ['bookingid','testid','patient', 'phone','age','address','date','time','report','sample'];
}
