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
<div class="container">
    <h1><i>YOU ARE WELCOME</i></h1>
    <div class="row">
  <div class="col-lg-3 col-md-3 col-sm-3"><a href="./admin/index.php"><button class="btn btn-primary" style="width: 100%;">admin</button></a></div>
  <div class="col-lg-3 col-md-3 col-sm-3"><a href="./student/index.php"><button class="btn btn-primary" style="width: 100%;">student</button></a></div>
  <div class="col-lg-3 col-md-3 col-sm-3"><a href="./sup/index.php"><button class="btn btn-primary" style="width: 100%;">supervisor</button></a></div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>