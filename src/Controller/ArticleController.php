<?php
  namespace App\Controller;

  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;

  class ArticleController extends Controller {
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() 
    {
      //return new Response('<html><body><h1>Hello World!</h1></body></html>');
      // $articles = [];
      $articles = ['Article 1', 'Article 2'];

      return $this->render('articles/index.html.twig', array('articles' => $articles));
      
    }
  }