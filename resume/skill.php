<?php 
include 'header.php';
 ?>
    <div class="container mt-5">
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



<script>
 
</script>

    <?php

    include 'footer.php';
    ?>



    <script>
        
$(document).ready(function(){




    function getSkill(){
        console.log("test")
        $.ajax({
            url: 'getSkill.php',
            type: 'GET',
            dataType: 'html',
            success:function(res){
                $('#skill-table').html(res);
            },
        });
    }
        function getHobbie(){
        console.log("test")
        $.ajax({
            url: 'getHobbie.php',
            type: 'GET',
            dataType: 'html',
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



})




    </script>