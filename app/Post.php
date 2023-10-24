<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
	protected $table = 'track';
	protected $primaryKey = 't_id';
	protected $fillable = ['t_number', 't_city', 't_state', 't_status', 't_date', 't_ship', 'd_zip', 't_use'];
	public $timestamps = false;
  
	
}