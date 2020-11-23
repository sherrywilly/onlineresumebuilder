
<?php

include 'common/header.php';
?>

<section id="contact">
<div class="container">
     <div class="row">

          

          <div class="col-md-6 col-sm-12">
               <div class="contact-image">
                    <img src="images/signup.png" class="img-responsive" alt="Smiling Two Girls">
               </div>
          </div>



          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-body">
               <form id="contact-form">
                    <div class="section-title">
                         <h2>Sign up <small></small></h2>
                    </div>

                    <div class="col-md-12 col-sm-12">
                         <input type="text" class="form-control" placeholder="first name" name="fname" id="fname" required>
                         <input type="text" class="form-control" placeholder="last name" name="lname" id="lname" required>
                         <input type="email" class="form-control" placeholder="your email" name="email" id="emailuser" required>
                         <input type="number" class="form-control" placeholder="phone no" name="phone" id="phone" required>
                         <input type="password" class="form-control" placeholder="password" name="pass1" id="p1" required>
          
                         <input type="password" class="form-control" placeholder="confirm your password " name="pass2" id="p2" required>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <input type="hidden" name="action" value="signUp">
                         <input type="submit" class="form-control"  value="signup" id="signUpbtn">
                    </div>

               </form>
               </div>
              </div>
          </div>

     </div>
</div>
</section> 

<script>
  $(document).ready(function() {

    $('#signUpbtn').click(function(e){

e.preventDefault();






     var name = $('#fname').val();
     var email = $('#emailuser').val();
     var phone =$('#phone').val();
     var p1 = $('#p1').val();
     var p2 = $('#p2').val();



      if(name =="" || email =="" || phone=="" || p1 =="" || p2 ==""){
        alert("please fill up all the fields");
        return false;
      }
      
console.log(phone.length);
if(phone.length!=10){
  alert("phone  number should be 10 numbers");
  return false;
}





   if(p1!=p2){
    alert('password did not match');
    return false;
   }
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
      alert('invalid mail');
          return false;
        }
      
    


$.ajax({
  url: 'auth.php',
  type:'POST',
  dataType: 'json',
  data: $('#contact-form').serialize(),
  success:function(res){
    if(res.status){
      alert(res.msg);
    }else{
      alert(res.msg);
    }
  }
})

});

      
    
  });
</script>



<?php

include 'common/footer.php';

?>