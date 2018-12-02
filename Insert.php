<?php
define('__ROOT__', dirname(__FILE__)); 
require_once(__ROOT__.'/Connection.php'); 
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