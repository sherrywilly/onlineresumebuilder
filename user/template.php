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
$sql = 'select * from template';

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>


		<div class="col-md-4">
<div class="card">
	<div class="card-body">
			<img src="<?php echo $row['img']; ?>" alt="..." class="img-fluid img-thumbnail" style="object-fit:cover;width: 100%;height: 200px">
			<div class="text-right mt-1">

            <form action="<?php echo $row['path']; ?>" method="get">
            	<!-- <form action="../templates/test2.php" method="get"> -->
            	<input type="hidden" name="download" id="reid" class="resumeid">
           <button type="submit" class="btn btn-outline-success"> <i class="fas fa-download">download</i></button>

            </form>

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
	let x =sessionStorage.getItem("getid")
	
if(x==""||x==null){

window.location = "./";

	}else{
document.querySelectorAll(".resumeid").value = "test";
let y = document.getElementsByClassName("resumeid");
console.log(y.length);

// y.value = "hjsdfjbvsnd";


for(i=0;i<y.length;i++){
	console.log(y[i]);
	y[i].value = x;
	

}




	}






</script>

 <?php
 include 'footer.php';
 ?>