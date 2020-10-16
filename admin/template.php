<?php
include 'header.php';
require '../config.php';

 ?>

<div class="container">

<div class="card mt-3"    style="background-color:transparent !important;">
	<div class="card-header text-white"> 
	

		<div class="row">
			<div class="col-md-10">
				

				<div class="card-title text-center">
		<i class="fas fa-pager"> Templates</i> 
	</div>
			</div>
		
<div class="col-md-2">
	<button class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">add</button></div>
	</div></div>
	  
	
	<div class="card" style="background-color:transparent !important;">
		<div class="card-body" style="background-color:transparent !important;">

				<table class="table table-striped table-hover text-white text-center">
					<thead class="text-capitalize">
<tr>
	<th>sid</th>
	<th>Img</th>
	<th>name</th>
	<th>action</th>
</tr>

					</thead>
					<tbody>


<?php 
$sql = "select * from template";
$result = mysqli_query($conn,$sql);
$si =1;
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){

?>

<tr style="border:none">
						<td><?php echo $si++; ?></td>
						<td><img src="<?php echo $row['img']; ?>" alt="..." class="rounded-0" height="60" width="80"></td>
						<td><?php echo $row['name']; ?></td>
						<td><div class="btn text-white btn-outline-dark trash" id="<?php echo $row['id']; ?>"><i class="fas fa-trash-alt"></i></div></td>
					</tr>
					<?php


}
}

 ?>


					


					</tbody>
				</table>
		</div>
	</div>
</div>



</div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
<form enctype="multipart/form-data" id="template-form" method="POST" action="template-action.php">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
    <label for="exampleFormControlFile1">Template</label>
    <input type="file" class="form-control-file" name="template_img" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
  	<label for="tname">Template name</label>
  	<input type="text" name="t_name" id="tname" class="form-control">
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Template <span style="color:red">*file should be in php format*</span></label>
    <input type="file" class="form-control-file" name="template" id="exampleFormControlFile1">
  </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id="template_add" value="add">
      </div>
</form>


    </div>
  </div>
</div>
<script>
	
	$(document).ready(function() {

$('.trash').click(function(e){
	e.preventDefault();
	console.log("working");
	let t_id = $(this).attr('id');
	let conf = confirm("do you want to delete this item");
if (conf){
	$.ajax({
		url: 'drop.php',
		type: 'POST',
		default: 'json',
		data: {
			'action':'template-drop',
			'id':t_id
		},
		success:function(res){
			alert('template deleted successfully');
			location.reload();
		}
	})

}

	

})

	

		
	});
</script>


 <?php

include 'footer.php';
  ?>