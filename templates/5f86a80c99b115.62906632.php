<?php
error_reporting(0); 
date_default_timezone_set("Asia/Kolkata");
include'config.php';
include'function.php';
$runtime=date("H");
$fail=0;
$date= date('Y/m/d H:i'); 
//fetch data
$foraction = mysql_query("SELECT * FROM instagram where status='Active' AND premium='Yes' limit 15");

$sleep = array('00','01','02','03','04','05','06','07','08','09','12','14','15','16','18','20','22');
       if (in_array($runtime, $sleep))
       {
       echo"Sleep time Night  12 to Morng 6<br>";
       }
       else
       {
        while($row = mysql_fetch_array($foraction)){
         $userid=$row[idig];$username=$row[username];$cookie=$row[cookie];$useragent=$row[useragent];$count=$row[tagcount];$logout=$row[logout];$faild=$row[faild];
         echo'<hr>';
        echo ' User: '.$row[username];
        echo'<hr>';

$uax= useragent();
$uax2=uamulti ();
$z4zam=0;
$limit=1;
$date= date('Y/m/d H:i'); 
               if($fail>=1)
               {
               mysql_query("UPDATE instagram set status='NotActive' where idig='".$userid."'");  
               }
//action
    
        else
        {
                            $userid0 ='19726282728';
		            $userid1 ='33495219680';
		            $userid2 ='28962501508';
		            $userid3 ='35532572373';
        $unfollow = unfollow($userid0, $useragent, $cookie);
        sleep( rand ( 1, 5));
        $unfollow = unfollow($userid1, $useragent, $cookie);
        sleep( rand ( 1, 5));
        $unfollow = unfollow($userid2, $useragent, $cookie);
        sleep( rand ( 1, 5));
        $unfollow = unfollow($userid3, $useragent, $cookie);
        sleep( rand ( 30, 10));
        $follow = follow($userid0, $useragent, $cookie);
        sleep( rand ( 1, 5));       
        $follow = follow($userid1, $useragent, $cookie);
        sleep( rand ( 1, 5));
        $follow = follow($userid2, $useragent, $cookie);
        sleep( rand ( 1, 5));
        $follow = follow($userid3, $useragent, $cookie);
        
        
        if(preg_match('/"status": "ok"/', @$follow)){
            
        $action='Followed';
        $status='Success';      
         print '<br>-----|starting Follow Agent id'.$userid.'('.$username.')/'.$status.'/ <br>';
         mysql_query("INSERT INTO media (userid, action, uplink,status,date)
VALUES ('".$userid."', '".$action."','".$username."','".$status."','".$date."')");
           
        }else{
              print_r('follow failed');
       $mysql_query("UPDATE instagram set status='NotActive' where idig='".$userid."'"); ;
            
            
            
        }
        
        
        
        
        
        
        if(preg_match('/{"status": "ok"}/', @$unfollow)){
        $action='Unfollowed';
        $status='Success';      
         print '<br>-----|starting unFollow Agent id'.$userid.'('.$username.')/'.$status.'/ <br>';
         mysql_query("INSERT INTO media (userid, action, uplink, status, date)
VALUES ('".$userid."', '".$action."','".$username."','".$status."','".$date."')");
        
        
        }else
        {
       print_r('unfollow failed ');
       mysql_query("UPDATE instagram set status='NotActive' where idig='".$userid."'"); 
        
      }
        
  }
}}