<?php

namespace App\Model;

/**
 * Class CupcakeManager
 * @package Model
 */
class CupcakeManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'cupcake';


    /**
     * CupcakeManager constructor.
     * @param \PDO $pdo
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }


    public function add ($cupcake)
    {
    $statement = $this->pdo->prepare("INSERT INTO $this->table
        ( `name` , `color1`,`color2`,`color3`,`accessory_id`,`created_at`) 
    VALUES
        (:name , :color1 :color2 :color3, :id_accessory ,:created_at)");

        $statement->bindValue('name', $cupcake['name'], \PDO::PARAM_STR);
        $statement->bindValue('color1', $cupcake['color1'], \PDO::PARAM_STR);    
        $statement->bindValue('color2', $cupcake['color2'], \PDO::PARAM_STR);  
        $statement->bindValue('color3', $cupcake['color3'], \PDO::PARAM_STR);   
         $statement->bindValue('id_accessory', $cupcake['id_accessory'], \PDO::PARAM_INT);
        $statement->bindValue('created_at', $cupcake['created_at'], \PDO::PARAM_STR);     
       
        $statement->execute();
        var_dump($statement); die();
    
        return ;
    }

}

