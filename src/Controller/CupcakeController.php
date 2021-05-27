<?php

namespace App\Controller;

use App\Model\AccessoryManager;
use App\Model\CupcakeManager;
use DateTime;

/**
 * Class CupcakeController
 *
 */
class CupcakeController extends AbstractController
{
    /**
     * Display cupcake creation page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function add(){ 

        $cupcakeManager = new CupcakeManager ;  
        $accessorieManager = new AccessoryManager ;
        $accessories = $accessorieManager -> selectAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cupcake = array_map('trim', $_POST);

            // faut encore recuperer la date du jour !
            $cupcake['created_at'] =  'today ??......';
            //TODO Add your code here to create a new cupcake
            $cupcake = $cupcakeManager->add($cupcake);
            header('Location:/cupcake/list');
        }
        //TODO retrieve all accessories for the select options
        return $this->twig->render('Cupcake/add.html.twig',['accessories' => $accessories] );
    }

    /**
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function list()
    {
        //TODO Retrieve all cupcakes
        return $this->twig->render('Cupcake/list.html.twig');
    }
}
