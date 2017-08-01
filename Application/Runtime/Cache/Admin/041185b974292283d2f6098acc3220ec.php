<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo ($webTitle); ?>后台登录界面</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/Public/Temp/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/Public/Temp/othercss/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/Public/Temp/othercss/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Public/Temp/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/Public/Temp/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>TwoWay </b>官网后台</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">输入你的账号和密码</p>

    <form action="<?php echo U('login');?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="用户名" id="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="userpasswd" class="form-control" placeholder="密码" id="userpasswd">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" id="remember"> 记住(确定是你的私人电脑)
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="login">登录</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a href="#">我忘记密码了？</a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="/Public/Temp/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/Public/Temp/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/Public/Temp/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {

    $("#username").val("");  
    $("#userpasswd").val("");

    if(localStorage.reme!=undefined){
        if(localStorage.reme=="true"){
           // alert(localStorage.reme)
            $("#remember").attr('checked',"checked")
            $("#username").val(localStorage.name);
            $("#userpasswd").val(localStorage.psw);
        }
    }
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    $("#login").on("click",function(){
        if($("#remember").is(":checked")==true){
            localStorage.name=$("#username").val();
            localStorage.psw=$("#userpasswd").val();
            localStorage.reme=true
        }else{
            localStorage.name="";
            localStorage.psw="";
            localStorage.reme=false
        }
    })
  });
</script>
</body>
</html>