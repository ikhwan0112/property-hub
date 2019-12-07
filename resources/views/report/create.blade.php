@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>Complaint</h3>
		</div>
	</div>

	<form class="forms-sample" method="post" action="{{ route('reports.store') }}">
		@csrf
		<div class="form-group">
			<label for="report">Report :</label>
			<textarea type="text" name="report" class="form-control" id="report" placeholder="Enter your comment" rows="4"></textarea> 
		</div>
		<button type="submit" class="btn btn-success mr-2">Submit</button>
		<button class="btn btn-danger">Cancel</button>
	</form>	

</div>
@endsection