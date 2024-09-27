<?php
  if(isset($_POST['day'])){
    $day = $_POST['day'];
    echo "<h2>You clicked: $day</h2>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Buttons</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

  <!--Jescmar Malon BSIT 2B OOP Assignment-->

<div class="container">
  <h1>Day Buttons</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <button type="submit" name="day" value="Monday" class="btn btn-primary">Monday</button>
    <button type="submit" name="day" value="Tuesday" class="btn btn-primary">Tuesday</button>
    <button type="submit" name="day" value="Wednesday" class="btn btn-primary">Wednesday</button>
    <button type="submit" name="day" value="Thursday" class="btn btn-primary">Thursday</button>
    <button type="submit" name="day" value="Friday" class="btn btn-primary">Friday</button>
  </form>
</div>

</body>
</html>
maxcdn.bootstrapcdn.com
