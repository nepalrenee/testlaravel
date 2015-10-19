<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Controllers\Controller;
use App\User;
use Input;
use Hash;
use View;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('about.signup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
        {  
         $input = $request->all();
         // echo Hash::make($input['password']);
         //    exit;

        //return $input['password'];

         $user= User::create ([
                     'first_name'=> $input['first_name'],
                     'last_name'=> $input['last_name'],
                     'phone'=> $input['phone'],
                     'email'=> $input['email'],
                     'password'=> Hash::make($input['password']),
                     'confirm_password'=> Hash::make($input['confirm_password'])
                 ]);    
        return redirect ('about/login')
             ->with('message','signup created sucessfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
    public function login(){
        return view('about/login');
    }

    public function postlogin(Request $request){
          /*$user = User::all();
          var_dump($user);*/
          $input = $request->all();
           $validator = \Validator::make($request->all(), [

                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('about/login')
                            ->withErrors($validator)
                            ->withInput();
            }
           
          $user = User::where('email', $input['email'])->first();
          if($user && $user->count())
            {
                if (Hash::check($input['password'], $user->password)) {
                    \Session::put('loginUser', $user);
                    return redirect('dashboard')
                        ->with('message','Welcome to Dashboard');
                }
                else
                {                   
                    return redirect('about/login')
                        ->with('error','Password didn\'t match.');
                }
            }
            else
            {
                return redirect('about/login')
                        ->with('error','User doesn\'t exist.');
            }
    }
    public function getDashboard()
        {   
         //    $input = $request->all();
         // $show = User::where('first_name',$input['first_name'])->first();

           $show = User::all();//get all user
            //return $show;
            return \View::make('about.dashboard')
                ->with('User', $show);
             
     }

     public function getLogout(){
       
         //User::logout(); // log the user out of our application
        // Session::flush($user);
        // // return $user;
        return \View::make('about.signup')
            ->with('message', 'Sucessfully loggedout'); // redirect the user to the login screen
     }

    
     public function edit($id){
        //return $id;
        // die();
       // $edit = User::find($id);
        //return $edit;
          $user = User::find($id);
           //return $id;
        // return redirect ('signup');
         // return $user;
          return \View::make('about/edit', compact("user"));
                  // ->withInput($user);
                   // ->with('message','Load Edit page');
            //return 'home!!';
    }

    public function update(Request $request,$id){
         $user = User::find($id);   
      
                 $this->validate($request, [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone'=> 'required',
                'email'=> 'required'
             ]);
           $input = $request->all();
           //return $user;

            $user->fill($input)->save();

            // Session::flash('flash_message', 'Edit Sucessfully!');

            return redirect('dashboard');

    }


     public function delete($id){
         //return $id;
           $deleted=User::find($id);
         // //return $deleted;
          $store = $deleted->delete();
           return redirect ('signup')
             // return \View::make('about.dashboard')
              ->with('message','Deleted Sucessfully');

     }
    


     public function changePassword($id){
        //return $id;
        //return redirect('dashboard/changepassword');//to return url 
        //$userid = $id;
        return View::make('about.changepassword',compact('id'));//to return view
         //return redirect ('signup');
        }


        public function passwordUpdate(Request $request,$id){
           $user = User::find($id);
           //return $user;
            $input = $request->all();
            //return $input;
            $validator = \Validator::make($request->all(), [
                'password'=> 'required',
                'newpassword'=> 'required',
                'confirm_password'=> 'required|same:newpassword'
            ]);

            if ($validator->fails()) {
                return redirect('dashboard/changepassword/'.$id)
                            ->withErrors($validator)
                            ->withInput();
            }
            //retrive confirm_password from table user
            $user = User::findOrFail($id);
            //return $user;
            if(Hash::check( $input['password'], $user->password))
            {
                $user->update([
                    'password' => $input['newpassword']
                    ]);
                return redirect('dashboard')->with('message', 'Password changed sucessfully.');
               
            }
            else
            {
                return redirect('dashboard')->with('message', 'Incorrect password.');
            }


            
       }

} 





lorem