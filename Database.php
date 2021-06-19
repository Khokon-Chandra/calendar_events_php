<?php
/**
 *Database class
*/

class Database extends PDO
{
    protected $table = 'events';
    private $condition = '';

    function __construct()
    {
        parent::__construct(DSN, DB_USER, DB_PASS);
        $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }


    public function all()
    {
        $statement = $this->prepare("SELECT * FROM events");
        $statement->execute();
        return $statement->fetchAll();
    }



    public function get()
    {
        $sql = empty($this->condition)?'SELECT * FROM events':'SELECT * FROM '.$this->condition.' events';
        $statement = $this->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }



    public function create($data = [])
    {
        $attributes = array_keys($data);
        $fields     = implode(',',$attributes);
        $params     = implode(',',array_map(fn($attr)=>":$attr" ,$attributes));
        $sql        = "INSERT INTO $table($fields) VALUES($params)";
        $statement  = self::prepare($sql);
        foreach ($attributes as $attribute){
            $statement->bindValue(":$attribute",$data[$attribute]);
        }
        $statement->execute();
        return true;
    }


    public function where($field,$operator = '=',$value)
    {
        $this->condition = $field."".$operator."".$value;
        return $this;
    }



}
