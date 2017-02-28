//连接数据库
//Guest为指定的数据库
//
//
//
//--------------面向过程mysqli_connect
//
//-------低版本检测连接
$conn = mysql_connect("localhost","Y","2401","Guset");
if(mysqli_connect_errno())
{
    echo mysqli_connect_error();
    die;
}
echo "sucsess";
//-------高版本检测连接
//$con = mysqli_connect("localhost","Y","2401");
//mysqli_select_db($conn,"Guest");
//if(!$conn)
//{
//   die("connection failed" . mysqli_connect_error());
//}
//echo "sucsess";
//
//
//
//
//--------------面向对象new mysqli
//conn = new mysqli ("localhost","Y","2401");
//conn -> mysqli_select_db('Guest');
//if($conn -> connect_error)
//{
//die("connection failed" . $conn -> connect_error);
//}
//设置服务器端的字符集
//设置客户端的字符集
$conn -> query("set character set 'utf8'");
$conn -> query("set names 'utf8'");
