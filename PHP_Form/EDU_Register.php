<?php 
$host= '127.0.0.1:3307';
$user ='root';
$psw ='';
$db='edutech_management';
$ref = mysqli_connect($host, $user , $psw , $db);

if(!$ref)
    echo "connection is failed".mysqli_connect_error();
//echo"the connection is successfull";


// Here are the same function of the register form generator


function toStr($demos=array()){
    $str ='';                       // This is mainly used to convert An array into a string 
    foreach ($demos as $k=>$v){
        $str .= "$k ='$v' ";
    }
    return $str;
     
}
function inputBox($lab, $demos=array()){
    $str = toStr($demos);
     return "<label class='form-control'> $lab </label><input $str> <br>";

} 

function inputTextarea($label , $demos=array() , $value=''){
    $str =toStr($demos);
    return "<label class='form-control'>$label</label><textarea $str >$value </textarea><br>";
}

function inputRadio($lab, $gene ,$values , $sel=''){ // to give the automatically show the values 
        $str = toStr($gene);
        $opts ="<label class='form-control'> $lab </label>";
    
        foreach($values as $v){                                                                          // RADIO AND CHECKBOX FUNCTION IS SAME  BOTH CONTENT SAME VAR ,LOGIC 
            $s ='';  // blank to check below that any value has been priented or not 
            if($v == $sel)
                $s ='checked'; // to give the value automatically when it is refresh in the screen 
            $opts.="<input $str $s value='$v'/>".ucfirst($v);
        }
        return $opts."<br>";
}

function inputcheck($lab, $gene ,$values , $sel=''){ // to give the automatically show the values 
        $str = toStr($gene);
        $opts ="<label class='form-control'> $lab </label>";                                                                     // RADIO AND CHECKBOX FUNCTION IS SAME  BOTH CONTENT SAME VAR ,LOGIC 
        foreach($values as $v){
            $s ='';  // blank to check below that any value has been priented or not 
            if($v == $sel)
                $s ='checked'; // to give the value automatically when it is refresh in the screen 
            $opts.="<input $str $s value='$v'/>".ucfirst($v);
        }
        return $opts."<br>";
}

function inputDrop($lab, $cata ,$values, $sel=' '){
    $str =toStr($cata);
    $opts = "<label class='form-control'>$lab</label> <select $str><option value=''>Select</option>";
    foreach($values as $v){
        $s = '';
        if($v == $sel)
            $s = 'selected';                                                                //SELECT AND OPTION  
        $opts .= "<option $s value='$v'/>".ucfirst($v)."</option>";
    }
    $opts .="</select>";
    return $opts . "<br>";
}

//insert of data in the database to check the condition 
if(isset($_POST['sub'])){
    extract($_POST);

    $table ="candidate";

$qry="INSERT INTO $table (name,father,mother,gender,emailid,mobile,dob,address,passingyear,coursetype,coursename) VALUES ('$sname','$fname','$mname','$gen','$email','$phone','$dob','$address','$passing_year','$course_type','$course_name')";
mysqli_query($ref,$qry);

echo"Data has been saved ";
}
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h2 class="mb-0">Registration Form</h2>
                </div>

                <div class="card-body p-4">

                    <form action="" method="post">

<?php

$sname = array(
    'type' => 'text',
    'name' => 'sname',
   
);
echo inputBox('Student Name', $sname);

$fname = array(
    'type' => 'text',
    'name' => 'fname',
);
echo inputBox('Father Name', $fname);

$mname = array(
    'type' => 'text',
    'name' => 'mname',
   
);
echo inputBox('Mother Name', $mname);

$gender = array('male', 'female', 'other');
$gene = array(
    'type' => 'radio',
    'name' => 'gen'
);
echo inputRadio('Gender', $gene, $gender, 'male');

$email = array(
    'type' => 'email',
    'name' => 'email',
    
);
echo inputBox('Email', $email);

$phone = array(
    'type' => 'tel',
    'name' => 'phone',
    
);
echo inputBox('Telephone No', $phone);

$dob = array(
    'type' => 'date',
    'name' => 'dob',
    
);
echo inputBox('Date of Birth', $dob);

$txt = array(
    'rows' => 6,
    'cols' => 40,
    'name' => 'address',
   
);
echo inputTextarea('Address', $txt);

$years = array('2026','2025','2024','2023','2022','2021','2020');
$yearAttr = array(
    'name' => 'passing_year',
    
);
echo inputDrop('Passing Year', $yearAttr, $years);

$courseType = array('UG','PG','Diploma','Certificate');
$typeAttr = array(
    'name' => 'course_type',
   
);
echo inputDrop('Course Type', $typeAttr, $courseType);

$courseName = array('BCA','BSc','BCom','BA','MCA','MSc','MBA','Computer Science');
$courseAttr = array(
    'name' => 'course_name',
    
);
echo inputDrop('Course Name', $courseAttr, $courseName);

?>

<div class="d-grid mt-4">
 <?php 
     $sub = array('type'=>'submit', 'name' => 'sub', 'class' =>'btn btn-primary btn-lg ', 'value' => 'Register');
        echo inputBox('&nbsp;', $sub);
        
    ?>
</div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
                    
</body>


