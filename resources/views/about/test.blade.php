<!-- <html>
<head>
	<title>Edit Form</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<h4>Edit Form</h4>

<div class="container">
	<div class="col-md-8">

 {!!Form::open() !!}
 
	<!-- {!! Form::model(array(
                      'url' => 'dashboard/edit/'.$users->id,
                      'class' => 'form' ,
                       'method'=>'post')) !!} -->
         <!-- For  logout button  -->
       <!--   @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
        @endif
 -->

      <!--   @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif -->
        <div class="form-group">
            {!! Form::label('First Name') !!}
            {!! Form::text('first_name') !!}
               
        </div>



        <div class="form-group">
            {!! Form::label('First Name') !!}
            {!! Form::text('last_name') !!}
        </div>

        <div class="form-group">
             {!! Form::label('Phone') !!}
            {!! Form::text('phone') !!}

        </div>

        <div class="form-group">
            {!! Form::label('Email') !!}
            {!! Form::text('email') !!}
        </div>



        <div class="form-group">
            {!! Form::submit('Submit Details', 
              array('class'=>'btn btn-primary')) !!}
        </div>
      {!! Form::close() !!}  

</div>
</div>
</body>
</html> 


public function getChangepassword()
{
return View::make(‘site/teacher/changepassword’);
}

public function postChangepassword()
{

$oldpassword=Input::get( ‘currentpassword’ );
$newpassword=Input::get( ‘newpassword’ );
$repassword=Input::get( ‘repassword’ );

$hash= Auth::user()->password;
$value=$oldpassword;

if(crypt($value, $hash) === $hash)
{

if($newpassword === $repassword)
{
$passw= Hash::make($newpassword);
$username=Auth::user()->username;
$userid=Auth::user()->id;
DB::table(‘users’)
->where(‘id’, $userid)
->update(array(‘password’=>$passw,’confirmation_code’=>$passw,’confirmed’=>1));

return Redirect::to(‘teacher/changepassword’)
->with(‘success’, Lang::get(‘admin/teacher/messages.password_success’));

}
else
{
// Redirect to the change password field
return Redirect::to(‘teacher/changepassword’)
->withInput(Input::except(‘password’,’$repassword’))
->with(‘error’, Lang::get(‘admin/teacher/messages.password_does_not_match’));
}
}
else
{

return Redirect::to(‘teacher/changepassword’)
->with(‘error’, Lang::get(‘admin/teacher/messages.password_original’));
}

}




       //  public function passwordUpdate(Request $requests,$id){
       //     $user = User::find($id);
       //     //return $user;
       //      $validator = $this->validate($request, [
       //              'password'=> 'required',
       //              'newpassword'=> 'required|confirmed|different:password',
       //              'confirm_password'=> 'required|different:password|same:newPassword'
       //           ]);
       //  }
       //      $collect = $validate;
       //   if($validator->fail()){
       //          return redirect('dashboard/changepassword')
       //          ->withErrors($validator)
       //          ->withInput();
       //      }
       // if(Hash::check($user['confirm_password'] == $collect->'password'){
       //      if(Hash::check($collect['password'],$collect->'confirm_password')){
             
       //            $user->fill($user)->save();

       //       } 
       //       else{
       //          return redirect('dashboard/changepassword');
       //       }  

       //       else{
                
       //           return redirect('dashboard/changepassword');
       //       }
       // }

     //public function passwordUpdate(Request $request,$id){
    //      $user = User::find($id);
    //      //return $user;
    // //    $input = $request->all();
    //        $validator = $this->validate($request, [
    //                 'password'=> 'required',
    //                 'newpassword'=> 'required|confirmed|different:password',
    //                 'confirm_password'=> 'required|different:password|same:newPassword'
    //              ]);
                                    
    //         if($validator->fail()){
    //             return redirect('about/confirm_password')
    //             ->withErrors($validator)
    //             ->withInput();
    //         }
    //         //if('password')
    //         $user = User::where('newpassword',$user['newpassword'])->first();
    //         --if(Hash::check($user['newpassword'],$user->confirm_password)){
                 
    //              $user->fill($user)->save();
    //             return redirect('dashboard')
    //             ->with('message','password has been changed');
    //         }

    //        else{

    //             return "too";
    //             //return('about/changepassword');
    //         }


    //             //->with('error','password input incorrectly');
           
               
     
    
