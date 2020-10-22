<?php

include 'header.php';
require '../config.php';
$user_id = $_SESSION['userid'];
$sql = "select * from resume_build where uid = '$user_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    ?>

	


<div class="container mt-3 mb-5">
	<div class="card">
		<div class="card">
			<div class="card-header text-capitalize font-weight-bold"> <i class="fab fa-readme"></i> Recent activities</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bodered table-hover text-center">
						<thead>
							<tr>
							<th>id</th>
							<th>name</th>
							<th colspan="2">actions</th>
							</tr>
						</thead>
						<tbody>

							<?php
                            $si = 1;
    while ($r = mysqli_fetch_assoc($result)) {
        ?>
							<tr>
								<td><?php echo $si++; ?></td>
								<td><?php echo $r['fname'].' '.$r['lname']; ?></td>
								<td><a href="create.php" class="btn btn-outline-success clicker" id="<?php echo $r['id']; ?>"><i class="fas fa-download">&nbsp;download</i></a></td>
								<td><button class="btn btn-outline-danger drop" id="<?php echo $r['id']; ?>"><i class="fas fa-user-minus">&nbsp;delete</i></button></td>
							</tr>
							<?php
    } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
	</div>

	

</div>

<?php
}

 ?>












<script>
	
$(document).ready(function(){
	function clear(){
	sessionStorage.removeItem('getid');
	}



clear();
$('.clicker').click(function(){
	
	var id = $(this).attr('id');
	sessionStorage.setItem("getid",id);
})



$('.drop').click(function(){
     var conf = confirm("do you want to delete this item");
     if(conf){
     	var id = $(this).attr('id');
     	$.ajax({
     		url: 'droper.php',
     		type: 'POST',
     		dataType: 'json',
     		data: {action: 'delete_resume',
     		id: id,
     		t_name:"resume_build"},
     		success: function(res){
     			if(res.status){
     				alert(res.msg);
     				location.reload();
     			}else{
     				alert(res.msg);
     				location.reload();
     			}

     		}
     	})
     	
     	

     }
	

	
	

})



})

</script>
<?php

include 'footer.php';

 ?>