<html>
<head>
	<title>Sign up form</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<h4>Sign Up Form</h4>

<div class="container">
	<div class="col-md-8">


	{!! Form::open(array('url' => 'signup','class' => 'form' , 'method'=>'post')) !!}
         <!-- For  logout button  -->
         @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
        @endif


      <!--   @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif -->
<div class="form-group">
    {!! Form::label('First Name') !!}
    {!! Form::text('first_name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your First Name')) !!}
    @if ($errors->has('first_name'))<p style="color:red;">
      {!!$errors->first('first_name')!!}</p>
    @endif
</div>



<div class="form-group">
    {!! Form::label('Last Name') !!}
    {!! Form::text('last_name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your Last Name')) !!}
     @if ($errors->has('last_name'))<p style="color:red;">
      {!!$errors->first('last_name')!!}</p>
    @endif
</div>

<div class="form-group">
    {!! Form::label('Phone Number') !!}
    {!! Form::text('phone', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Phone Number')) !!}
    @if ($errors->has('phone'))<p style="color:red;">
    {!!$errors->first('phone')!!}</p>
    @endif

</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
    @if ($errors->has('email')) <p class="help-block">
    {{ $errors->first('email') }}</p>
     @endif
</div>

<div class="form-group">
    {!! Form::label('Password') !!}
    {!! Form::text('password', null,
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Password')) !!}
     @if ($errors->has('password')) <p class="help-block">
     {{ $errors->first('password') }}</p> 
     @endif

</div>

<div class="form-group">
    {!! Form::label('Confirm Password') !!}
    {!! Form::text('confirm_password',null,
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Confirm Password')) !!}
    @if ($errors->has('confirm_password')) <p class="help-block">
    {{ $errors->first('confirm_password') }}
    @endif
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