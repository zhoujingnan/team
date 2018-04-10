<?php
interface inter_db{
    public function select($tableName,$where='');
    public function add($tableName,$data);
    public function delete($tableName,$where);
    public function update($tableName,$data,$where);
    public function query($sql);
}
class APIdb implements inter_db{
    static public $obj;
    public function __construct(){
        db::$obj=new PDO("mysql:host=127.0.0.1;dbname=team","root","root");
        db::$obj->exec("set names utf8");
    }
    /**
     * 查询数据
     * @param  [type] $tablenAame [表名]
     * @param  string $where      [条件]
     * @return [type]             [数据]
     */
    public function select($tableName,$where=''){

    }
    /**
     * 添加数据
     * @param [type] $tableName [表名]
     * @param [type] $data      [数据]
     * @return [type]             [自增id]
     */
    public function add($tableName,$data){}
    /**
     * 删除数据
     * @param  [type] $tableName [表名]
     * @param  [type] $where     [条件]
     * @return [type]            [description]
     */
    public function delete($tableName,$where){}
    /**
     * 修改数据
     * @param  [type] $tableName [表名]
     * @param  [type] $data      [新值]
     * @param  [type] $where     [条件]
     * @return [type]            [description]
     */
    public function update($tableName,$data,$where){}
    /**
     * 执行原生sql
     * @param  [type] $sql [sql语句
     * ]
     * @return [type]      [description]
     */
    public function query($sql){}
}