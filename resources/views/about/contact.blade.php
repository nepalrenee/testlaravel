<html>
<head>
  <title>User page</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

  <div class="col-xs-6">
    <div class="container">
      <center><h4>User Registration</h4></center>

      <form id="form">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" id="first_name" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" id="last_name" placeholder="Last Name">
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Email address">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="password">Confirm Password</label>
          <input type="password" class="form-control" id="password" placeholder="Confirm Password">
        </div>


        <button type="submit" class="btn btn-primary">Sign In</button>
    </form> 
  </div>
</div>

</body>
</html>






<!-- 
{!! Form::open(array('route' => 'contact','class' => 'form' , 'method'=>'put')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}  --> -->