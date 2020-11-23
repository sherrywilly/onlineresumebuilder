<?php

require '../config.php';
$did = $_GET['download'];

$sql = "select * from resume_build where id= '$did'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $res = mysqli_fetch_assoc($result); ?>






    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>One Page Resume</title>

        <style type="text/css">
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font: 16px Helvetica, Sans-Serif;
                line-height: 24px;
                background: url(images/noise.jpg);
            }

            .clear {
                clear: both;
            }

            #page-wrap {
                width: 800px;
                margin: 40px auto 60px;
            }

            #pic {
                float: right;
                margin: -30px 0 0 0;
            }

            h1 {
                margin: 0 0 16px 0;
                padding: 0 0 16px 0;
                font-size: 42px;
                font-weight: bold;
                letter-spacing: -2px;
                border-bottom: 1px solid #999;
            }

            h2 {
                font-size: 20px;
                margin: 0 0 6px 0;
                position: relative;
            }

            h2 span {
                position: absolute;
                bottom: 0;
                right: 0;
                font-style: italic;
                font-family: Georgia, Serif;
                font-size: 16px;
                color: #999;
                font-weight: normal;
            }

            p {
                margin: 0 0 16px 0;
            }

            a {
                color: #999;
                text-decoration: none;
                border-bottom: 1px dotted #999;
            }

            a:hover {
                border-bottom-style: solid;
                color: black;
            }

            ul {
                margin: 0 0 32px 17px;
            }

            #objective {
                width: 500px;
                float: left;
            }

            #objective p {
                font-family: Georgia, Serif;
                font-style: italic;
                color: #666;
            }

            dt {
                font-style: italic;
                font-weight: bold;
                font-size: 18px;
                text-align: right;
                padding: 0 26px 0 0;
                width: 150px;
                float: left;
                height: 100px;
                border-right: 1px solid #999;
            }

            dd {
                width: 600px;
                float: right;
            }

            dd.clear {
                float: none;
                margin: 0;
                height: 15px;
            }
        </style>
    </head>

    <body>

        <div id="page-wrap">

            <img src="images/cthulu.png" alt="Photo of Cthulu" id="pic" />

            <div id="contact-info" class="vcard">

                <!-- Microformats! -->

                <h1 class="fn"><?php echo $res['fname'].' '.$res['lname']; ?></h1>

                <p>
                    Cell: <span class="tel"><?php echo $res['phone']; ?></span><br />
                    Email: <a class="email" href="<?php echo $res['email']; ?>"><?php echo $res['email']; ?></a>
                </p>
            </div>

            <div id="objective">
                <p>
                    <?php echo $res['obj']; ?>
                </p>
            </div>

            <div class="clear"></div>

            <dl>

                <dd class="clear"></dd>
                <?php

                $sqlx = "select * from education where rid ='$did'";

    $result1 = mysqli_query($conn, $sqlx);
    if (mysqli_num_rows($result1) > 0) {
        ?>

                    <dt>Education</dt>

                    <dd>

                        <?php
                        while ($res1 = mysqli_fetch_assoc($result1)) {
                            ?>


                            <p><strong> <?php echo $res1['course']; ?> </strong>( <?php echo $res1['college']; ?> )
                                <h2><span><?php echo $res1['from_date'].'-'.$res1['to_date']; ?> </span></h2>
                            </p>




                        <?php
                        } ?>


                    </dd>
                <?php
    } ?>



                <dd class="clear"></dd>


                <?php

                $sqly = "select * from skills where rid = '$did'";

    $result2 = mysqli_query($conn, $sqly);

    if (mysqli_num_rows($result) > 0) {
        ?>

                    <dt>Skills</dt>

                    <dd>
                        <ul>

                            <?php
                            while ($res2 = mysqli_fetch_assoc($result2)) {
                                ?>


                                <li><?php echo $res2['skill']; ?></li>




                            <?php
                            } ?>
                        </ul>
                    </dd>

                <?php
    } ?>





                <dd class="clear"></dd>


                <?php

                $sqlz = "select * from work where rid = '$did'";

    $result3 = mysqli_query($conn, $sqlz);

    if (mysqli_num_rows($result3) > 0) {
        ?>

                    <dt>Experience</dt>

                    <dd>
                        <ul>

                            <?php
                            while ($res3 = mysqli_fetch_assoc($result3)) {
                                ?>


                                <p><strong> <?php echo $res3['post']; ?> </strong> in <?php echo $res3['company']; ?>
                                    <h2><span><?php echo $res3['from_date'].'-'.$res3['to_date']; ?> </span></h2>
                                </p>




                            <?php
                            } ?>
                        </ul>
                    </dd>

                <?php
    } ?>

                <dd class="clear"></dd>


                <?php

                $sqlu = "select * from hobbies where rid = '$did'";

    $result4 = mysqli_query($conn, $sqlu);

    if (mysqli_num_rows($result4) > 0) {
        ?>

                    <dt>Hobbies</dt>

                    <dd>
                        <ul>

                            <?php
                            while ($res4 = mysqli_fetch_assoc($result4)) {
                                ?>


                                <li><?php echo $res4['hobbie']; ?></li>




                            <?php
                            } ?>
                        </ul>
                    </dd>

                <?php
    } ?>

                <dd class="clear"></dd>

                <dt>References</dt>
                <dd>Available on request</dd>

                <dd class="clear"></dd>
            </dl>

            <div class="clear"></div>

        </div>
        <script>
            window.print();
            document.head
        </script>

    </body>

    </html>
















<?php
} else {
        // header("location:./");
    }

?>