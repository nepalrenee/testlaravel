<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class loginController extends Controller
{
    //  public function signup()
    // {
    //      $input = Input::all();
    //      //var_dump($input);
    //      //die();

    //      if (! $this->login->fill($input)->isValid()) 
    // { 
    //     return Redirect::back()->withInput()->withErrors($this->login->errors);
    // }

    // //if the user input is  valid then save it and assign associated role
    // $this->login->save();
    // $this->user->assignRole(Input::get('role'));

    // return Redirect::to('/signup')->with('flash_message', 'User added to the database!');

    // }

    public function signup(){

    	//return view ('about.signup');
    	// if($_POST){
    	// 	'$first_name'=>$this->first_name;
    	// 	'$last_name'=>$this->last_name;
  		//'$phone'=>$this->phone;
  		// '$email'=>$this->email;
  		// '$password'=>$this->password;
  		// '$confirm_password'=>$this->confirm_password;  		
			// $data = array(
			  			// 	'$first_name'=>$this->first_name;
			    	// 		'$last_name'=>$this->last_name;
			  			// 	'$phone'=>$this->phone;
			  			// 	'$email'=>$this->email;
			  			// 	'$password'=>$this->password;
			  			// 	'$confirm_password'=>$this->confirm_password;  	

  			// 	);


    	// }
    }

    public function post(){
    //      $rules = array(
    //     'first_name'  => 'required|firstname',
    //      'last_name'  => 'required|last_name',
    //      'phone'      => 'required|alphaNum|min:10',
    //      'email' =

    //     'password' => 'required|alphaNum|min:3' 
    // );
        var_dump($_POST);
        die;
		// loginController::create (
		// 	array(
		// 		'first_name'= Input::get('first_name'),
		// 		'last_name'= Input::get('last_name'),
		// 		'phone'=Input::get('phone'),
		// 		'email'= Input::get('email'),
		// 		'password'= Input::get('password'),
		// 		'confirm_password'= Input::get('confirm_password')				
  //   		));
		// return Redirect::to_route('signup')
		// 		->with('message','signup created sucessfully');

    }

  
}
