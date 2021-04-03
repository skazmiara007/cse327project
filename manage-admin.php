<?php include('partials/menu.php');?>
<?php 
	$connect = mysqli_connect("localhost","root","","azmira");
	$sql = "SELECT * FROM admin_list";
	$result = mysqli_query($connect, $sql);
 ?>
       <!--Main Contain section starts-->
       <div class="main-contain container">
			<div class="panel panel-default">
				<div class="panel-heading">
						<h3 >showing Data<a href="add_user.php" class="float-right btn btn-success">Add User</a></h3>
					
				</div>
				<hr>
				<div class="panel-body">
					<table class="table table-striped">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
		<?php 

			if ($result) {
				$i = 0;
				while ($data = mysqli_fetch_array($result)) {
					$i++;
			?>


						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $data['name']; ?></td>
							<td><?php echo $data['email']; ?></td>
							<td>
								<a class="btn btn-primary" href="edituser.php?id=<?php echo $data['id']; ?>">Edit</a> ||
								<a class="btn btn-danger" href="?action=delete&id=<?php echo $data['id'] ?>" onclick="return confirm('Are you sure to Delete ? ')">Delete</a>
							</td>
						</tr>

		<?php
					
				}
			}else{
				echo '<tr><td colspan="4">No student record found</td>';
			}

		 ?>
						
<?php 

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
	$connect = mysqli_connect("localhost","root","","azmira");
	$sql = "DELETE FROM `admin_list` WHERE id='{$_GET['id']}'";
	$result = mysqli_query($connect, $sql);
	if ($result) {
		header("Location: manage-admin.php");
	}
}

 ?>
					</table>
				</div>
			</div>

        </div>
       <!--Main Contain section ends-->
       
<?php include('partials/footer.php');?>