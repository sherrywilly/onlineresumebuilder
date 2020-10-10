<?php

include 'header.php';
?>

<section id="create-resume">

    <div class="container">
        <div class="row">

            <div class="col-6 col-md-6 col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 id="h2-create">create your resume</h2>
                        <form id="usercreate">
                            <div class="row">

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="fname" class="form-control" placeholder="first name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="lname" class="form-control" placeholder="last name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control mt-1" rows="6" placeholder="Address" name="address" required></textarea>

                            </div>
                            <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    
                                        <input type="text" name="town" class="form-control" placeholder="town" required>
                                    </div>
                               
                                <div class="col-md-6 col-sm-6">
                                    
                                        <input type="text" name="city" class="form-control" placeholder="city" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="dob" placeholder="Date of birth" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pin" placeholder="pincode..." required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email..." required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone..." required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="faname" class="form-control" placeholder="Fathers name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="mname" class="form-control" placeholder="Mothers name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="mt-4">
                                    <label for="freasher" class="label">Fresher</label>


                                    <label for="freasher" class="label">yes</label>
                                    <input type="radio" name="fresher" id="freasher" value="true" required>

                                    <label for="freasher" class="label">no</label>
                                    <input type="radio" name="fresher" id="freasher" value="false" required>
                                </span>
                            </div>
                            <input type="hidden" name="var" value="insert">
                            <button type="submit" class="btn btn-block btn-success" id="btn">Next</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<script>
    $(document).ready(function() {
        
        $('#btn').click(function(e) {
            e.preventDefault();
            console.log("working")
            $.ajax({
                type: "POST",
                url: "usercreate.php",
                data: $('#usercreate').serialize(),
                dataType: "json",
                success: function(res) {

                }
            });
        })

    })
</script>


<?php
include 'footer.php';
?>