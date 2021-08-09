<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultControler extends AbstractController
{
    /**
     * @Route("/{_locale}/", name="index",requirements={
     *         "_locale": "en|fr|de",
     *     })
     */
    public function index(Request $request): Response
    {
        $locale = $request->getLocale();
        $request->setLocale($locale);
        return $this->render('Default/index.html.twig', [
            'controller_name' => 'DefaultControler',
        ]);
    }
}
