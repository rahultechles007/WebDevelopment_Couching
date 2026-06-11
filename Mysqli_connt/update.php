<?php
if(isset($_GET['id']))
    $id =$_GET['id'];
else                                               // this condition is mainly used for checking if someone click to edit and id is there or not 
    header("location:voterlist.php");


$host ='127.0.0.1:3307';
$user ='root';
$psw ='';
$db ='voter_management';
$ref =mysqli_connect($host, $user,$psw,$db);

if(!$ref)
    echo "connection failed ".mysqli_connect_error();

// TO get the student data for the database
$qry ="SELECT * FROM voterlists WHERE id=$id ";
$data = mysqli_query($ref ,$qry );
$row = mysqli_fetch_assoc($data);     // this is mainly use to fetch the data in var $row in row wise 
if(empty($row))                    // this condition is used to check the $row  of data is not empty 
    header("Location:voterlist.php");   // this is locate the data in the details for data in this sequence order 

if(isset($_POST['sub'])){
    extract($_POST);
    $table ='voterlists'; 
    $qry = "UPDATE  $table SET name='$voter_name',age='$age' WHERE id=$id"; // here we updata the by giving the field name and table feild name
    mysqli_query($ref, $qry);


    header("Location:voterlist.php?str=1"); // voterlist is used to see and modify the data 
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
            <form action="<?php echo  $_SERVER['PHP_SELF']?>?id=<?= $id?>" method="post">
                <?php                                  // this is must important part after updata occurs final implement 
                if(isset($_GET['str'])){
                    $n =$_GET['str'];
                    if($n == 1)
                        echo "<p> data saved sucessfully </p>";
                  }
                    ?>

                <div class="mb-3">
                    <label class="form-label">Voter Name</label>
                    <input type="text" class="form-control" value="<?= $row['name'];?>" name="voter_name" placeholder="Enter Voter Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" value="<?= $row['age']; ?>" placeholder="Enter Age" required>
                </div>                                                          <!-- it is the shortout methods without writing echo -->

                <div class="text-center">
                    <button type="submit" name="sub" class="btn btn-primary">
                        saved data
                    </button>
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