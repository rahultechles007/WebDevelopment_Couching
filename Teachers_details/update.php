<?php 
  if(isset($_GET['id']))
    $id = $_GET['id'];
else
    header("Location:details.php");

$host ='127.0.0.1:3307';
$user ='root';
$psw ='';
$db ='teacher_management';

$conn =mysqli_connect($host, $user, $psw, $db);
if(!$conn)
    echo 'connection failed '.mysqli_connect_error();

$qry ="SELECT * FROM teacher_details WHERE id=$id";
$data = mysqli_query($conn , $qry);
$row = mysqli_fetch_assoc($data);
if(empty($row))
    header("Location:details.php");

if(isset($_POST['sub'])){
    extract($_POST);
    $table ='teacher_details';
    $qry ="UPDATE $table SET teacher_name ='$name', age='$age', gender='$gender', specialization='$specialization', address='$address', mobile='$mobile', qualification='$qualification'  WHERE id=$id";
    print_r($qry);
    mysqli_query($conn, $qry);

    header("Location:details.php?str=1");
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
            background-color:#0b5ed7;
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
            <a class="navbar-brand fw-bold" href="#">
                Teacher Management System
            </a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white" href="home.php">Home</a>
                <a class="nav-link text-white" href="details.php">Teacher Details</a>
                <a class="nav-link text-white" href="#">About</a>
                <a class="nav-link text-white" href="#">Contact</a>
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

              <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $id; ?>">
                    <?php 
                        if(isset($_GET['str'])){
                            $n = $_GET['str'];
                            if($n == 1)
                                echo "<p> Data saved successfully !!! </p>";
                        }
                    ?>
                    <div class="mb-3">
                        <label class="form-label">Teacher Name</label>
                        <input type="text" class="form-control" value="<?= $row['teacher_name']; ?>" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" class="form-control" value="<?= $row['age']; ?>" name="age" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Gender</label>

                       <?php
                            $genders = ['Male', 'Female', 'Other'];
                            foreach($genders as $gender){
                                $checked = ($row['gender'] == $gender) ? 'checked' : '';

                                echo "
                                <div class='form-check form-check-inline'>
                                    <input class='form-check-input'
                                        type='radio'
                                        name='gender'
                                        value='$gender'
                                        $checked>
                                    <label class='form-check-label'>$gender</label>
                                </div>";
                            }
                            ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Specialization</label>
                        <select class="form-select"value="<?= $row['specialization']; ?>" name="specialization">
                            <option>Select Subject</option>
                            <?php 
                             $spe = array('Mathematics', 'Physics', 'Chemistry', 'Biology', 'English', 'Computer', 'History', 'Geography');
                             foreach ($spe as $v){

                             $sel ='';
                             if($row ['specialization'] == $v)
                                $sel = 'selected';
                            echo "<option $sel value='$v'>$v</option>";
                             }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control"
                                  name="address"
                                  rows="3"><?= $row['address']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mobile Number</label>
                        <input type="tel" class="form-control" name="mobile"  value="<?= $row['mobile'] ?>" maxlength="10">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Qualification</label>
                        <select class="form-select" name="qualification">
                            <option>Select Qualification</option>
                            <?php
$qua = array(
    'B.A.(Hons)',
    'B.Sc.(Hons)',
    'B.Com.(Hons)',
    'M.A.',
    'M.Sc.',
    'M.Com.',
    'M.Ed.',
    'Ph.D.'
);

foreach($qua as $a){
    $sel = '';

    if(isset($row['qualification']) && $row['qualification'] == $a){
        $sel = 'selected';
    }

    echo "<option value='$a' $sel>$a</option>";
}
?>
</select>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="sub" class="btn btn-custom px-4">
                          Saved  Data
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