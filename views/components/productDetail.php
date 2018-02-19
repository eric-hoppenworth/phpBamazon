<div class = "row">
	<div class="jumbotron col text-center">
	  <h1 class="display-4"><?php echo $product->getProperty('product_name'); ?></h1>
	  <p class="lead">Department: <?php echo $product->getProperty('department_name'); ?></p>
	  <hr class="my-4">
	  <p>Price: $<?php echo $product->getProperty('price'); ?></p>
	  <p>Stock: <?php echo $product->getProperty('stock_quantity'); ?></p>
	  <hr class = "my-4">
	  <form method = "post" action = "/products">
	  	<input name="_method" type="hidden" value="DELETE" />
	  	<input name = "item_id" type="hidden" value=<?php echo $product->getProperty('item_id'); ?>  >
	    <button class="btn btn-primary btn-lg" type="submit">Delete this Product</button>
	  </form>
	</div>
</div>

