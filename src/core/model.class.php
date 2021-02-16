<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\core;

abstract class Model
{
    // useful types for schema
    const TYPE_STRING   = 'string';
    const TYPE_INTEGER  = 'int';
    const TYPE_UINTEGER = 'uint';
    const TYPE_DECIMAL  = 'dec';
    const TYPE_DATE     = 'date';
    const TYPE_JSON     = 'json';

    protected $schema = [
    ];

    private $values = [
    ];

    public static function tablename()
    {
        $class = get_called_class();
        if(defined($class.'::TABLENAME'))
        {
            return $class::TABLENAME;
        }
        return null;
    }

    public function __construct($values)
    {
        try
        {
            foreach($this->schema as $key => $value)
            {
                if(isset($values[$key]))
                {
                    $this->$key = $values[$key];
                }
                else
                {
                    $this->$key = null;
                }
            }
        }
        catch(\Exception $error)
        {
            print_r($error);
            exit(1);
        }
    }

    public function __destruct()
    {
        foreach($this->schema as $key => $value)
        {
            if(isset($values[$key]))
            {
                $this->$key = null;
            }
        }
        $this->schema = null;

        foreach($this->values as $key => $value)
        {
            if(isset($values[$key]))
            {
                $this->$key = null;
            }
        }
        $this->values = null;
    }

    public function __set($key, $value)
    {
        // key available?
        if(isset($this->schema[$key]))
        {
            $this->values[$key] = $value;
        }
        else
        {
            $className = get_called_class();
            throw new \Exception(`${key} does not exists in this class ${className}`);
        }
    }

    public function __get($key)
    {
        // Check is the key in the schema
        // If so return the value in values if not exists return default value from schema or null
        // key available?
        if(isset($this->schema[$key]))
        {
            return $this->values[$key];
        }
        else
        {
            $className = get_called_class();
            throw new \Exception(`${key} does not exists in this class ${className}`);
        }
    }

    public function insert()
    {
        // Implement insert
        $db = $GLOBALS['db'];
        $tableName = self::tablename();
        $sqlStr = "INSERT INTO `${tableName}` (";
        $valuesStr = "(";
        foreach($this->schema as $key => $value)
        {
            $sqlStr.=$key.',';
            $valuesStr.=':'.$key.',';
        }

        $sqlStr = rtrim($sqlStr, ',');
        $valuesStr = rtrim($valuesStr, ',');

        $sqlStr = $sqlStr.') VALUES '.$valuesStr.');';


        try
        {
            $stmt=$db->prepare($sqlStr);
            $stmt->execute($this->values);
            $this->id = $db->lastInsertId();
        }
        catch(\PDOException $e)
        {
            print_r($e);
        }
    }

    public function update()
    {
        // Implement update
        $db = $GLOBALS['db'];
        $tableName = self::tablename();
        $sqlStr = "UPDATE `${tableName}` SET ";
        $valuesStr = "";
        foreach($this->schema as $key => $value)
        {
            if($key != 'id')
            {
                //Funktioniert mit allen Datentypen
                $valuesStr.= $key.' = "'.$this->values[$key].'", ';
            }
        }

        $valuesStr = rtrim($valuesStr, ', ');

        $sqlStr .= $valuesStr.' WHERE id = '.$this->values['id'].';';

/*        echo $sqlStr;
        exit(0);*/

        try
        {
            $stmt=$db->prepare($sqlStr);
            $stmt->execute($this->values);
            $this->id = $db->lastInsertId();
        }
        catch(\PDOException $e)
        {
            print_r($e);
        }
    }

    public function destroy()
    {
        $db = $GLOBALS['db'];
        $tableName = self::tablename();
        $sqlStr = 'DELETE FROM ' . $tableName . ' WHERE id = ' . $this->values['id'];

        try
        {
            $stmt=$db->prepare($sqlStr);
            $stmt->execute($this->values);
            $this->id = $db->lastInsertId();
        }
        catch(\PDOException $e)
        {
            print_r($e);
        }
    }

    public static function find($whereStr = '1')
    {
        $db = $GLOBALS['db'];
        $sqlStr = 'SELECT * FROM `'.self::tablename().'` WHERE '.$whereStr.';';
        $results = [];
        try
        {
            $results = $db->query($sqlStr)->fetchAll();
            $count = count($results);
            for ($i=0; $i < $count; ++$i)
            {
                $class = get_called_class();
                $results[$i] = new $class($results[$i]);
            }
        }
        catch(\PDOException $error)
        {
            print_r($error);
        }
        return $results;
    }


    public static function findOne($whereStr = '1')
    {
        $results = self::find($whereStr);

        if(count($results) > 0)
        {
            return $results[0];
        }
        return null;
    }
}