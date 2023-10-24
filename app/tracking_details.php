<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tracking_details extends Model
{
    
	protected $table = 'tracking_details';
	protected $primaryKey = 'td_id';
	protected $fillable = ['u_id', 'used_trackings'];
	public $timestamps = false;
  
	
}