
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
		<div class="col-md-4">
		<!-- if(isset($_SESSION)) -->
		<!-- @if(Session::has('message'))
		<div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
		
		<!-- <p style="color:red;">{{ Session::get('message')}}</p> -->
		<!-- @endif --> 

		
		
		
		{!! Form::open(array('url' => 'about/login','class' => 'form' , 'method'=>'post')) !!}

		@if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
		<div class="form-group">
			
			{!! Form::label('User Name') !!}
			{!! Form::text('email', null, 
				array('class'=>'form-control', 
					'placeholder'=>'User Name')) !!}
			
		</div>

		<div class="form-group">
			{!! Form::label('Password') !!}
			{!! Form::text('password', null, 
				array('class'=>'form-control', 
					'placeholder'=>'Password')) !!}
		</div>

		<!-- <div class="form-group">
			{!! Form::label('Confirm Password') !!}
			{!! Form::text('Confirm Password', null, 
				array('required', 
					'class'=>'form-control', 
					'placeholder'=>'Confirm Password')) !!}
		</div> -->

		<div class="form-group">
			{!! Form::submit('Login', 
				array('class'=>'btn btn-primary')) !!}
		</div>
			{!! Form::close() !!} 
		</div> 
	</div>
	</body>
	</html>

	<!-- (array('url' => 'foo/bar')) -->

 