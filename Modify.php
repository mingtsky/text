<?php
$dbhost = 'localhost:3306';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('连接失败: ' . mysqli_error($conn));
}
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
mysqli_select_db( $conn, 'test' );
$sql = 'UPDATE `books` SET names="test2" where names="'.$_GET["names"].'";';
$retval = mysqli_query( $conn, $sql );

$sql = 'SELECT * FROM books;';
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '<table border="1"><tr><td>names</td><td>author</td><td>date</td><td>score</td></tr>';
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    echo "<tr><td> {$row['names']}</td> ".
         "<td>{$row['author']} </td> ".
         "<td>{$row['date']} </td> ".
         "<td>{$row['score']} </td> ".
         "</tr>";
}
echo '</table>';
mysqli_close($conn);
?>