<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/studentadd">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/bus">Bus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/book">Book</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <form action="/facultyread" method="post">
    {{csrf_field()}}
    
    <table class="table table-borderless ">
        <tr>
            <td>Name</td>
            <td><input type="text" class="form-control" name="fname" placeholder="Name of Faculty"></td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><input type="text" class="form-control" name="fdes" placeholder="Designation"></td>
        </tr>
        <tr>
            <td>College</td>
            <td><input type="text" class="form-control" name="fcollege" placeholder="Name of College"></td>
        </tr>
        <tr>
            <td>Contact No.</td>
            <td><input type="Number" class="form-control" name="fcon" placeholder="Contact No"></td>
        </tr>
        <tr>
            <td><button class="btn btn-dark">Create</button></td>
        </tr>
    </table>
    
    </form>
    
</div></div></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    
</body>
</html>