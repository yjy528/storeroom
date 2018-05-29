<?php
   header("content-type:text/html;charset=utf-8");
   $GetUsername=$_POST['user'];
   $GetPaassWWord=$_POST['password'];
   $MyUser='yejinyan';
   $MyPassWord='123456';
   

    if($GetUsername==$MyUser&&$GetPaassWWord==$MyPassWord){
     	echo '登录成功';
    }else{
        echo '用户名或密码错误';
    }
?>