

<div class="container-fluid">
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <ul class="navbar-nav mr-auto">
    <!-- every links pupunta sa LIST  of companies that submitted those forms -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" role="button">Submission History</a>
        
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ url('/annuallist') }}">Annual Submission</a>
          <a class="dropdown-item" href="{{ url('/op2_ib') }}">Quarterly Submission</a>
          <a class="dropdown-item" href="#">Cerificate Issuance</a>
        </div>
      </li>
 -->

    <li class="nav-item">
      <a class="nav-link" href="{{ url('/annuallist') }}">Annual Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/quarterlist') }}">Quarterly Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">Certificate Issuance</a>
    </li>
  </ul>
</nav>
</body>
</div>
