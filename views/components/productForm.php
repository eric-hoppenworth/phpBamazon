<div class = "row">
	<div class = "col">
		<h1><?php if($isUpdate){echo "Update Product"; }else{echo "Create Product"; } ?></h1>
		<hr>
		<form method="post" action="/products">
		  	<input name="_method" type="hidden" value=<?php if($isUpdate){echo "PUT"; }else{echo "POST"; } ?> />
	  		<input name = "item_id" type="hidden" value=<?php if($isUpdate) echo $product->getProperty('item_id'); ?>  >
			<div class="form-group">
			    <label for="product_name">Product Name</label>
			    <input 
			    	type="text" 
			    	class="form-control" 
			    	name = "product_name" 
			    	value= <?php if($isUpdate) echo $product->getProperty('product_name'); ?> 
			    > 
		 	</div>

			<div class="form-group">
				<label for="department_name">Department</label>
				<input 
					type="text" 
					class="form-control" 
					name = "department_name" 
					value= <?php if($isUpdate) echo $product->getProperty('department_name'); ?> 
				> 
			</div>

			<div class="form-group">
				<label for="price">Price</label>
				<input 
					type="text" 
					class="form-control" 
					name = "price" 
					aria-describedby="priceHelp" 
					value= <?php if($isUpdate) echo $product->getProperty('price'); ?> 
				> 
				<small id="priceHelp" class="form-text text-muted">Price in USD.</small>
			</div>

			<div class="form-group">
				<label for="stock_quantity">Quantity</label>
				<input 
					type="text" 
					class="form-control" 
					name = "stock_quantity" 
					value= <?php if($isUpdate) echo $product->getProperty('stock_quantity'); ?> 
				> 
			</div>

			<button type="submit" class="btn btn-primary"><?php if($isUpdate){echo "Update"; }else{echo "Create"; } ?></button>
		</form>
	</div>
</div>