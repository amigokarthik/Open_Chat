<?php

date_default_timezone_set("Asia/Calcutta"); 
$con=mysqli_connect("mysql.hostinger.in","u418114939_dracu","chathost","u418114939_chat");
		
     $msg = $_GET["msg"];
     $dt = date("Y-m-d H:i:s");
     $user = $_GET["name"];

     $sql="INSERT INTO chat(id,username,chatdate,msg) " .
          "values(" . quote("") . "," . quote($user) . "," . quote($dt) . "," . quote($msg) . ");";

          echo $sql;

     $result = mysqli_query($con,$sql);
     if(!$result)
     {
        throw new Exception('Query failed: ' . mysqli_error());
        exit();
     }

function quote($strText)
{
    $Mstr = addslashes($strText);
    return "'" . $Mstr . "'";
}


function isdate($d)
{
   $ret = true;
   try
   {
       $x = date("d",$d);
   }
   catch (Exception $e)
   {
       $ret = false;
   }
   echo $x;
   return $ret;
}

?>





