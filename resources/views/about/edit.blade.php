<html>
<head>
  <title>Edit Form</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
  <h4>Edit Form</h4>

<div class="container">
  <div class="col-md-8">

 {!!Form::model($user,['method'=>'post',
                        'url'=>'dashboard/update/'.$user->id]) !!} 
       
        <div class="form-group">
            {!! Form::label('first_name','First Name') !!}
            {!! Form::text('first_name') !!}
               
        </div>



        <div class="form-group">
            {!! Form::label('last_name','Last Name') !!}
            {!! Form::text('last_name') !!}
        </div>

        <div class="form-group">
             {!! Form::label('phone','Phone') !!}
            {!! Form::text('phone') !!}

        </div>

        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email') !!}
        </div>



        <div class="form-group">
            {!! Form::submit('Edit Details', 
              array('class'=>'btn btn-primary')) !!}
        </div>
      {!! Form::close() !!}  

</div>
</div>
</body>
</html> 