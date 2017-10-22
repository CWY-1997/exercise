<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/common_form.css">
<script src="js/login/login.js"></script>
<title>Turbo Snail 后台</title>
<body>
    <header>
        <div class="header-line"></div>
    </header>
    <div class="content">
        <!--<img class="content-logo" src="img/form_logo.png" alt="" >-->
        <h1 class="content-title">登录</h1>
        <div class="content-form">
           <form  method="post" action="login_do.php" name="myForm" class="form" onsubmit="return validateForm()">
                <div>
                    <input class="user" type="text" name="userName" id="username" placeholder="请输入用户名" >
                </div>
                <div>
                    <input class="password" type="password" name="passWord"   id="password" placeholder="请输入密码" >
                </div>
                <div>

                	<input type="Captcha"  name="Captcha" id="Captcha" class="Captcha" placeholder="请输入验证码" />
              		<input type="button"  value="" id="code" onclick="show()"  class="code" />
              	</div>
                <div>
                    <input class="content-form-signup" type="submit"  value="登录">
                </div>

            </form>
        </dic >
        <!--<div class="content-login-description">没有账户？</div>
        <div><a class="content-login-link" href="sign_up.php">注册</a></div>-->
    </div>
</body>
</html>