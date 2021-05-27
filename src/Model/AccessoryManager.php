<?php

namespace App\Model;

/**
 * Class AccessoryManager
 * @package Model
 */
class AccessoryManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'accessory';


    /**
     * BeastManager constructor.
     * @param \PDO $pdo
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }


    public function add ($accessory)
    {
    $statement = $this->pdo->prepare("INSERT INTO $this->table
        ( `name` , `url`) 
    VALUES
        (:name , :url)");

        $statement->bindValue('name', $accessory['name'], \PDO::PARAM_STR);
        $statement->bindValue('url', $accessory['url'], \PDO::PARAM_STR);        
        $statement->execute();
    
        return ;
    }

}

