<!DOCTYPE html>
<html>
<head>
    <title>CodeIgniter 4 and MySQL 8 CRUD Example - Update Product</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
</head>
<body>

	<div style="width: 600px; margin: auto;">
		<p><a href="<?php echo site_url('productcontroller') ?>">List of Products</a>&nbsp;|&nbsp<a href="<?php echo site_url('productcontroller/create') ?>">Add New Product</a></p>
	
		<?php
			if(isset($errors)):
		?>
			<ul style="list-style: none; color: red;">
				<?php foreach ($errors as $error) : ?>
				<li><?= esc($error) ?></li>
				<?php endforeach ?>
			</ul>
		<?php
			endif;
		?>
		
		<?php
			if(isset($success)):
		?>
			<ul style="list-style: none; color: green;">
				<li><?= esc($success) ?></li>
			</ul>
		<?php
			endif;
		?>

		<?= form_open('productcontroller/update') ?>
			<h5>Id</h5>
			<input type="text" name="id" readonly value="<?php echo $product_info->id; ?>"/>

			<h5>Name</h5>
			<input type="text" name="name" value="<?php echo set_value('name') !=null ? set_value('name') : $product_info->name; ?>" size="50" />

			<h5>Price</h5>
			<input type="text" name="price" value="<?php echo set_value('price') != null ? set_value('price') : $product_info->price; ?>" size="50" />

			<h5>Selling Price</h5>
			<input type="text" name="sale_price" value="<?php echo set_value('sale_price') !=null ? set_value('sale_price') : $product_info->sale_price; ?>" size="50" />

			<h5>Sales Count</h5>
			<input type="text" name="sales_count" value="<?php echo set_value('sales_count') != null ? set_value('sales_count') : $product_info->sales_count; ?>" size="50" />
			
			<h5>Selling Date</h5>
			<input type="text" name="sale_date" value="<?php echo set_value('sale_date') != null ? set_value('sale_date') : $product_info->sale_date; ?>" size="50" />

			<p/>
			<div><input type="submit" name="submit" value="Submit" /></div>

		</form>
	</div>

</body>
</html>