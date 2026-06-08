<!-- Form Handling :- Making a Register form to make the form dynamic type using FUNCTION  // Dynamic form  ( which can be updated and Insert any data in the form )-->
<!-- FOR MAKING THE FORM DYNAMIC WE HAVE TO MAKE DIFFERNT FUNCTION FOR DIFFERNT TYPES AND VALUSE IN INPUT   -->

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
            $s = 'selected';
        $opts .= "<option $s value='$v'/>".ucfirst($v)."</option>";
    }
    $opts .="</select>";
    return $opts . "<br>";
}




?>

<form action="" method="post">
    <?php 
    // student name 
      $Sname = array('type'=>'text', 'name' => 'sname', 'class' =>'form-control', 'value' => '');// value is blank   
        echo inputBox('Student Name', $Sname); // Expected type'string' | stringable | NULL found'void'

        // age 
        $sage = array('type'=>'text', 'name' => 'sage', 'class' =>'form-control', 'value' => '' );
        echo inputBox('Student Age' , $sage);

        // radio for gender 
        $gender =array('male', 'female', 'other');
        $gene = array('type'=>'radio', 'name' => 'gen', 'class' =>'form-control');
        echo inputRadio('Gender',$gene, $gender,'male');
        // checkBox of langauage 
        // Drop Down button 
         $cat = array('ST', 'SC', 'OBC', 'GENERAL', 'SEBC');
         $cata = array('type'=>'text', 'name' => 'cat', 'class' =>'form-control' ); 
         echo inputDrop('Category', $cata, $cat);
         //Textarea 
         $txt = array('rows'=> 6, 'cols' =>40, 'name' => 'addeass', 'class ' => 'form-control');
         $v = 'Plot no-389 , Bjb Nagar Bhubaneswar';
         echo inputTextarea('Address', $txt , $v);
        // submit button 
        $sub = array('type'=>'submit', 'name' => 'sub', 'class' =>'form-control', 'value' => 'Register');
        echo inputBox('&nbsp;', $sub);
        

    ?>

</form>

<style>
    label {
        line-height : 30px;
        display: inline-block;
        width:100px;
        vertical-align: top;
    }
</style>