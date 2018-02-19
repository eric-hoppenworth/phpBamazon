<!doctype html>
<html
<head>
  <?php require '../views/components/head.php' ?>
  <style>
    p {
      font-size: 18px;
    }

    footer {
      padding: 2em;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
  <?php
    
    if ($mysqli->connect_errno) {
      // The connection failed. What do you want to do? 
      // You could contact yourself (email?), log the error, show a nice page, etc.
      // You do not want to reveal sensitive information

      // Let's try this:
      echo "Sorry, this website is experiencing problems.";
    }
    $result = $mysqli -> query("Select * from products;");
    while($row = $result -> fetch_assoc()){
      require "../views/components/product.php";
    }
  ?>

  </div>
</body>
</html>
