<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['doctor_Name','email','degree','specialized','number','chamber_time','room_no','admin_id'];
    use HasFactory;

}
