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
    $isPost = true;
    require '../views/components/nav.php';
    require '../views/components/content.php';
    require '../views/components/footer.php';

  ?>
  </div>
</body>
</html>
