<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'bodyId' => 'index',
            'default' => ''
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'bodyId' => 'o_firmie',
            'default' => '2'
        ]);
    }

    /**
     * @Route("/offers", name="offers")
     */
    public function offers(): Response
    {
        return $this->render('home/offers.html.twig', [
            'bodyId' => 'oferta',
            'default' => '2'
        ]);
    }

    /**
     * @Route("/references", name="references")
     */
    public function references(): Response
    {
        return $this->render('home/references.html.twig', [
            'bodyId' => 'referencje',
            'default' => '2'
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'bodyId' => 'kontakt',
            'default' => '2'
        ]);
    }
}
