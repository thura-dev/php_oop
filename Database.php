<?php
class Database
{
    //property
    public $host = "localhost";
    //method
    function connection()
    {
        return $this->host;
    }
    function all($table = 'some')
    {
        return $table;
    }
}
class User
{
    public function detail()
    {
        $db = new Database();
        echo $db->connection();
    }
}
$user = new User();
$user->detail();