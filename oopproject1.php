<?php
  if(isset($_POST['submit'])){
    $number1 = $_POST['n1'];
    $number2 = $_POST['n2'];

    $sum = $number1 + $number2;
    $difference = $number1 - $number2;
    $product = $number1 * $number2;
    $quotient = $number1 / $number2;

    echo "<div class='container'>";
    echo "<h2>Results:</h2>";
    echo "<p>Sum: $sum</p>";
    echo "<p>Difference: $difference</p>";
    echo "<p>Product: $product</p>";
    echo "<p>Quotient: $quotient</p>";
    echo "</div>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

  <!--Jescmar Malon BSIT 2B OOP Assignment-->

<div class="container">
  <h1>Calculator</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
      <label for="n1">First Number:</label>
      <input type="number" class="form-control" name="n1" required>
    </div>
    <div class="form-group">
      <label for="n2">Second Number:</label>
      <input type="number" class="form-control" name="n2" required>
    </div>
    <input type="submit" name="submit" value="Calculate" class="btn btn-primary">
  </form>
</div>

</body>
</html>