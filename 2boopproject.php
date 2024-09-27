<<<<<<< HEAD
<?php 
function connection(){
    $server_name = "localhost";
    $username = "root";
    $password = ""; 
    $db_name = "2b-tb";
    $conn = new mysqli($server_name, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    } else {
        return $conn;
    }
}

function Register($email,$spass){
    $conn = connection();
    $sql = "INSERT INTO `database` (`Email`, `password`) VALUES ('$email','$spass')";
    if($conn->query($sql)){
        header("location: Success.php");
      
        exit;
        // same as die()
    } else {
        die("Error adding new product: " . $conn->error);
    }
}


if(isset($_POST['btn_submit'])){
    $email = $_POST['email'];
    $spass = $_POST['showpass'];


    Register($email,$spass);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <table>
    <tr>
    <td><label for="">Username:</label></td>
    <td><input type="email" name="email" placeholder="Enter email with '@' symbol"></td>
    </tr>
    <tr>
    <td><label for="">Password:</label></td>
    <td><input type="text" name="showpass" placeholder="Enter password"></td>
    </tr>
    <tr>
    <td><input type="submit" name="btn_submit" value="Register"></td>
    <td><input type="reset" name="btn_reset" value="Reset"></td>
    </tr>
    </table> 
    </form>
</body>
</html>
=======
<?php
    echo "my name is jescmar malon<br>";
    echo "i lived in adorable jeminez";
?>
>>>>>>> 7e95d34cfda697a15ed98dc2b9edf8addaff0204
