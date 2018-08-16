<?php
  namespace App\Controller;

  use App\Entity\Article;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;

  class ArticleController extends Controller {
    /**
     * @Route("/", name="article_list")
     * @Method({"GET"})
     */
    public function index() 
    {
      //return new Response('<html><body><h1>Hello World!</h1></body></html>');
      // $articles = [];
      //$articles = ['Article 1', 'Article 2'];
      $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

      return $this->render('articles/index.html.twig', array('articles' => $articles));
    }

        /**
     * @Route("/article/{id}", name="article_show")
     * @Method({"GET"})
     */
    public function show($id) 
    {

      $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

      return $this->render('articles/show.html.twig', array('article' => $article));
    }


    // /**
    //  * @Route("/article/save")
    //  * @Method({"GET"})
    //  */
    // public function save() 
    // {
    //   $em = $this->getDoctrine()->getManager();
    //   $article = new Article();

    //   $article->setTitle("Article Two");
    //   $article->setBody("this is the body for article two");

    //   $em->persist($article);
    //   $em->flush();

    //   return new Response('Saved an article with id of '.$article->getId());

    // }
    
  }