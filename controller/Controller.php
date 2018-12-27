<?php
/**
 * User: hjkim
 * Date: 2018-11-01
 */



class Controller{
    protected $method;
    protected $path;
    protected $queryString;

    public function __construct(){
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->queryString = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

        print <<<EOM
$this->method <br/>
$this->path <br/>
$this->queryString <br/>

EOM;
    }
}

?>