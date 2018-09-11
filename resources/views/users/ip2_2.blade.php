@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
	<div class="col-md-8">
	  <div class="card">
	      <div class="card-body">
		        <div class="text-center">
		            <h2><strong>Statement of Business Operation Form</strong></h2>
		            <h3>RECEIVABLE FROM INSURED</h3>           
		        </div>
	        <br>
	        <form method="" action="" aria-label="#" return false>
            @csrf
				<table class="table">
				    <thead class="tableHeader">
				      <tr>
				        <th>Line of Business</th>
				        <th>Balance at the Beginning of the Year</th>
				        <th>Produced for the Year</th>
				        <th>Collected During the Year</th>
				        <th>Balance at the End of the Year </th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td class="col-sm-4">Life Insurance</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>Fire Insurance</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>Marine Cargo</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>Marine Hull </td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>Aviation</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>Fidelity and Surety</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>Motor Insurance</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>Health Insurance</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>HMO</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>Accident</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>Engineering</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				      <tr>
				        <td>Miscellaneous</td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				        <td><input></td>
				      </tr>
				    </tbody>
				  </table>
        		</form>

	        </div>
	    </div>
	    <br>
		  <div class="progress">
		    <div class="progress-bar progress-bar-striped progress-bar-animate2 progress-bar2">2 out of 4</div>
		  </div>
		  <br>
		  <a href="{{ url('/ip2_1') }}" class="btn btn-danger">Previous</a>
		  <a href="{{ url('/ip2_3') }}" class="btn btn-danger">Next</a>
		  <a href="" class="btn btn-danger">Save as Draft</a>
	</div>
</div>

@endsection