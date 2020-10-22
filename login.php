<?php

include 'common/header.php';
?>

<section id="contact">
<div class="container">
     <div class="row">

          

          <div class="col-md-6 col-sm-12">
               <div class="contact-image">
                    <img src="images/login.svg" class="img-responsive" alt="Smiling Two Girls">
               </div>
          </div>



          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-body">
               <form id="contact-form" role="form" action="auth.php" method="post">
                    <div class="section-title">
                         <h2>Login <small></small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                         <input type="text" class="form-control" placeholder="Enter your username or email" name="uname" required>
          
                         <input type="password" class="form-control" placeholder="Enter your password " name="upass" required>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input type="hidden" name="action" value="login">
                         <input type="submit" class="form-control"  value="Login">
                    </div>

               </form>
               </div>
              </div>
          </div>

     </div>
</div>
</section>  

<?php

include 'common/footer.php';

?>