<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }

    public function contactsAction()
    {
        return $this->render("BloggerBlogBundle:Page:contacts.html.twig");
    }

    public function productsAction()
    {
        $products = $this->getDoctrine()->getRepository('BloggerBlogBundle:Product')->findAll();
//        dump($products);
//        die;

        return $this->render("BloggerBlogBundle:Page:products.html.twig", ['products' => $products]);
    }

    public function showAction($id)
    {
        return $this->render("BloggerBlogBundle:Page:show.html.twig", ['id' => $id]);
    }
}