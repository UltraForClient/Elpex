<?php

namespace App\Controller;

use App\Entity\Reference;
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
            'title' => '',
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'title' => 'O firmie',
        ]);
    }

    /**
     * @Route("/offers", name="offers")
     */
    public function offers(): Response
    {
        return $this->render('home/offers.html.twig', [
            'title' => 'Oferty',
        ]);
    }

    /**
     * @Route("/references", name="references")
     */
    public function references(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $references = $em->getRepository(Reference::class)->findAll();


        return $this->render('home/references.html.twig', [
            'title' => 'Referencje',
            'references' => $references
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'title' => 'Kontakt',
        ]);
    }
}
