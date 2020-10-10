<?php 
require '../config.php';
include 'header.php';


$sql="select * from users where id=1";
$result = mysqli_query($conn, $sql);
$res = mysqli_fetch_assoc($result)


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
					<label for="">First Name</label>
				</div>
				<div class="col-md-8">
<div class="form-group">
	<input type="text" name="fname" id="" class="form-control" value="<?php echo $res['fname']; ?>">
</div>
				</div>
			</div>
				<div class="row justify-content-around">
				<div class="col-md-2">
					<label for="">Last Name</label>
				</div>
				<div class="col-md-8">
<div class="form-group">
	<input type="text" name="lname" id="" class="form-control" value="<?php echo $res['lname']; ?>">
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
				<div class="row justify-content-around">
				<div class="col-md-2">
					<label for="">Phone</label>
				</div>
				<div class="col-md-8">
<div class="form-group">
	<input type="text" name="phone" id="" class="form-control" value="<?php echo $res['phone']; ?>">
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


if(isset($_POST['update'])){

if($_POST['pass']==''){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    
    $sql = "update users set fname='$fname',
    lname='$lname',
    email = '$email',
    phone = '$phone' where id = 1";
    mysqli_query($conn,$sql);
    header("location:profile.php");


}else{


    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    $pass = $_POST['pass'];

	echo $sql = "update users set fname= '$fname',
    lname = '$lname',
    email = '$email',
    phone = '$phone',
    password ='$pass' where id = 1";
    mysqli_query($conn,$sql);
    header("location:profile.php");
}



}




  ?>