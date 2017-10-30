<?php


$id=$_POST["id"];
$biaoti=$_POST["biaoti"];
$xingming=$_POST["xingming"];
$liuyan=$_POST["liuyan"];

$sql="use liuyanban;INSERT into massage(id,biaoti,xingming,liuyan,lastdate)VALUES ('','$biaodan','$xingming','$liuyan','')";
mysqli_query($conn,$sql);

mysqli_close($conn);
header("location:message.php");
exit();

?>
