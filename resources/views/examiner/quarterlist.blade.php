@extends('examiner.dashboard')
@section('content')
@include('examiner.dash')

<div class="container-fluid text-center">
	<h2>Submitted Quarterly Reports</h2>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Company Name</th>
				<th>Type of Broker</th>
				<th>Date Submitted</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="{{ url('/op2_rb') }}">ABC Company</a></td>
				<td>Reinsurance Broker</td>
				<td>September 12, 2018</td>
			</tr>
			<tr>
				<td><a href="{{ url('/op2_ib') }}">DEF Company</a></td>
				<td>Insurance Broker</td>
				<td>September 11, 2018</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection