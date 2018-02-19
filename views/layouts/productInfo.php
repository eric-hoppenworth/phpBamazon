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
  <a href="/" >Back to list</a>
  <div class="container">
    <?php
      
      if ($mysqli->connect_errno) {
        echo "Sorry, this website is experiencing problems.";
      }
      if(array_key_exists("item_id", $_GET)){
        $id = $_GET["item_id"];
        $result = $mysqli -> query("Select * from products WHERE item_id = " . $id . ";");
        while($row = $result -> fetch_assoc()){
          $product = new Product($row);

          require "../views/components/productDetail.php";
          $isUpdate = true;
          require "../views/components/productForm.php";
        }
      }elseif (array_key_exists("_method", $_POST)){
        $product = new Product($_POST);
        switch($_POST['_method']){
          case "POST":
            if($product->create($mysqli)){
              echo "<h1>Success!</h1>";
              require "../views/components/product.php";
            } else {
              echo "oh no..." . $mysqli->error;
            }
            break;
          case "PUT":
            if($product->update($mysqli)){
              echo "<h1>Update Successful!</h1>";
              require "../views/components/product.php";
            } else {
              echo "oh no..." . $mysqli->error;
            }
            break;
          case 'DELETE':
           if($product->destroy($mysqli)){
              echo "<h1>Product Removed</h1>";
              echo "<a href ='/'>Return</a>";
            } else {
              echo "oh no..." . $mysqli->error;
            }
            break;
          default:
            echo "Method does not exist";
        }
      } else {
        $isUpdate = false;
        require "../views/components/productForm.php";
      }
      
    ?>

  </div>
</body>
</html>
