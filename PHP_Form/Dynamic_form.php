<!-- /* Here we have to find the common input type , name , values  and so on   */
// The COMMON TYPES HELP IN CODE REUSEABLILITY AND OPTIMIZE THE CODE AND -->
           <!-- DYNAMIC FORM MANIPULATION VIA FORM HANDLING IN PHP    -->

<?php 
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

<style>
    label {
        line-height: 10px;
        width :130px;
        display:inline-block;
    }
    div {
            margin:auto;
            width: 400px;
            height:500px;
            border:3px solid black;
            padding: 10px;
            box-shadow: 30px black;
            
    }
    h1{
         text-align: center; 
    }
    input[text]{
        font-size: 3px;
        font-weight: bold;
    }
</style>

<div>
    <h1> Registration Form </h1>
    <form action="" method="post">
        <?php 
        $momo = array('type' => 'text', 'name' =>'', 'class'=>'form-control', 'value' =>'');
        
        $momo['name']='$name';
        $momo['value'] = "Rahul kumar";
        echo inputBox('Student name', $momo);

        $momo['name']='age';
        $momo['value'] ="22";
        echo inputBox('Student Age',$momo);

        $momo['name'] ='gender'

        ?>
    </form>
</div>