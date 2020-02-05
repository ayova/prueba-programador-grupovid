<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Rhombus;

class RhombusController extends AbstractController
{
    /**
     * @Route("/rhombus", name="rhombus")
     */
    public function index()
    {
        return $this->render('rhombus/index.html.twig', [
            'controller_name' => 'RhombusController',
        ]);
    }


    /**
     * @Route("/rhombus",name="rhombus_changeColor")
     */
    public function changeColor()
    {

        $rhombus = new Rhombus();
        $rhombus->getRhombusColorValue(); 

        return $this->render('rhombus/index.html.twig',[
            'bg_color' => ''
        ]);
    }
}
