<?php

namespace Hydrate\ApiBundle\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class SecurityController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Post("/login_check")
     */
    public function loginAction(Request $request)
    {
    }

    /**
     * @Rest\View()
     * @Rest\Get("/logout")
     */
    public function logoutAction(Request $request)
    {

    }
}
