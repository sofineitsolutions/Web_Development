<!DOCTYPE html>
<?php require'conn.php'?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-30 well">
		<h3 class="text-primary">PHP - Inline Delete Table Row In MySQLi</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="POST" action="insert5.php">
					<div class="form-group">
					<label>title</label>
					<input type="text" class="form-control" name="db_title1" required="required"/>
				</div>
				<div class="form-group">
					<label>subtitle</label>
					<input type="text" class="form-control" name="db_subtitle1" required="required"/>
				</div>
				
				<div class="form-group">
					<label>description</label>
					<input type="text" class="form-control" name="db_dec1" required="required"/>
				</div>
				<div class="form-group">
					<label>subtitle</label>
					<input type="text" class="form-control" name="db_subtitle2" required="required"/>
				</div>
				<div class="form-group">
					<label>subtitle</label>
					<input type="text" class="form-control" name="db_subtitle3" required="required"/>
				</div>
				<div class="form-group">
					<label>subtitle</label>
					<input type="text" class="form-control" name="db_subtitle4" required="required"/>
				</div>
				<div class="form-group">
					<label>subtitle</label>
					<input type="text" class="form-control" name="db_subtitle5" required="required"/>
				</div>
				<div class="form-group">
					<label>description</label>
					<input type="text" class="form-control" name="db_dec2" required="required"/>
				</div>
				<div class="form-group">
					<label>description</label>
					<input type="text" class="form-control" name="db_dec3" required="required"/>
				</div>
				<div class="form-group">
					<label>description</label>
					<input type="text" class="form-control" name="db_dec4" required="required"/>
				</div>
				<div class="form-group">
					<label>description</label>
					<input type="text" class="form-control" name="db_dec5" required="required"/>
				</div>
				<div class="form-group">
					<label>title</label>
					<input type="text" class="form-control" name="db_title2" required="required"/>
				</div>
				<div class="form-group">
					<label>content</label>
					<input type="text" class="form-control" name="db_con1" required="required"/>
				</div>
				<div class="form-group">
					<label>content</label>
					<input type="text" class="form-control" name="db_con2" required="required"/>
				</div>
				<div class="form-group">
					<label>content </label>
					<input type="text" class="form-control" name="db_con3" required="required"/>
				</div>
				<div class="form-group">
					<label>content</label>
					<input type="text" class="form-control" name="db_con4" required="required"/>
				</div>
				<div class="form-group">
					<label>content</label>
					<input type="text" class="form-control" name="db_con5" required="required"/>
				</div>
				<div class="form-group">
					<label>content</label>
					<input type="text" class="form-control" name="db_con6" required="required"/>
				</div>
				<div class="form-group">
					<label>title</label>
					<input type="text" class="form-control" name="db_title3" required="required"/>
				</div>
				<div class="form-group">
					<label>content</label>
					<input type="text" class="form-control" name="db_con7" required="required"/>
				</div>
				<div class="form-group">
					<label>content</label>
					<input type="text" class="form-control" name="db_con8" required="required"/>
				</div>
				<div class="form-group">
					<label>content</label>
					<input type="text" class="form-control" name="db_con9" required="required"/>
				</div>
				<div class="form-group">
					<label>content</label>
					<input type="text" class="form-control" name="db_con10" required="required"/>
				</div>

				
				<center><button class="btn btn-primary" name="save">Save</button></center>
			</form>
		</div>
		<div class="col-md-10">
<!-- 			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Album No</th>
						<th>Invoice No</th>
						<th>Order Date</th>
						<th>Delevary date</th>
						<th>Studio Name</th>
						<th>Type</th>
						<th>Size</th>
						<th>Transprent</th>
						<th>Paper</th>
						<th>Pad</th>
						<th>Lamination</th>
						<th>Bag</th>
						<th>Specil Paper</th>
						<th>Mini Book</th>
						<th>Lamination</th>
						<th>Calender</th>
						<th>Pages Oty</th>
						<th>Narration</th>
						<th>Couple Name</th>
						<th>Check Out Date</th>
						<th>Billing</th>
						<th>Action</th>




					</tr>
				</thead>
				<tbody> -->
					<?php
						$query=mysqli_query($conn, 'SELECT * FROM `member`') or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $fetch['album_no']?></td>
						<td><?php echo $fetch['invoice_no']?></td>
						<td><?php echo $fetch['Order_date']?></td>
						<td><?php echo $fetch['Delivery_Date']?></td>
						<td><?php echo $fetch['studio_name']?></td>
						<td><?php echo $fetch['type']?></td>
						<td><?php echo $fetch['size']?></td>
						<td><?php echo $fetch['transprent']?></td>
						<td><?php echo $fetch['paper']?></td>
						<td><?php echo $fetch['pad']?></td>
						<td><?php echo $fetch['lamination']?></td>
						<td><?php echo $fetch['bag']?></td>
						<td><?php echo $fetch['specil_paper']?></td>
						<td><?php echo $fetch['mini_book']?></td>
						<td><?php echo $fetch['lamination1']?></td>
						<td><?php echo $fetch['calender']?></td>
						<td><?php echo $fetch['pages_Qty']?></td>
						<td><?php echo $fetch['narration']?></td>
						<td><?php echo $fetch['couple_name']?></td>
						<td><?php echo $fetch['check_out_date']?></td>
						<td><?php echo $fetch['billing']?></td>

						<td><a href="delete.php?id=<?php echo $fetch['mem_id']?>">Delete</a></td>
					</tr> -->
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>