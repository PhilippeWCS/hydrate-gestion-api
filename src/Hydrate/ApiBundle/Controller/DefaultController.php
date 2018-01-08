<?php

namespace Hydrate\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HydrateApiBundle:Default:index.html.twig');
    }
}
