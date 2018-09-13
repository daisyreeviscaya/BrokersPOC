@extends('examiner.dashboard')
@section('content')
@include('examiner.dash')
<!-- add search bar -->
<div class="container-fluid text-center">
	<h2>Submitted Annual Reports</h2>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Company Name</th>
				<th>Date Submitted</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="{{ url('/op1_summ') }}">ABC Company</a></td>
				<td>September 12, 2018</td>
			</tr>
			<!-- <tr>
				<td><a href="{{ url('/op1a_summ') }}">DEF Company</a></td>
				<td>September 11, 2018</td>
			</tr> -->
		</tbody>
	</table>
</div>
@endsection