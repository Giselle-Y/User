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
	<form name="LoginForm" method="post" action="login.php" onSubmit="return InputCheck(this)”>
		<p>
			<label for="username" class="label">用户名:<label\>
			<input id="username" name="username" type="text" class="input" />
			<span>(必填，3-15字符长度，支持汉字、字母、数字及_)<span\>
		</p>
		<p>
			…… 
		</p>
	</form> 


### css文件 
	<style type="text/css">		
			html		
			{ 		
				font-size:12px;			
			}		
       			form		
			{		
				width:520px;		
				margin: 0 auto;		
			}		
 			……		
	</style>				
  

### js文件 
	function InputCheck(RegForm){			
			if (RegForm.username.value == ""){			
				alert("用户名不可为空!");			
    				RegForm.username.focus();		
    				return (false);			
  		    	}		
  			……		
			}		
  

### php文件 
	$password = MD5($password);		
	$regdate = time();		
	$sql = "INSERT INTO user(username,password,email,regdate)VALUES('$username','$password','$email',
	$regdate)";	
	if(mysql_query($sql,$conn)){		
    			exit('用户注册成功！点击此处 <a href=“#”>登录</a>');}		 		
	else {		
    			echo '抱歉！添加数据失败：’,mysql_error();’		
    			echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';}					