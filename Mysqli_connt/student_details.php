<?php
$host = '127.0.0.1:3307'; // this is my local host path  most be there 
$user = 'root';
$psw ='';
$db ='student_management';
$ref = mysqli_connect($host, $user, $psw, $db);
if(!$ref) // this mainly used for check the connection with MySQL 
    echo "connection error".mysqli_connect_error();
// echo "conection successfully";                      // optional case 

function toStr($demos=array()){
    $str ='';                       // This is mainly used to convert An array into a string 
    foreach ($demos as $k=>$v){
        $str .= "$k ='$v' ";
    }
    return $str;
     
}
function inputBox($lab, $demos=array()){
    $str = toStr($demos);
     return "<label class='form-label'> $lab </label><input $str> <br>";

} 

if(isset($_POST['sub'])){
    extract($_POST);
    $table= 'student';

    $qry ="INSERT INTO $table(name,age) VALUES ('$name' , '$age')";  // first data field name and then the name of the input name give 
    mysqli_query($ref, $qry);

    echo"data saved"; // to check the data base has stored or not 

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-center">
            <h3>Register Form</h3>
        </div>

        <div class="card-body">
            <form action="" method="post">

<!-- Here you also use the common attribute to make the code understandable -->
               
<!-- here the id value is not need to form --> 
                <!-- Name -->
                <div class="mb-3">
                    <label for="name"  class="form-label">Name</label>
                    <input type="text" name='name'class="form-control" id="name" placeholder="Enter Name">  
                </div>

                <!-- Age -->
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter Age">
                </div>

                <!-- Submit Button -->
                <button type="submit" name="sub" class="btn btn-primary w-100">
                    Register
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>