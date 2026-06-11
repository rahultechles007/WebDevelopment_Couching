<?php
$host ='127.0.0.1:3307';
$user ='root';
$psw ='';
$db ='voter_management';
$ref =mysqli_connect($host, $user,$psw,$db);

if(!$ref)
    echo "connection failed ".mysqli_connect_error();

if(isset($_POST['sub'])){   // this condition mainly used to make the DB INSERT the data in database 
    extract($_POST);
    $table ='voterlists'; 
    $qry = "INSERT INTO  $table (name,age) VALUES ('$voter_name', '$age')";
    mysqli_query($ref, $qry);

    header("Location:voter.php?str=1"); // error is heree

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navigation Menu -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Voting System</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="voterlist.php">Voters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Form Section -->
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3 class="text-center">Voter Registration Form</h3>
        </div>

        <div class="card-body">
            <form action="<?php echo  $_SERVER['PHP_SELF']?>" method="post">
                <?php
                if(isset($_GET['str'])){
                    $n =$_GET['str'];
                    if($n == 1)             // to refresh the page but a user a enter in str=1 only one time 
                        echo "<p> data saved sucessfully </p>";
                }
                    ?>

                <div class="mb-3">
                    <label class="form-label">Voter Name</label>
                    <input type="text" class="form-control" name="voter_name" placeholder="Enter Voter Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter Age" required>
                </div>

                <div class="text-center">
                    <a href="update.php?id=<?php echo $row['id']; ?>">
                        <button type="submit" name="sub" class="btn btn-primary">
                        Submit
                    </button>
                    </a>
                    <button type="reset" class="btn btn-danger">
                        Reset
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>