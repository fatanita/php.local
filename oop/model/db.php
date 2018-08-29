<?php
class Db
{
    public  $table;
    public function  __construct()
    {
      echo  $this->table="users" ."<br>";
    }

    public  function all(){
        return "SELECT * FROM {$this->table} ";
    }
    public  function find($id,$columns=null){
        $columns=!is_null($columns)? implode(',',$columns):'*';
        return "SELECT $columns FROM {$this->table} where id=$id";
    }
    public  function DELETE($id){
        return "DELETE FROM {$this->table} where id=$id";
    }

}
$connect=new Db();
