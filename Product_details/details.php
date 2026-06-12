<?php 
    $host ="127.0.0.1:3307";
    $user ="root";
    $psw="";
    $db="personal_management";
    $conn = mysqli_connect($host, $user, $psw, $db);
    if(!$conn)
        echo"connection Failed".mysqli_connect_error();
    // echo "connected to database successfully";

?>
<!DOCTYPE html>
<html>

<head>

<title>Personal Information</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row">

<!-- LEFT SIDE FORM (50%) -->

<div class="col-md-6">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h3>Personal Information Form</h3>

</div>

<div class="card-body">

<form>

<div class="mb-3">

<label>Full Name</label>

<input
type="text"
class="form-control"
placeholder="Enter Full Name">

</div>

<div class="mb-3">

<label>First Name</label>

<input
type="text"
class="form-control">

</div>

<div class="mb-3">

<label>Middle Name</label>

<input
type="text"
class="form-control">

</div>

<div class="mb-3">

<label>Last Name</label>

<input
type="text"
class="form-control">

</div>

<div class="mb-3">

<label>Username</label>

<input
type="text"
class="form-control">

</div>

<div class="mb-3">

<label>Date of Birth</label>

<input
type="date"
class="form-control">

</div>

<div class="mb-3">

<label>Age</label>

<input
type="number"
class="form-control">

</div>

<div class="mb-3">

<label>Gender</label>

<select class="form-select">

<option>Select</option>

<option>Male</option>

<option>Female</option>

<option>Other</option>

</select>

</div>

<button class="btn btn-success">

Submit

</button>

<button
type="reset"
class="btn btn-danger">

Reset

</button>

</form>

</div>

</div>

</div>

<!-- RIGHT SIDE TABLE (50%) -->

<div class="col-md-6">

<div class="card shadow">

<div class="card-header bg-dark text-white">

<h3>Inserted Data</h3>

</div>

<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="table-primary">

<tr>

<th>ID</th>
<th>Name</th>
<th>Username</th>
<th>Age</th>
<th>Gender</th>
<th>Action</th>

</tr>

</thead>

<tbody>

<tr>

<td>1</td>

<td>Rahul Sharma</td>

<td>rahul123</td>

<td>21</td>

<td>Male</td>

<td>

<button class="btn btn-warning btn-sm">

Edit

</button>

<button class="btn btn-danger btn-sm">

Delete

</button>

</td>

</tr>

<tr>

<td>2</td>

<td>Priya Singh</td>

<td>priya55</td>

<td>20</td>

<td>Female</td>

<td>

<a href="details.php?edit_id =<">
    <button class="btn btn-warning btn-sm">
Edit

</button>
</a>

<button class="btn btn-danger btn-sm">

Delete

</button>

</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>

</body>

</html>



