<?php 
// 
function toStr($demos=array()){
    $str ='';                       // This is mainly used to convert An array into a string 
    foreach ($demos as $k=>$v){
        $str .= "$k ='$v' ";
    }
    return $str;
     
}
function inputBox($lab, $demos=array()){
    $str = toStr($demos);
     return "<label> $lab </label><input $str> <br>";

} 

function inputTextarea($label , $demos=array() , $value=''){
    $str =toStr($demos);
    return "<label>$label</label><textarea $str >$value </textarea><br>";
}

function inputRadio($lab, $gene ,$values , $sel=''){ // to give the automatically show the values 
        $str = toStr($gene);
        $opts ="<label> $lab </label>";
    
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
        $opts ="<label> $lab </label>";                                                                     // RADIO AND CHECKBOX FUNCTION IS SAME  BOTH CONTENT SAME VAR ,LOGIC 
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
    $opts = "<label>$lab</label> <select $str><option value=''>Select</option>";
    foreach($values as $v){
        $s = '';
        if($v == $sel)
            $s = 'selected';                                                                //SELECT AND OPTION  
        $opts .= "<option $s value='$v'/>".ucfirst($v)."</option>";
    }
    $opts .="</select>";
    return $opts . "<br>";
}




?>
<div>
<form action="" method="get">
   <h2> Registration form </h2> 
<?php 


$sname = array('type' => 'text','name' => 'sname','class' => 'form-control');
echo inputBox('Student Name', $sname);

$fname = array('type' => 'text','name' => 'fname','class' => 'form-control');
echo inputBox('Father Name', $fname);

$mname = array('type' => 'text','name' => 'mname','class' => 'form-control');
echo inputBox('Mother Name', $mname);

$gender =array('male', 'female', 'other');
$gene = array('type'=>'radio', 'name' => 'gen', 'class' =>'form-control');
echo inputRadio('Gender',$gene, $gender,'male');


$email = array('type' => 'email','name' => 'email','class' => 'form-control');
echo inputBox('Email', $email);

$phone = array( 'type' => 'tel','name' => 'phone','class' => 'form-control');
echo inputBox('Telephone No', $phone);

$dob = array('type' => 'date','name' => 'dob','class' => 'form-control');
echo inputBox('Date of Birth', $dob);

 $txt = array('rows'=> 6, 'cols' =>40, 'name' => 'addeass', 'class ' => 'form-control');
//  $v = 'Plot no-389 , Bjb Nagar Bhubaneswar';
 echo inputTextarea('Address', $txt  ); //, $v

$years = array('2026','2025','2024','2023','2022','2021', '2020');
$yearAttr = array('name' => 'passing_year','class' => 'form-control');
echo inputDrop('Passing Year', $yearAttr, $years);

$courseType = array('UG','PG','Diploma','Certificate');
$typeAttr = array('name' => 'course_type','class' => 'form-control');
echo inputDrop('Course Type', $typeAttr, $courseType);

$courseName = array('BCA','BSc','BCom','BA','MCA','MSc','MBA','Computer Science');
$courseAttr = array('name' => 'course_name','class' => 'form-control');
echo inputDrop('Course Name', $courseAttr, $courseName);

$sub = array('type'=>'submit', 'name' => 'sub', 'class' =>'form-control', 'value' => 'Register');
echo inputBox('&nbsp;', $sub);

?>
</form>
</div>


<style>
    label {
        line-height: 10px;
        width :130px;
        display:inline-block;
        vertical-align:top;
         margin-bottom:15px;
         margin-left:20px;
    }
    
    div {
            margin:auto;
            width: 400px;
            height:500px;
            border:3px solid black;
            padding: 10px;
            box-shadow: 30px black;
            
    }
    h2{
         text-align: center; 
          margin-bottom:20px;
    }
    input[text]{
        font-size: 3px;
        font-weight: bold;
    }
    

</style>
