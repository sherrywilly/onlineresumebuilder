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
 						<th>skills</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php
                    $sql = "select * from skills where rid ='$id'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($r = mysqli_fetch_assoc($result)) {
                            ?>
 							<tr>

 							<td> <?php echo $r['skill']; ?> </td>
 						
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