<div class = "col-4 product">
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title"><?php echo $product->getProperty('product_name'); ?></h5>
	    <p class="card-text">Department: <?php echo $product->getProperty('department_name'); ?></p>
	    <p class="card-text">Price: $<?php echo $product->getProperty('price'); ?></p>
	    <p class="card-text">Remaining Items: <?php echo $product->getProperty('stock_quantity'); ?></p>
	    <form method = "get" action="/products">
	    	<input 
	    		name = "item_id" 
	    		value = <?php echo $product->getProperty('item_id'); ?>
	    		type = "hidden"
	    	>
	    	<button class="btn btn-primary" type="submit">View this product</button>
	   	</form>
	  </div>
	</div>
</div>