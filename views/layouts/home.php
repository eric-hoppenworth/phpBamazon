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

    .product {
      margin-bottom: 15px;
      margin-top: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class = "row">
      
    </div>
    <div class = "row">
      <div class = "col-4 product">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Add New Product</h5>
            <a class = "btn btn-primary" href = "/products">Create</a>
          </div>
        </div>
      </div>
      <?php
        
        if ($mysqli->connect_errno) {
          echo "Sorry, this website is experiencing problems.";
        }
        $result = $mysqli -> query("Select * from products;");
        while($row = $result -> fetch_assoc()){
          $product = new Product($row);
          require "../views/components/product.php";
        }
      ?>
      
    </div>

  </div>
</body>
</html>
