register
===================================  
注册


### 注册模块
* html文件
* css文件——层叠样式表改变样式
* JS文件——检测输入是否为空、有无按规定书写等
* PHP文件——获取并传输用户信息
* ……

### html文件 
……
<form name="LoginForm" method="post" action="login.php" onSubmit="return InputCheck(this)”>\<br /\>  
	<p>\<br /\> 
		<label for="username" class="label">用户名:</label>\<br /\> 
		<input id="username" name="username" type="text" class="input" />\<br /\> 
		<span>(必填，3-15字符长度，支持汉字、字母、数字及_)</span>\<br /\> 
	<p/>\<br /\> 
	<p>\<br /\> 
		……\<br /\> 
	<p/>\<br /\> 
</form>\<br /\> 
……

### css文件 
<style type="text/css">\<br /\> 
       html<br /> 
	{<br /> 
		font-size:12px;<br /> 
	}<br /> 
       form<br /> 
	{<br /> 
		width:520px;<br />  
		margin: 0 auto;<br /> 
	}<br /> 
       label<br /> 
	{<br /> 
		float:left;<br />  
		width:70px;<br /> 
		margin-left:10px;<br /> 
	}<br /> 
       ……
</style>

### js文件 
……
function InputCheck(RegForm)
{
  if (RegForm.username.value == "")
  {
    alert("用户名不可为空!");
    RegForm.username.focus();
    return (false);
  }
  ……
}
……

### php文件 
$password = MD5($password);
$regdate = time();
$sql = "INSERT INTO user(username,password,email,regdate)VALUES('$username','$password','$email',
$regdate)";
if(mysql_query($sql,$conn)){
    exit('用户注册成功！点击此处 <a href="login.html">登录</a>');
} 
else {
    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}