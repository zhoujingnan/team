<?php
require_once 'data.php';
header("content-type:text/html;charset=utf-8");
$name=$_GET['name'];
$name=trim($name);
$name=htmlspecialchars($name,ENT_QUOTES);
$obj=new Data();
$obj->select($name);


