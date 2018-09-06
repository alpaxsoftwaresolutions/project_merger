<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authentication extends Model
{
    //Table name
	protected $table ='authentications';
	//primary key
	public $primaryKey = 'id';
	//name
	public $name ='name';
	//order
	public $order_id = 'order_id';
}
