<?php include('partials/menu.php');?>
<?php

	$connect = mysqli_connect("localhost","root","","azmira");
	$sql = "SELECT * FROM admin_list WHERE id='{$_GET['id']}'";
	$result = mysqli_query($connect, $sql);
	$data = mysqli_fetch_array($result);
	if ($data) {
		
?>
<section class="container">
	<div class="panel panel-default bg-secondary p-3">
		<div class="panel-heading">
			<h3>showing Data</h3>
		</div>
		<div class="panel-body">
			<form action="#" method="post">
				<div class="form-group">
					<label for="name">Student Name</label>
					<input type="text" class="form-control" name="name" id="name" required="" value="<?php echo $data['name']; ?>" />
				</div>
				<div class="form-group">
					<label for="name">Student email</label>
					<input type="text" class="form-control" name="email" id="email" value="<?php echo $data['email']; ?>" required="" />
				</div>
				<div class="form-group">
					<input type="hidden" name="id" value="<?php echo $getData['id']; ?>">
					<input type="hidden" name="action" value="edit">
					<input type="submit" name="submit" class="btn btn-primary" value="update Student" />
				</div>
			</form>
		</div>
<?php
}else{
	echo 'no data found';
}
 ?>	
	</div>
</section>

<?php include('partials/footer.php');?>