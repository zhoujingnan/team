<?php
header("content-type:text/html;charset=utf-8");
$arr=$_POST;
$pdo=new PDO("mysql:host=127.0.0.1;dbname=team","root","root");
$pdo->exec("set names utf8");
$name=$arr['name'];
$pwd=md5($arr['pwd']);
$sql="SELECT * FROM `admin` WHERE `a_user`='$name' AND `a_pwd`='$pwd'";
$res=$pdo->query($sql);
$arr=$res->fetch(PDO::FETCH_ASSOC);
if($arr){
    header("location:show.php");die;
}else{
    echo "<script>alert('用户名或密码错误,请重新登录！');location.href='login.php'</script>";die;
}