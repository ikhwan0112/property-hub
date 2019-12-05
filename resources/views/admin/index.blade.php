@extends('layouts.app')
@section('content')

<!-- List of All Properties -->
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>List of Properties</h3>
		</div>
	</div>

	<table class="table table-striped">
		<tr>
			<td>No.</td>
			<td>Description</td>
			<td>Address</td>
			<td>Price</td>
			<td>Status</td>
			<td>Picture</td>
			<td>Owned By</td>
			<th width="180px">Action</th>
		</tr>
	</table>
	<div class="row">
		<div class="col-md-10">
			<h3>List of Admins</h3>
		</div>
	</div>

	<center>
		<div class="col-md-6 col-lg-6">
			<div class="card bg-light">
				<div class="card-header">Admins</div>
				<div class="card-body">
					<ul class="list-group">
						@foreach($admin as $adminuser)
						<li class="list-group-item"><a href="/admin/{{ $adminuser->id }}">{{ $adminuser->name }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</center>
	
</div>
@endsection