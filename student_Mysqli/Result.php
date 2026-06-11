<?php
$host ='127.0.0.1:3307';
$user ='root';
$psw ='';
$db ='student_details';
$ref =mysqli_connect($host, $user,$psw,$db);

if(!$ref)
    echo "connection failed ".mysqli_connect_error();
// echo "connection done";
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">Student Results</a>
        <a href="logout.php" class="btn btn-danger">
            Logout
        </a>
    </div>
</nav>

<div class="container mt-4">

    <!-- Add Result Form -->
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            Add Student Result
        </div>

        <div class="card-body">

            <form action="save_result.php" method="POST">

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Student Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Course</label>
                        <input type="text"
                               name="course"
                               class="form-control"
                               required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Marks</label>
                        <input type="number"
                               name="marks"
                               class="form-control"
                               required>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">
                    Save Result
                </button>

            </form>

        </div>
    </div>

    <!-- Result Table -->
    <div class="card mt-4 shadow">

        <div class="card-header bg-secondary text-white">
            Student Result List
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Course</th>
                        <th>Marks</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- PHP Loop Starts Here -->

                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>BCA</td>
                        <td>85</td>
                        <td>
                            <a href="edit_result.php?id=1"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="delete_result.php?id=1"
                               class="btn btn-danger btn-sm">
                                Delete
                            </a>
                        </td>
                    </tr>

                    <!-- PHP Loop Ends Here -->

                </tbody>

            </table>

        </div>

    </div>

</div>
</body>
</html>