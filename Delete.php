<?php
define('__ROOT__', dirname(__FILE__)); 
require_once(__ROOT__.'/Connection.php'); 
$sql = 'use test;';
$retval = mysqli_query($conn,$sql );
$sql = 'DELETE FROM `books` where id=9;';
$retval = mysqli_query($conn,$sql );
if(! $retval )
{
    die('删除数据库失败: ' . mysqli_error($conn));
}
echo "数据库 test 删除成功\n";
mysqli_close($conn);
?>