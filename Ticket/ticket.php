<?php 
$stops = ['Lingipur', 'Nuagaon', 'Samantarapur', 'Garage Chhak', 'Ravi Talkies', 'NCC Canteen', 'Kalapana'];
if(isset($_POST['target'])){
    $t = $_POST['target'];
    $amt = 0;
    switch($t){
        case 6:
            $amt+=2;
        case 5:
            $amt+=2;  // this is mainly used for the place the target place to drop
                        // so for downwark the fllow will go and add 2 from ecah place toward down 
        case 4:
            $amt+=2;
        case 3:
            $amt+=2;
        case 2:
            $amt+=2;
        case 1:
            $amt+=2;
            break;
    }
    $tax = $amt*18/100;
    $total = $amt+$tax;
    $des = $stops[$t];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{width:800px;padding:20px; border:2px solid black; display: flex; justify-content: space-between;margin:auto}
        label{width:100px; display: inline-block;line-height:30px;}
        </style>
</head>
<body>
    <div class="box">
        <div class="ticket">
            <form action="" method="post">
                <label>Source </label>: Lingipur<br>
                <label>Target</label>: <select name="target">
                    <?php 
                        for($i=0; $i<count($stops); $i++){
                            $st = $stops[$i];
							$chk = '';
							if(isset($t)){
								if($t==$i)   // check the condition of the array apply in the selection of the target destination of the people 
									$chk = 'selected';
							}
                            echo "<option $chk value='$i'>$st</option>";
                        }
                    ?>
                    
                </select><br>
                <label>&nbsp;</label>   <input type="submit"/>

            </form>
            <br>
            <hr>
            <label>Destination</label> : <?php echo isset($des)?$des:'';?><br>
            <label>Bus fee</label> : <?php echo isset($amt)?$amt:'';?><br>
            <label>Tax </label> : <?php echo isset($tax)?$tax:'';?><br>
            <label>Total Amount </label> :<?php echo isset($total)?$total:'';?>
			
			<?php 
				$cat = array('SC', 'ST', 'OBC','SEBC', 'GENERAL');
			?>
			<select>
				<option value="">Select</option>
				<?php 
					$i=0;
					while($i<count($cat)){
						$v = $cat[$i];
						echo "<option value='$v'>$v</option>";
						$i++;
					}
				?>
			</select>
			<select>
				<option value="">Select</option>
				<?php 
					for($i=0;$i<count($cat); $i++)
						echo "<option value='".$cat[$i]."'>".$cat[$i]."</option>";
				?>
			</select>
			<select>
				<option value="">Select</option>
				<?php 
					foreach($cat as $c)
						echo "<option value='$c'>$c</option>";
				?>
			</select>
        </div>
        <img width="50%" src="https://www.cmv360.com/_next/image?url=https%3A%2F%2Fs3.ap-southeast-1.amazonaws.com%2Fdelen%2Fuploads%2Fbf02079d-7953-4819-8c2a-2391572f8d0e-small-New%2520Project%2520%25281%2529.webp&w=384&q=100"/>

    </div>
</body>
</html>