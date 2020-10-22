<?php

require '../config.php';

 ?>
<?php

$id = $_POST['rid'];
 ?>




 <div class="card mt-2">
 	<div class="card">
 		<div class="table-responsive">
 			<table class="table text-center">
 				<thead>
 					<tr>
						 <th>Hobbies</th>
						 <th>action</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php
                    $sql = "select * from hobbies where rid='$id'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($r = mysqli_fetch_assoc($result)) {
                            ?>
 							<tr>

							 <td> <?php echo $r['hobbie']; ?> </td>
							 <td><button class="btn btn-sm btn-outline-danger hobbie-droper" id="<?php echo $r['id']; ?>"> <i class="fa fa-trash" aria-hidden="true"></i></button></td>
 						
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