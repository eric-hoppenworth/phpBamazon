<?php

class Product {
  
  private $item_id;
  private $product_name;
  private $price;
  private $stock_quantity;
  private $department_name;

  public function __construct ($arr) {
    foreach($arr as $name => $value) {
      if(property_exists($this, $name)){
        $this->$name = $value;
      }
    }
  }

  public function getProperty($name) {
    if($this->$name){
      return $this->$name;
    } else {
      return null;
    }
  }

  public function create($con){
    $query = "insert into products (product_name, department_name, price, stock_quantity) values ('$this->product_name' , '$this->department_name' , '$this->price' , '$this->stock_quantity' );";
    $result = $con->query($query);
    $this->item_id = $con->insert_id;
    return $result;
  }

  public function update($con){
    $query = "Update products
      set product_name = '$this->product_name',
        department_name = '$this->department_name',
        price = '$this->price',
        stock_quantity = '$this->stock_quantity'
      where item_id = '$this->item_id' ;";
    $result = $con->query($query);
    return $result;
  }

  public function destroy($con){
    $query = "delete from products where item_id = '$this->item_id'";
    $result = $con->query($query);
    return $result;
  }

}