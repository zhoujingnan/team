<?php
$arr=$_POST;
$name=trim($arr['name']);
$name=htmlspecialchars($name,ENT_QUOTES);
$pwd=trim($arr['pwd']);
$pwd=htmlspecialchars($pwd,ENT_QUOTES);
$pwd=md5($pwd);
$time=time();
$pdo=new PDO("mysql:host=127.0.0.1;dbname=team","root","root");
$pdo->exec("set names utf8");
$sql="insert into `admin`(`a_user`,`a_pwd`,`last_login_time`) values(?,?,$time)";
$res=$pdo->prepare($sql);
$res->bindparam(1,$name);
$res->bindparam(2,$pwd);
$r=$res->execute();
if($r){
    header("location:show.php");
}
