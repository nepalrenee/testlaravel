
<html>
<head>
	<title>Welcome to Dashboard</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<tr>
				<a href="#" class="navbar-link">Welcome</a>
			</tr>
			<tr>
				<a href="dashboard/logout" class="btn btn-primary btn-sm" align="right">LogOut</a>
			</tr>
			
			
			<p>
				@if(Session::has('loginUser'))
				{{Session::get('loginUser')->email}}
				@endif
			 
			</p>
			<p>
				 @if(Session::has('message'))
      			  <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
        		@endif
			</p>


			</nav>

			<h4>list of users</h4>

			<table class="table table-bordered" border="1px" border-style:"solid";>
			 	<thead>
			 		<th>First Name</th>
			 		<th>Last Name</th>
			 		<th>Phone</th>
			 		<th>Username</th>
			 		<th>Edit/Delete</th>
			 		<th>Change Password</th>
			 		
			 	</thead>
				<tbody>
			 		 @foreach($User as $show)
			 		
			        <tr>
						<td>{{ $show->first_name }}</td>
						<td>{{ $show->last_name }}</td>
						<td>{{ $show->phone }}</td>
						<td>{{ $show->email }}</td>
						<td> <a href="dashboard/edit/<?= $show->id?>">edit</a><!-- <a href="dashboard/edit/<?= $show->id?>"><i class="glyphicon glyphicon-edit"></i></a> -->
							<a href="dashboard/delete/<?= $show->id?>"><button onclick="Are You Sure You Want to? ">Delete</button></a> </td>

						<td><a href="dashboard/changepassword/<?= $show->id?>">Change Password</a></td>

			        </tr>
			    	
			        @endforeach
			      </tbody> 
			      
			    </table> 


 
    		



					
			</body>
			</html>