<?php 
require '../config.php';
include 'header.php';




 ?>


<div class="container">
	<div class="card mt-5">

		<div class="card-header text-capitalize font-weight-bold"> <i class="fas fa-user"></i>  users</div>
		<div class="card">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>name</th>
							<th>phone</th>
							<th>email</th>
							<th>actions</th>
						</tr>
					</thead>
					<tbody>
<?php 
$sql = "select * from users";
$result = mysqli_query($conn,$sql);
$si =1;
if(mysqli_num_rows($result)>0){

	while ($res = mysqli_fetch_assoc($result)) {
?>



<tr>
	<td><?php echo $si++; ?></td>
	<td><?php echo $res['fname']." ".$res['lname'];  ?></td>
	<td><?php echo $res['phone'];  ?></td>
	<td><?php echo  $res['email'];  ?></td>
	<td>   <button id="<?php echo  $res['id'];  ?>"  class="trash btn"> <i class="fas fa-trash-alt" style="color:red;" style="border:none;"></i></button></td>
</tr>



<?php



		# code...
	}
}



 ?>




						
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
</div>




<script>
	$(document).ready(function(){
		$('.trash').click(function(){
			var i = $(this).attr('id');
			var conf = confirm('do you want to delete this item');
			if(conf==true){
				$.ajax({
					url: 'drop.php',
					type: 'POST',
					dataType: 'json',
					data: {
						action:'delete-user',
					    d_id:i
				},
				success:function(res){



				},
				})
				
				
			}
		})

	})
	
</script>





 <?php 

include 'footer.php';




 ?>