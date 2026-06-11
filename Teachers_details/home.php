<?php
$host ='127.0.0.1:3307';
$user= 'root';
$psw='';
$db='teacher_management';
$conn = mysqli_connect($host,$user,$psw,$db);
if(!$conn)
    echo "connection error".mysqli_connect_error();
// echo "connection successfull";


if (isset($_POST['sub'])){
    extract($_POST);
    $table ='teacher_details';
    $qry = "INSERT INTO $table (teacher_name, age , gender, specialization , address, mobile, qualification ) VALUES ('$name','$age','$gender', '$specialization','$address', '$mobile' , '$qualification')";
    mysqli_query($conn,$qry);

    header("location:home.php?str=1"); 
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher Registration</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color:#f8f9fa;
        }

        .navbar-custom{
            background-color:#0d6efd;
            padding: 20px;
            font-family: sans-serif;
        }

        .card-header{
            background-color:#212529;
            color:white;
        }

        .btn-custom{
            background-color:#0d6efd;
            color:white;
        }

        .btn-custom:hover{
            background-color:green;
            color:white;
        }

        .form-container{
            max-width:700px;
            margin:auto;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="home.php">
                Teacher Management System
            </a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white fw-bold  " href="home.php">Home</a>
                <a class="nav-link text-white fw-bold " href="details.php">Teacher Details</a>
                <a class="nav-link text-white fw-bold " href="update.php">UPDATE</a>
                <a class="nav-link text-white fw-bold " href="#">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Registration Form -->
    <div class="container mt-5">

        <div class="card shadow-lg form-container">

            <div class="card-header">
                <h3 class="text-center mb-0">
                    Teacher Registration Form
                </h3>
            </div>

            <div class="card-body bg-white">

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <?php 
                    if(isset($_GET['str'])){
                        $n = $_GET['str'];
                        if($n == 1)
                            echo "<p> Data saved successfully </p>";
                    }
                    ?>

                    <div class="mb-3">
                        <label class="form-label">Teacher Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Gender</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender"value="Male">
                            <label class="form-check-label">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender"  value="Female">
                            <label class="form-check-label">Female</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input"  type="radio" name="gender" value="Other">
                            <label class="form-check-label">Other</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Specialization</label>
                        <select class="form-select" name="specialization">
                            <option>Select Subject</option>
                            <option>Mathematics</option>
                            <option>Physics</option>
                            <option>Chemistry</option>
                            <option>Biology</option>
                            <option>English</option>
                            <option>Computer Science</option>
                            <option>History</option>
                            <option>Geography</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control"name="address"rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mobile Number</label>
                        <input type="tel"class="form-control"name="mobile"maxlength="10">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Qualification</label>
                        <select class="form-select" name="qualification">
                            <option>Select Qualification</option>
                            <option>B.A. (Hons)</option>
                            <option>B.Sc. (Hons)</option>
                            <option>B.Com. (Hons)</option>
                            <option>M.A.</option>
                            <option>M.Sc.</option>
                            <option>M.Com.</option>
                            <option>M.Ed.</option>
                            <option>Ph.D.</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="sub" class="btn btn-custom px-4">
                            Register
                        </button>

                        <button type="reset" class="btn btn-dark px-4 ms-2">
                            Clear
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</body>
</html>