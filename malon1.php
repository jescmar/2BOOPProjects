<?php 
function connection(){
    $server_name = "localhost";
    $username = "root";
    $password = ""; 
    $db_name = "2b-tb";
    $conn = new mysqli($server_name, $Username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    } else {
        return $conn;
    }
}

function Register($Username,$email,$spass,$hpass){
    $conn = connection();
    $sql = "INSERT INTO `database` (`Usename`, `Email`, `showpassword`,) VALUES ('$Username','$email','$spass','$hpass')";
    if($conn->query($sql)){
        header("location: Success.php");
      
        exit;
        // same as die()
    } else {
        die("Error adding new product: " . $conn->error);
    }
}


if(isset($_POST['btn_submit'])){
    $Userame = $_POST['Username'];
    $email = $_POST['email'];
    $spass = $_POST['showpass'];
    $hpass = $_POST['hidepass'];


    Register($email,$spass,$hpass);
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
    <td><input type="Username" name="Username" placeholder="Enter name"></td>
    </tr>
    <tr>
    <td><label for="">email:</label></td>
    <td><input type="email" name="email" placeholder="Enter email with '@' symbol"></td>
    </tr>
    <tr>
    <td><label for="">Password:</label></td>
    <td><input type="text" name="showpass" placeholder="Enter password"></td>
    </tr>
    <tr>
    <td><label for="">Password:</label></td>
    <td><input type="text" name="hidepass" placeholder="Enter password"></td>
    </tr>
    <tr>
    <td><input type="submit" name="btn_submit" value="Register"></td>
    <td><input type="reset" name="btn_reset" value="Reset"></td>
    </tr>
    </table> 
    </form>
</body>
</html><?php 