<?php include('partials/menu.php');?>
<section class="container">
	<div class="panel panel-default bg-secondary p-3">
		<div class="panel-heading">
			<h3 class="text-center">Add  User</h3>
		</div>
<?php 

	if (isset($_POST['submit'])) {
		$connect = mysqli_connect("localhost","root","","azmira");
		$sql = "INSERT INTO `admin_list`(`name`, `email`, `password`) VALUES ('{$_POST['name']}','{$_POST['email']}','1234')";
		$result = mysqli_query($connect, $sql);
		if ($result) {
			$msg = 'User added Successfull';
		}
	}

 ?>
		<div class="panel-body">
			<h4 class="text-center bg-success"><?php if (isset($msg)) {echo $msg;} ?></h4>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Student Name</label>
					<input type="text" class="form-control" name="name" id="name" value="" required="" />
				</div>
				<div class="form-group">
					<label for="name">Student email</label>
					<input type="text" class="form-control" name="email" id="name" value="" required="" />
				</div>
				<div class="form-group">
					<input type="hidden" name="action" value="add">
					<input type="submit" name="submit" class="btn btn-primary" value="Add User" />
				</div>
			</form>
		</div>
			
	</div>
</section>

<?php include('partials/footer.php');?>
