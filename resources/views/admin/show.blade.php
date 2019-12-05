@extends('layouts.app')
@section('content')

<!-- List of All Properties -->
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>List of Admins</h3>
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
			<ol class="list-unstyled">
				<br />
				@if($user->user_id == Auth::user()->id)
				<li><a href="#" onclick="var result = confirm('Are you sure you want to delete this admin?');

				if(result){
					event.preventDefault();
					document.getElementById('delete-form').submit();
				}">
				Delete
			</a>
			<form id="delete-form" action="{{ route('users.destroy', [$user->id]) }}" method="post" style="display: none;">
				<input type="hidden" name="_method" value="delete" />
				{{ csrf_field() }}
			</form>
		</li>
		@endif
	</ol>
</tr>
</table>
</div>
@endsection