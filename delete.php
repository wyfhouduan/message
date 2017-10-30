<?php
include ("conn.php");
$id=$_GET['id'];
$query="delete from massage WHERE id=".$id;
mysqli_query($query);
?>

<?php
$url="message.php";
echo "<script>";
echo "window.location.href='$url' ";
echo "</script>";
?>
