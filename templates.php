<?php

include 'common/header.php';
require 'config.php';

?>



<section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Featured Templates</h2>
                              </div>
                         </div>





                         <?php

$sql = 'select * from template';

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($r = mysqli_fetch_assoc($result)) {
        ?>
           <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="<?php echo $r['img']; ?>" class="img-responsive" alt="" style="object-fit: cover;height:250px;width: 100%;">
                                        </div>
                                        <div class="courses-date">
                                        
                                             <span title="Type"><i class="fa fa-file"> &nbsp;</i><?php echo $r['name']; ?></span>
                                        </div>
                                   </div>

                                   

                                   <div class="courses-info">
                                        <a href="signup.php" class="section-btn btn btn-primary btn-block">Create your resume</a>
                                   </div>
                              </div>
                         </div>

<?php
    }
}

                          ?>

              
                        
                        

                    </div>
               </div>
          </section>

<?php
include 'common/footer.php';

?>