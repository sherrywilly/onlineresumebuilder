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
                                            <input type="date" class="form-control" name="dob" placeholder="Date of birth" id="dob" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email..." id="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone..." id="phone" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control mt-1" rows="6" placeholder="Objective" name="objective" id="objective" required></textarea>

                                        </div>



                                        <input type="hidden" name="var" value="insert" id="var">
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
                                                        <input type="month" name="from"  class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <label for="from">to</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="month" name="to"  class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <label for="course">course</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" name="course"  class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <label for="from">college</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" name="college"  class="form-control">
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
                                                        <input type="month" name="from" id="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="">to date</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="month" name="to" id="" class="form-control">
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
                                                    <label for="">company</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" name="company" id="" class="form-control">
                                                        <input type="hidden" name="insert" value="work-form">
                                                        <input type="hidden" name="rid" class="rid" id="rid">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="">description</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <textarea class="form-control mt-1" rows="6" placeholder="description ..." name="desc" id="objective" required></textarea>

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
                                                <input type="hidden" name="insert" value="skill">
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
                                                <input type="hidden" name="insert" value="hobbie">
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
</div>
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#nextBtn").prop("disabled", true);
            let item = sessionStorage.getItem("getid");

            if (item != null) {
                let con = confirm(" do you want to continoue with existing data");
                if (!con) {
                    sessionStorage.removeItem('getid');
                    $("#nextBtn").prop("disabled", true);

                } else {
                    // alert(item);
                    $('.rid').val(item);
                    $('#var').val('update');
                    $('#save-user').html('update user')
                    $.ajax({
                        url: 'usercreate.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            'action': 'fetch-user',
                            'fetch-user-id': item,
                        },
                        success: function(res) {
                            $("#nextBtn").prop("disabled", false);
                            console.log(res);
                            $('#fname').val(res.fname);
                            $('#lname').val(res.lname);
                            $('#address').val(res.address);
                            $('#dob').val(res.dob);
                            $('#email').val(res.email);
                            $('#phone').val(res.phone);
                            $('#objective').val(res.obj);




                        }
                    })
                }
            }


            function getSkill() {
                console.log("test")
                $.ajax({
                    url: 'getSkill.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'rid': item,
                    },
                    success: function(res) {
                        $('#skill-table').html(res);
                    },
                });
            }

            function getHobbie() {
                console.log("test")
                $.ajax({
                    url: 'getHobbie.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'rid': item,
                    },
                    success: function(res) {
                        $('#hobbie-table').html(res);
                    },
                });
            }




            getSkill();
            getHobbie();

            ///posting data we have 2 forms

            $('#btn-skill').click(function(e) {
                e.preventDefault();

                $.ajax({
                    url: 'skill-action.php',
                    type: 'POST',
                    dataType: 'json',
                    data: $('#skill-form').serialize(),
                    success: function(res) {
                        if (res.success) {
                            alert(res.msg);
                            getSkill();
                            $('#skill-form').trigger('reset');
                        }

                    },
                })

            })

            $('#btn-hobbie').click(function(e) {
                e.preventDefault();

                $.ajax({
                    url: 'skill-action.php',
                    type: 'POST',
                    dataType: 'json',
                    data: $('#hobbie-form').serialize(),
                    success: function(res) {
                        if (res.success) {
                            alert(res.msg);
                            getHobbie();
                            $('#hobbie-form').trigger('reset');
                        }

                    },
                })

            })








            function workData() {
                $.ajax({
                    url: 'getWork.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'rid': item,
                    },
                    success: function(res) {
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
                        if (res.success) {
                            alert(res.msg);
                            workData();
                        } else if (res.error) {
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
                        'rid': item,
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
                    data: $('#edu-form').serialize(),

                    success: function(res) {
                        if (res.success) {
                            alert(res.msg);
                            getEdu();
                        } else if (res.error) {
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
                        if (res.status) {
                            alert(res.msg);
                            sessionStorage.setItem("getid", res.get_id);
                            console.log(res.get_id)

                            var x = sessionStorage.getItem("getid");
                            $('.rid').val(x);
                            item = x;
                            console.log(x);
                            alert(x);
                            if (x != '') {
                                $('.rid').val(item);
                                $('#var').val('update');
                                $('#save-user').html('update user')
                                $("#nextBtn").prop("disabled", false);
                            }

                        } else {
                            alert(res.msg)

                        }

                    }
                });
            })




            $(document).on('click', '.edu-droper', function() {
                var eid = $(this).attr('id');
                console.log(eid);
                var c1 = confirm("do you want to delete this item");


                if (c1) {

                    $.ajax({
                        url: 'droper.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            'id': eid,
                            't_name': 'education',
                            'action': 'edu-drop'
                        },
                        success: function(res) {
                            getEdu();
                      alert(res.msg);
                     
                        },
                    })




                }
            })


            
            $(document).on('click', '.work-droper', function() {
                var eid = $(this).attr('id');
                console.log(eid);
                var c1 = confirm("do you want to delete this item");


                if (c1) {

                    $.ajax({
                        url: 'droper.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            'id': eid,
                            't_name': 'work',
                            'action': 'work-drop'
                        },
                        success: function(res) {
                            workData();
                      alert(res.msg);
                     
                        },
                    })




                }
            })
            $(document).on('click', '.skill-droper', function() {
                var eid = $(this).attr('id');
                console.log(eid);
                var c1 = confirm("do you want to delete this item");


                if (c1) {

                    $.ajax({
                        url: 'droper.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            'id': eid,
                            't_name': 'skills',
                            'action': 'skill-drop'
                        },
                        success: function(res) {
                            getSkill();
                      alert(res.msg);
                     
                        },
                    })




                }
            })

            $(document).on('click', '.hobbie-droper', function() {
                var eid = $(this).attr('id');
                console.log(eid);
                var c1 = confirm("do you want to delete this item");


                if (c1) {

                    $.ajax({
                        url: 'droper.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            'id': eid,
                            't_name': 'skills',
                            'action': 'hobbie-drop'
                        },
                        success: function(res) {
                            getHobbie();
                      alert(res.msg);
                     
                        },
                    })




                }
            })





        })

       
    </script>

    <?php

    include 'footer.php';

    ?>