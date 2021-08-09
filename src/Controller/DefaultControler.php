<?php

namespace App\Controller;

use App\Classe\Mail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultControler extends AbstractController
{
    /**
     * @Route("/", name="index")
     *
     */
    public function index(Request $request): Response
    {

      /*  $mail = new Mail();
        $mail->send("irshadkashifi.r@gmail.com","irshadmuhammad", "Mon premier mail");*/
        return $this->render('Default/index.html.twig', [
            'controller_name' => 'DefaultControler',
        ]);
    }
}
