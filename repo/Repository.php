<?php
/**
 * User: hjkim
 * Date: 2018-10-24
 */

abstract class Repository{
    public $tableName;

    abstract public function listAll();


    abstract public function listByParam($param);
    abstract public function get($key);
    abstract public function delete($keys);
    abstract public function insert($object);
    abstract public function update($object);

    private function getQueryWhere($param){
        $return = 'true';
        foreach($param as $k => $v){
            $return .= " AND {$k} = {$v}";
        }
    }
    private function getQueryOrder($param, $order='ASC'){
        $return = "";

        if(!$param){
          return $return;
        }

        $column_str = implode(',', $param);
        $return = "ORDER BY {$column_str} {$order}";

        return $return;
    }


    private function getQueryLimit($param){

    }
}

?>