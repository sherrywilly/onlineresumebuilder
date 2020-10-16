<?php
include 'header.php';
require '../config.php';
 ?>

<div class="wrapper text-center font-weight-bold text-center text-capitalize mt-3">
<h1 style="color:white"> select your template</h1>
</div>
<div class="container mt-3">
	<div class="row">

<?php 
$sql = "select * from template";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

	while($row=mysqli_fetch_assoc($result)){


 ?>


		<div class="col-md-4">
<div class="card">
	<div class="card-body">
			<img src="<?php echo $row['img']; ?>" alt="..." class="img-fluid img-thumbnail">
			<div class="text-right mt-1">
			
			<a href="<?php echo $row['path']; ?>" target="_blank" class="btn btn-outline-success"> <i class="fas fa-download">download</i></a>
			</div>
		</div>
</div>

		</div>





		<?php 

}
}
		 ?>
		
	</div>
</div>
''
<script>
	


</script>

 <?php
 include 'footer.php';
 ?>