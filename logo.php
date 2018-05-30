<?php
   header("content-type:text/html;charset=utf-8");
   $GetUsername=$_POST['user'];
   $GetPaassWWord=$_POST['password'];
   // $MyUser='yejinyan';
   // $MyPassWord='123456';
   $myInfo=array(
       array(
            "name"=>"zhang",
            "pswd"=>"123333",
       ),array(
            "name"=>"lizi",
            "pswd"=>"789999",
       ),array(
            "name"=>"wangwu",
            "pswd"=>"456666",
       ),array(
            "name"=>"zhaosi",
            "pswd"=>"258888",
       ),
   );
    foreach($myInfo as $key=>$val){ 
      
      // list($val["name"])=$val["pswd"];
      // echo $val["name"];
      // echo $val["pswd"];
      // echo "<br/>";

      if($GetUsername==$val["name"])
      {
        if($GetPaassWWord==$val["pswd"]){
       	   $state="0";
           break;
        }else{
           $state="1";
           break;
        };
      }else{ 
           $state="2";          
      };
    };
    echo $state;
  // };
?>