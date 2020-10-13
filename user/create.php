<?php

include 'header.php';

 ?>



<div class="container">
    <div class="row">
        <div class="col-10 mx-auto">
  <div class="card m-5" style="background-color: transparent !important;border:none;">
    <div class="card-body">
  <h1 style="color:white" class="font-weight-bold text-capitalize">create your resume</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">

<div class="container">
    <div class="card" style="background-color: transparent !important;border:none;">
                    <div class="card-body">
                        <form id="usercreate">
                            <div class="row">

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="fname" id="fname" class="form-control" placeholder="first name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="lname" id="lname" class="form-control" placeholder="last name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control mt-1" rows="6" placeholder="Address" name="address" id="address" required></textarea>

                            </div>
                            <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    
                                        <input type="text" name="town" class="form-control" placeholder="town" id="town" required>
                                    </div>
                               
                                <div class="col-md-6 col-sm-6">
                                    
                                        <input type="text" name="city" class="form-control" placeholder="city" id="city" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="dob" placeholder="Date of birth" id="dob" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pin" placeholder="pincode..." id="pin" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email..."  id="email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone..." id="phone" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="faname" class="form-control" placeholder="Fathers name" id="faname" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="mname" class="form-control" placeholder="Mothers name" id="moname" required>
                                    </div>
                                </div>
                            </div>
                              <fieldset class="form-group row">
      <legend class="col-form-legend col-sm-2 text-light col-2">fresher</legend>
      <div class="col-sm-10 col-10">
        <div class="radio">
            <div class="row">
                <div class="col-6">
                    <label class="radio-inline text-light"><input type="radio" name="fresher" value="true">Yes</label>
                </div>
                <div class="col-6">
                     <label class="radio-inline text-light"><input type="radio" name="fresher" value="false">No</label>
                </div>
            </div>
  
 
  
</div>
        
    </fieldset>
                            <input type="hidden" name="var" value="insert">
                            <input type="hidden" name="rid" class="rid" id="rid">
                            <button type="submit" class="btn btn-block btn-success" id="save-user">save details</button>
                        </form>
                    </div>
                </div>
                </div>




  </div>






  <div class="tab">



    <div class="row">
        <div class="col-md-6 mt-2">




            <div class="card">
                <div class="card-header text-capitalize text-center">
                    education details
                </div>
                <div class="card-body">


                    <form id="edu-form">
                        <div class="row">

                            <div class="col-md-3">
                                <label for="from">from</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="date" name="from" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <label for="from">to</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="date" name="to" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <label for="course">course</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="course" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <label for="from">college</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="college" id="" class="form-control">
                                    <input type="hidden" name="insert" value="edu-form">
                                    <input type="hidden" name="rid" class="rid" id="rid">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-block btn-outline-success" id="btn-edu">Add</button>

                    </form>


                </div>
            </div>


        </div>





        <div class="col-md-6">
            <div id="edu-table"></div>
        </div>
    </div>


  </div>






  <div class="tab">


    <div class="row">

        <div class="col-md-6">

            <div class="card mt-2">
                <div class="card-header text-capitalize text-center">
                    work experience details
                </div>
                <div class="card-body">
                    <form id="work-form">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">from date</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="date" name="from" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">to date</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="date" name="to" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">position</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="post" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">company or industry name</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="company" id="" class="form-control">
                                    <input type="hidden" name="insert" value="work-form">
                                    <input type="hidden" name="rid" class="rid" id="rid">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-success" id="btn-work">add</button>
                    </form>
                </div>
            </div>



        </div>



        <div class="col-md-6">
            <div id="work-table"></div>
        </div>

</div>


  </div>








  <div class="tab">




   <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center text-capitalize">
                        skills
                    </div>  

                    <div class="card-body">
                        <form id="skill-form">
                        <div class="row">
                             
                            <div class="col-md-3">
                                <label for="skill">skill</label>
                            </div>
                            <div class="col-md-9">
                               
                                <div class="form-group">
                                    <input type="text" name="skill" id="" class="form-control">
                                </div>
                            </div>
                            <input type="hidden" name="insert"  value="skill">
                            <input type="hidden" name="rid" class="rid" id="rid">
                            <button class="btn btn-block btn-outline-success" id="btn-skill">Add</button>
                              
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="skill-table"></div>

            </div>
            <div class="col-md-6">
                 <div class="card mt-5">
                    <div class="card-header text-center text-capitalize">
                        hobbies
                    </div>  

                    <div class="card-body">
                        <form id="hobbie-form">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">hobbie</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="hobbie" id="" class="form-control">
                                </div>
                            </div>
                            <input type="hidden" name="insert"  value="hobbie">
                            <input type="hidden" name="rid" class="rid" id="rid">
                             <button class="btn btn-block btn-outline-success" id="btn-hobbie">Add</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="hobbie-table"></div>
                
            </div>

