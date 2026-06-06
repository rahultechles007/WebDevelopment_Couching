<?php

// $stops = ['lingipur', 'Nuagaon', 'samantarapur','Garage chaak','Ravi talkies','NCC canteen','Kalpana sqr ' ];
// if(isset($_POST['target'])){
//     $t = $_POST['target'];
//     amt = 0
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        label {
            line-height: 20px;
            width :100px;
            display: inline-block;
        }
        .box{
            width:800px;
            padding: 20px;
            border:2px solid black; display:flex;
            justify-content: space-between;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="ticket">
            <form action="" method="post">
            <label >Origin </label>  Lingipur <br>
            <label >Destination</label>: <select name="target"><br>
            </select><br><br>
            </label> &nbsp;</label><input type="submit"/>
            </form>
            <br>
            <hr><hr>
            <label>Distination</label> : <?php echo isset($des)?$des:'';?><br>
            <label >Bus Fee</label> : <?php echo isset($amt)?$amt:'';?><br>
        </div>
        <img width="50%"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFttp4rZbqTRvHMLVU13JHKouuM39KZnxCSg&s" alt="">
    </div>

      
</body>
</html>