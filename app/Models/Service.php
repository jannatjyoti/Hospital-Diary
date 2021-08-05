<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Service extends Model
{
    protected $fillable = ['service_name','admin_id'];

    public function service_details(){
        return $this->hasMany('App\Models\ServiceDetail');
    }
    public function total()
	{
		return $this->service_details->sum(function($service_details) {
      return $service_details->total;
    });
	}
}
