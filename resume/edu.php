<?php

include 'header.php';
?>
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
   
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
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-block btn-outline-success" id="add">Add</button>

                    </form>


                </div>
            </div>


        </div>





        <div class="col-md-6">
            <div id="edu-table"></div>
        </div>
    </div>

</div>

 </div>

    <script>

        $(document).ready(function() {

            function getEdu() {

                $.ajax({
                    url: 'getEdu.php',
                    type: 'GET',
                    dataType: 'html',
                    success: function(res) {
                        $('#edu-table').html(res);
                    }
                });



            }

            getEdu();

            $('#add').click(function(e) {
                event.preventDefault();
                $.ajax({
                    url: 'edu-action.php',
                    type: 'POST',
                    dataType: 'Json',
                    data: $('#edu-form').serialize(),
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
        })//closing ready function
    </script>
    <?php
    include 'footer.php';
    ?>