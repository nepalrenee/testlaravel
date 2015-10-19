<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $table = ‘categories’; // table name in database
    
     public $timestamps = false;
}
