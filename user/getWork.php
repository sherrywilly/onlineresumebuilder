<?php

require '../config.php';

 ?>

<?php

$id = $_POST['rid'];
 ?>


 <div class="card mt-2">
 	<div class="card-header text-capitalize text-center"> work experince details</div>
 	<div class="card">
 		<div class="table-responsive">
 			<table class="table">
 				<thead>
 					<tr>
 						<th>from</th>
 						<th>to</th>
 						<th>designation</th>
 						<th>company</th>
 						<th>action</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php
                    $sql = "select * from work where rid='$id'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($r = mysqli_fetch_assoc($result)) {
                            ?>
 							<tr>

 							<td> <?php echo $r['from_date']; ?> </td>
 							<td><?php echo $r['to_date']; ?></td>
 							<td><?php echo $r['post']; ?></td>
							 <td><?php echo $r['company']; ?></td>
							 <td><button class="btn btn-sm btn-outline-danger work-droper" id="<?php echo $r['id']; ?>"> <i class="fa fa-trash" aria-hidden="true"></i></button></td>
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