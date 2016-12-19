<?php

	date_default_timezone_set("Asia/Calcutta");

		$con=mysqli_connect("mysql.hostinger.in","u418114939_dracu","chathost","u418114939_chat");
      $sql = "SELECT *, date_format(chatdate,'%d-%m-%Y') as cdt from chat order by ID desc limit 200";
     $sql = "SELECT * FROM (" . $sql . ") as ch order by ID";
     $result = mysqli_query($con,$sql) or die('Query failed: ' . mysqli_error());
     
     // Update Row Information
     $msg="<table border='0' style='font-size: 10pt; color: blue; font-family: verdana, arial;'>";
     while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC))
     {
           $msg = $msg . "<tr><td>" . $line["cdt"] . "&nbsp;</td>" .
                "<td>" . $line["username"] . ":&nbsp;</td>" .
                "<td>" . $line["msg"] . "</td></tr>";
     }
     $msg=$msg . "</table>";
     
     echo $msg;

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





