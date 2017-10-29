!doctype html>
<html>
<head>
    <?php
    include ("conn.php");
    ?>
    <meta charset="UTF-8">
    <div style="background:url('http://p2.so.qhimgs1.com/t01ed86f1ff79344ce2.jpg') " >
        </head>
<body>

<div style="text-align: center;margin: 20px;color: white">
    <h1>霍格沃茨留下了你的足迹！</h1>
    <?php
    $sql="select * from massage ORDER BY id DESC ";
    $result=mysqli_query($sql);
    while($row=mysqli_fetch_array($result)){


        echo

        标题：$row['biaoti'].<br>;

    姓名：$row['xingming'].<br>;

    咒语：$row['liuyan'].<br>;

        时间：$row['lastdate']；

 }
    ?>
</div>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br>

</body>
</html>

