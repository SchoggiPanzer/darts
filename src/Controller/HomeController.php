<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

class HomeController extends AbstractController
{
    private $tokenManager;

    public function __construct(CsrfTokenManagerInterface $tokenManager = null)
    {
        $this->tokenManager = $tokenManager;
    }

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $user = $this->getUser();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $user
        ]);
    }
}
