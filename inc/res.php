<?php

$res =0;
if(!isset($_GET['r']))
{
echo "<script language=\"JavaScript\">
<!--
document.location=\"$PHP_SELF?r=1&width=\"+screen.width+\"&Height=\"+screen.height;
//-->
</script>";
}
else {
// Code to be displayed if resolutoin is detected
     if(isset($_GET['width']) && isset($_GET['Height'])) {
        $res= $_GET['width'];
     }
     else {
               // Resolution not detected
     }
}
?>