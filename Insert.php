<?php
$dbhost = 'localhost:3306';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('连接错误: ' . mysqli_error($conn));
}
echo '连接成功<br />';
$sql = 'use test;';
$retval = mysqli_query($conn,$sql );
$sql = 'INSERT INTO `books` (names,author,date,score) VALUES ("dreem","archieve","2018-12-1",9);';
$retval = mysqli_query($conn,$sql );
if(! $retval )
{
    die('插入数据库失败: ' . mysqli_error($conn));
}
echo "数据库 test 插入成功\n";
mysqli_close($conn);
?>