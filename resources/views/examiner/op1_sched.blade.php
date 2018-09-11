@extends('examiner.dashboard')

@section('content')
<h1><strong> ABC Company</strong></h1>
<h3>Schedule of Cash and Cash Equivalents</h3>
  <table class="table table-hover">
    <thead>
    	<tr>
    		<th>Account Name</th>
    		<th>Per Company</th>
    	</tr>
    </thead>
    <tbody>
      <tr>
        <td>Petty Cash Fund</td>
        <td></td>
      </tr>	
      <tr>
        <td>Cash in Bank</td>
        <td></td>
      </tr>
      <tr>
        <td>Time Deposit</td>
        <td></td>
      </tr>
      <tr>
        <td>Total</td>
        <td></td>
      </tr>
    </tbody>
  </table>
<h3><strong>Schedule of Premiums Receivable</strong></h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Account Name</th>
        <th>Per Company</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Premiums Receivable</td>
        <td></td>
      </tr> 
      <tr>
        <td>Total</td>
        <td></td>
      </tr>
    </tbody>
  </table>
<h3><strong>Schedule of Prepayments</strong></h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Account Name</th>
        <th>Per Company</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Perepaid Tax</td>
        <td></td>
      </tr> 
      <tr>
        <td>Others</td>
        <td></td>
      </tr>
      <tr>
        <td>Total</td>
        <td></td>
      </tr>
    </tbody>
  </table>

@endsection