</div>


  </div>






  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</div>
</div>
</div>

  </div>
<script src="assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>
  

     
$(document).ready(function(){


let item = sessionStorage.getItem("getid");

if(item!=null){
    // alert(item);
    $('.rid').val(item);
    $.ajax({
        url: 'usercreate.php',
        type: 'POST',
        dataType: 'json',
        data: {'action': 'fetch-user',
               'fetch-user-id':item,
    },
    success:function(res){
        console.log(res);
        $('#fname').val(res.fname);
        $('#lname').val(res.lname);
        $('#address').val(res.address);
        $('#town').val(res.town);
        $('#city').val(res.city);
        $('#dob').val(res.dob);
        $('#pin').val(res.pin);
        $('#email').val(res.email);
        $('#phone').val(res.phone);
        $('#faname').val(res.father_name);
        $('#moname').val(res.mother_name);
       
        

    }
    })
    
} else{
sessionStorage.setItem("getid","");

}

    function getSkill(){
        console.log("test")
        $.ajax({
            url: 'getSkill.php',
            type: 'POST',
            dataType: 'html',
            data: {
                    'rid':item,
                    },
            success:function(res){
                $('#skill-table').html(res);
            },
        });
    }
        function getHobbie(){
        console.log("test")
        $.ajax({
            url: 'getHobbie.php',
            type: 'POST',
            dataType: 'html',
            data: {
                        'rid':item,
                    },
            success:function(res){
                $('#hobbie-table').html(res);
            },
        });
    }




    getSkill();
    getHobbie();

///posting data we have 2 forms

$('#btn-skill').click(function(e){
    e.preventDefault();

    $.ajax({
        url: 'skill-action.php',
        type: 'POST',
        dataType: 'json',
        data: $('#skill-form').serialize(),
        success:function(res){
           if(res.success){
            alert(res.msg);
           getSkill();
           $('#skill-form').trigger('reset');
           }

        },
    })
    
})

$('#btn-hobbie').click(function(e){
    e.preventDefault();

    $.ajax({
        url: 'skill-action.php',
        type: 'POST',
        dataType: 'json',
        data: $('#hobbie-form').serialize(),
        success:function(res){
            if(res.success){
                alert(res.msg);
                getHobbie();
                $('#hobbie-form').trigger('reset');
            }

        },
    })
    
})








function workData(){
    $.ajax({
        url: 'getWork.php',
        type: 'POST',
        dataType: 'html',
        data: {
                        'rid':item,
                    },
        success:function(res){
            $('#work-table').html(res);
        }
    })
    }


    workData();





        $('#btn-work').click(function(e) {
            event.preventDefault();
            $.ajax({
                url: 'edu-action.php',
                type: 'POST',
                dataType: 'Json',
                data: $('#work-form').serialize(),
                success: function(res) {
                    if(res.success){
                        alert(res.msg);
                        workData();
                    }else if(res.error){
                        alert(res.msg);
                    }

                }
            })



        })





 function getEdu() {

                $.ajax({
                    url: 'getEdu.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'rid':item,
                    },
                    success: function(res) {
                        $('#edu-table').html(res);
                    }
                });



            }

            getEdu();

            $('#btn-edu').click(function(e) {
                event.preventDefault();
                $.ajax({
                    url: 'edu-action.php',
                    type: 'POST',
                    dataType: 'Json',
                    data:$('#edu-form').serialize(),
                
                    success: function(res) {
                        if(res.success){
                            alert(res.msg);
                            getEdu();
                        }else if (res.error){
                            alert(res.msg);
                        }

                    }
                })
            })



 $('#save-user').click(function(e) {
            e.preventDefault();
            console.log("working")
            $.ajax({
                type: "POST",
                url: "usercreate.php",
                data: $('#usercreate').serialize(),
                dataType: "json",
                success: function(res) {
                    if(res.status){
                        alert(res.msg);
                        sessionStorage.setItem("getid", res.get_id);
                        console.log(res.get_id)
                        
                        var x = sessionStorage.getItem("getid");
                        $('.rid').val(x);
                        item = x;
                        console.log(x);
                        alert(x);
                        if(x!=''){
                            $('#save-user').attr('disabled', true)
                        }

                    } else {
                        alert(res.msg)

                    }

                }
            });
        })

     


})






</script>

<?php

include 'footer.php';

?>