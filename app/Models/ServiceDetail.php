<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    public $serviceName;
    protected $fillable= ['total','running','service_id','admin_id'];

    public function services(){
        return $this->belongsTo('App\Models\Service','service_id');
    }
    
    public function available(){
        return $this->total - $this->running;
    }
}
