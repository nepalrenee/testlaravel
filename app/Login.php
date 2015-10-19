<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
	//plural name of the class will be used as the tabl
	//e name unless another name is explicitly specified.
	 protected $table = 'userslogin';

	 protected $fillable = ['username','password'];

	 $primarykey = 'loginid';

	 public function user(){
	 	return $this->hasMany('Users');
	 }
 
	 // $user = Login::all();

	  // var_dump($user);
}



// class Branch extends Eloquent {

//     protected $table = 'tb_branch';

//     public function faculty() 
//     {
//         return $this->hasMany('Faculty');
//     }
// }

class Faculty extends Eloquent {

    protected $table = 'tb_faculty';

    public function branch() 
    {
        return $this->belongsTo('Branch');
    }

}