<?php

namespace Hydrate\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/home")
     */
    public function indexAction()
    {
        return $this->render('HydrateApiBundle:Default:index.html.twig');
    }
}
