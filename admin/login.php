<?php
$expire=time()+60*60*24*30;
setcookie("user",  $expire);
?>
<?php
session_start();
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<style type="text/css">
<!--
body{
	background-color:lightYellow;
	color:#000000;
	font-size:24px;
	font-weight:bold;
	margin-right: 1cm;
	margin-top: 1cm
	
}
.style1 {
	font-family: "Academy Engraved LET";
	font-size:36px;	
}
-->
</style>
<body>
    <form name="loginform" action="login_exec.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <tr>
    <td width="116"><div align="right">Username</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /></td>
  </tr>
</table>
</form>
</body>
</html>