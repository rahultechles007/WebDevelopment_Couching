<?php
$host ='127.0.0.1:3307';
$user ='root';
$psw ='';
$db ='voter_management';
$ref = mysqli_connect($host, $user, $psw, $db);

if(!$ref)
    echo "connection failed ".mysqli_connect_error();
// echo "connection done";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Voting System</a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="voter.php">Home</a>
            <a class="nav-link active" href="voterlists.php">Voter List</a>
        </div>
    </div>
</nav>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h3 class="text-center">Voter Details</h3>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>Sr No</th>
                        <th>Voter Name</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $qry = "SELECT * FROM voterlists";
                    $data = mysqli_query($ref, $qry);

                    while($row = mysqli_fetch_assoc($data)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['age']; ?></td>

                        <td>
                            <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="delete.php?id=<?php echo $row['id']; ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure you want to delete this voter?');">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>

            <a href="voter.php" class="btn btn-primary">
                Add New Voter
            </a>

        </div>

    </div>

</div>

</body>
</html>