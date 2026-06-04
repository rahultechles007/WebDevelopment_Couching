<h2>Lucky Draw </h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <label>Name : </label><input type="text" name="user"placeholder="Enter Name "/><br><br>
    <label>Number </label><input type="text" name="num" placeholder="Enter Number"/><br><br>
    <label>&nbsp;</label><input type="submit" name="sub"/><br><br>
</form>

<?php 
if(isset($_GET['sub'])){
    extract($_GET);
    echo "<label>Name : <label> $user <br>";
    echo "<label>Number : <label> $num <br>";

    switch($num){
        case 45:
            $img = "https://images.pexels.com/photos/29721745/pexels-photo-29721745.jpeg";
            $msg = "Congratulations! You Won a Car";
            break;
        
        case 44 :
            $img="https://images.pexels.com/photos/13350017/pexels-photo-13350017.jpeg";
            $msg="Congratulations! You Won a super bike";
            break;

        case 99 :
            $img ="https://images.pexels.com/photos/13886741/pexels-photo-13886741.jpeg";
            $msg ="Congratulations! You Won a Iphone16";
            break;

        case 56 :
            $img ="https://images.pexels.com/photos/25839642/pexels-photo-25839642.jpeg";
            $msg ="Congratulations! You Won a Macbook";
              break;
        case 23 :
            $img ="https://images.pexels.com/photos/7199194/pexels-photo-7199194.jpeg";
            $msg ="Congratulations! You Won a PC setup ";
            break;

        default :
            $img ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKV4wOCnfwTOaGgCwdg4CK-8KfYjiO6qGwfCFY7cN62g&s";
            $msg ="Better luck next time ";
            break;
            
    }
    echo "<img src='$img' width='300px'/><br><br><h1>$msg</h1>";
}

?>

