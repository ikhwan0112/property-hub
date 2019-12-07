@extends('layouts.app')
@section('content')

<!-- List of Complaint -->
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>List of Properties</h3>
		</div>
	</div>

	<table class="table table-striped">
		<tr>
			<td>No.</td>
			<td>From</td>
			<td>Complaint</td>
		</tr>
		<tr>
			@foreach ($report as $reports)
				<td>{{ $reports->id }}</td>
				<td>{{ $reports->user_id }}</td>
				<td>{{ $reports-> description }}</td>
			@endforeach
		</tr>
	</table>
</div>
@endsection