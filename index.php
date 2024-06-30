<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
    <div class="container">
        <h1>Factorial Calculator</h1>

    <?php
      include 'factorial.php';
      $number = 5;
      $result = factorial(($number));
      echo "<p>Factorial of $number is: $result</p>";

    ?>
    </div>
</body>
</html>