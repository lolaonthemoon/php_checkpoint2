<?php
namespace App\Controller;

use App\Model\AccessoryManager;

/**
 * Class AccessoryController
 *
 */
class AccessoryController extends AbstractController
{
    /**
     * Display accessory creation page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function add()
    {
        $accessoryManager = new AccessoryManager;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
        $accessory = array_map('trim', $_POST,);
        $accessory  = $accessoryManager -> add($accessory);   

        header('Location:/accessory/list');
        }
        return $this->twig->render('Accessory/add.html.twig');
    }

    /**
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function list()
    {
        $accessorieManager = new AccessoryManager;
        $accessories = $accessorieManager -> selectAll ();
        return $this->twig->render('Accessory/list.html.twig', ['accessories' => $accessories]);
    }
}
