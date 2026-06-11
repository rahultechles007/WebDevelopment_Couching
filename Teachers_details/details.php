<?php 
$host ="127.0.0.1:3307";
$user ="root";
$psw ="";
$db ="teacher_management";
$conn = mysqli_connect($host,$user,$psw,$db);
if(!$conn)
    echo "connection failed".mysqli_connect_error();
// echo "successfully connected ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Details</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color:#f8f9fa;
        }

        .navbar{
            box-shadow:0 2px 10px rgba(0,0,0,0.2);
        }

        .card{
            border:none;
            border-radius:12px;
        }

        .card-header{
            background:#212529;
        }

        .table th{
            vertical-align:middle;
        }

        .btn-action{
            min-width:70px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                Teacher Management System
            </a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link active fw-bold " href="home.php">Home</a>
                <a class="nav-link active fw-bold " href="details.php">Teacher List</a>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container mt-5">

        <div class="card shadow-lg">

            <div class="card-header text-white">
                <h3 class="text-center mb-0">
                    Teacher Details
                </h3>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover table-striped align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Teacher Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Specialization</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Qualification</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            $qry = "SELECT * FROM teacher_details";
                            $data =mysqli_query($conn,$qry);
                            while($row =mysqli_fetch_assoc($data)){
                            ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['teacher_name'];?></td>
                                <td><?php echo $row['age'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['specialization'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['qualification'];?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $row['id'];?>">
                                        <button class="btn btn-warning btn-sm btn-action">
                                        Edit
                                    </button>
                                    </a>
                                    <button class="btn btn-danger btn-sm btn-action">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>
                        </tbody>

                    </table>

                </div>

                <div class="mt-3 text-start">
                    <a href="home.php" class="btn btn-primary">
                        Add New Teacher
                    </a>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>