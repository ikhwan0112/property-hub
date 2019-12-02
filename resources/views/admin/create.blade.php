@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>Add Admin</h3>
		</div>
	</div>

	<form class="forms-sample" method="post" action="{{ route('users.store') }}">
		@csrf
		<div class="form-group">
			<label for="inputNameAdmin">Name</label>
			<input type="text" name="inputNameAdmin" class="form-control" id="inputNameAdmin" placeholder="Enter Name">
		</div>
		<div class="form-group">
			<label for="inputPasswd">Password</label>
			<input type="password" name="inputPasswd" class="form-control" id="inputPasswd" placeholder="Enter Password">
		</div>
		<div class="form-group">
			<label for="inputPhoneNumber">Phone Number</label>
			<input type="text" name="inputPhoneNumber" class="form-control" id="inputPhoneNumber" placeholder="Enter Phone Number">
		</div>
		<div class="form-group">
			<label for="inputEmail">Email</label>
			<input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Enter Email">
		</div>
		<input type="hidden" name="inputRole" value="admin" id="inputEmail">
		<button type="submit" class="btn btn-success mr-2">Submit</button>
		<button class="btn btn-danger">Cancel</button>
	</form>	

</div>
@endsection