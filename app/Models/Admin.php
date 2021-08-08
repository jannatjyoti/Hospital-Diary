<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    
    public function doctors(){
        return $this->hasMany('App\Models\Doctor');
    }
    
    public function service_details(){
        return $this->hasMany('App\Models\ServiceDetail');
    }
}
