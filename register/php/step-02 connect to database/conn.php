//-------------------------------step1

//连接数据库
//Guest为指定的数据库
//
//
//
//方法一 面向过程mysqli_connect
/*
 * 1.不指定数据库情况下,先进行连接服务器
 * $con = mysqli_connect("localhost","Y","2401");
 * 2.再指定数据库
 * mysqli_select_db($conn,"Guest");
 */
 //
$conn = mysql_connect("localhost","Y","2401","Guset");
if(mysqli_connect_errno())
{
    echo mysqli_connect_error();
    die;
}
echo "sucsess";
/*高版本检测连接的方法
if(!$conn)
{
   die("connection failed" . mysqli_connect_error());
}
*/
//
//
//
//
//方法二 面向对象new mysqli
/*
 * $conn = new mysqli ("localhost","Y","2401");
 * conn -> mysqli_select_db('Guest');
 * if($conn -> connect_error)
 * {
 * die("connection failed" . $conn -> connect_error);
 * }
 *
 */
//设置服务器端的字符集
//设置客户端的字符集
$conn -> query("set character set 'utf8'");
$conn -> query("set names 'utf8'");