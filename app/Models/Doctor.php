<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['doctor_Name','designation','email','degree','specialized','number','chamber_time','room_no','admin_id'];
    use HasFactory;
    
    public function hospital(){
        return $this->belongsTo('App\Models\Admin','admin_id');
    }

}
