<?php
session_start();

?>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<section>
    <nav class="navbar navbar-expand-sm bg-dark navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#" stlye="color: white;">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" stlye="color: white;">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" stlye="color: white;">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" stlye="color: white;">Disabled</a>
    </li>
  </ul>
</nav>
</section>
<section>
    <h4> create student account </h4>
    <form class="form-inline" action="registration.php">
  <label for="email">Email address:</label>
  <input type="email" class="form-control" placeholder="Enter email" id="email">
  <label for="pwd">phone number:</label>
  <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>&nbsp;&nbsp;
 <button class="btn btn-primary" type="submit" style="width: 250px;">submit</button>
</form>
<h4> create surpervisors account</h4>
<form class="form-inline" action="/action_page.php">
  <label for="email">Email address:</label>
  <input type="email" class="form-control" placeholder="Enter email" id="email">
  <label for="pwd">phone number:</label>
  <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>&nbsp;&nbsp;&nbsp;
  <button class="btn btn-primary" type="submit" style="width: 250px;">submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>