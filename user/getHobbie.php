<?php 


require '../config.php';

 ?>




 <div class="card mt-2">
 	<div class="card">
 		<div class="table-responsive">
 			<table class="table text-center">
 				<thead>
 					<tr>
 						<th>Hobbies</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php 
 					$sql = "select * from hobbies";
 					$result = mysqli_query($conn,$sql);
 					if(mysqli_num_rows($result)>0){
 						while($r=mysqli_fetch_assoc($result)){


?>
 							<tr>

 							<td> <?php echo $r['hobbie']; ?> </td>
 						
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