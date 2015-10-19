<html>
<head>
  <title>Change Password Form</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
  <h4>Change Password</h4>

<div class="container">
  <div class="col-md-8">
    

  {!!Form::open(['method'=>'post',
                        'url'=>'dashboard/passwordUpdate/'.$id] )!!}

        @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
       
        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::text('password') !!}
               
        </div>



        <div class="form-group">
            {!! Form::label('newpassword','New Password') !!}
            {!! Form::text('newpassword') !!}
        </div>

        <div class="form-group">
             {!! Form::label('confirm_password','Confirm Password') !!}
            {!! Form::text('confirm_password') !!}

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