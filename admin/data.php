<?php
class Data{
    static public $obj;
    public function __construct(){
        data::$obj=new PDO("mysql:host=127.0.0.1;dbname=team","root","root");
        data::$obj->exec("set names utf8");
    }
    //查询
    function select($name){
        $sql="SELECT * FROM `admin` WHERE `a_user`='$name'";
        $res=data::$obj->query($sql);
        $arr=$res->fetch(PDO::FETCH_ASSOC);
        if($arr){
            $data['msg']=1;
            $data['data']=$arr;
            echo json_encode($data);die;
        }else{
            $data['msg']=0;
            $data['data']='';
            echo json_encode($data);die;
        }
    }
}