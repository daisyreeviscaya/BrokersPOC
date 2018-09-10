@extends('examiner.dashboard')

@section('content')
<h1>ABC Company</h1>
<h3>Schedule of Cash and Cash Equivalents</h3>
  <table class="table table-hover" style="margin-left: 25px; margin-right: 25px">
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
<h3>Schedule of Premiums Receivable</h3>
  <table class="table table-hover" style="margin-left: 25px; margin-right: 25px">
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
<h3>Schedule of Prepayments</h3>
  <table class="table table-hover" style="margin-left: 25px; margin-right: 25px">
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
