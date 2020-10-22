<?php
require '../config.php';
include 'header.php';
$test = $_SESSION['adminid'];
$sql = "select * from admin where id='$test'";
$result = mysqli_query($conn, $sql);
$res = mysqli_fetch_assoc($result);

 ?>


<div class="container">
	<div class="card mt-4">
		<div class="card-header text-center text-capitalize font-weight-bold">
			update profile
		</div>
		<div class="card-body">
			<form method="POST">
			<div class="row justify-content-around">
				<div class="col-md-2">
					<label for="">username</label>
				</div>
				<div class="col-md-8">
<div class="form-group">
	<input type="text" name="uname" id="" class="form-control" value="<?php echo $res['username']; ?>">
</div>
				</div>
			</div>
				
				<div class="row justify-content-around">
				<div class="col-md-2">
					<label for="">Email</label>
				</div>
				<div class="col-md-8">
<div class="form-group">
	<input type="email" name="email" id="" class="form-control" value="<?php echo $res['email']; ?>">
</div>
				</div>
			</div>
				

	<input type="hidden" name="uid" id="" class="form-control" value="<?php echo $res['id']; ?>">
	<input type="hidden" name="update" id="" class="form-control" value="update-profile">

				
			<div class="row justify-content-around">
				<div class="col-md-2">
					<label for="">Password <span style="color:red">fill if need to change password</span></label>
				</div>
				<div class="col-md-8">
<div class="form-group">
	<input type="password" name="pass" id="" class="form-control" placeholder="fill up if you need to change the password">
</div>
				</div>
			</div>


		<input type="submit" value="update" class="btn btn-block btn-outline-success">


</form>

		</div>
	</div>
</div>


 <?php
include 'footer.php';

if (isset($_POST['update'])) {
    if ($_POST['pass'] == '') {
        $username = $_POST['uname'];
        $id = $_POST['uid'];
        $email = $_POST['email'];

        $sql = "update admin set username='$username',
    email = '$email'
     where id = '$id'";
        mysqli_query($conn, $sql);
        header('location:profile.php');
    } else {
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $id = $_POST['uid'];

         $sql = "update admin set username= '$username',
    email = '$email',
    password ='$pass' where id = '$id'";
        mysqli_query($conn, $sql);
        header('location:profile.php');
    }
}

  ?>