<?php

include 'header.php';

?>
<div class="container">
        <div class="card mt-5">
        <div class="card-header">
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
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-success" id="add">insert</button>
                    </form>
                </div>
            </div>



        </div>



        <div class="col-md-6">
            <div id="work-table"></div>
        </div>

</div>
</div>
    </div>
</div>

<script>
    $(document).ready(function() {
function workData(){
    $.ajax({
        url: 'getWork.php',
        type: 'GET',
        dataType: 'html',
        success:function(res){
            $('#work-table').html(res);
        }
    })
    }


    workData();





        $('#add').click(function(e) {
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


    });
</script>
<?php

include 'footer.php';

?>