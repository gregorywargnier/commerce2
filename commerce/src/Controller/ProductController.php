<?php

namespace App\Controller;

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Product;
use App\Entity\User;
use App\Form\NewType;


class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="products_list")
     */
    
    public function list(Request $request)
    {
        $query = $request->query->get( 'query' );
    
        $sort = $request->query->get( 'sort', 'id' );

      


        return $this->render('product/list.html.twig');
    }
      /**
     * @Route("/product/{slug}", name="product_show", requirements={"id"="\d+"})
     */
    /*
        public function show( $slug ){
            
           
            return $this->render( 'product/show.html.twig');
        } */
           /**
     * @Route("/admin/product/", name="products_new"
     */
    /*
    public function new(){
        $ajust = new Ajust();
        $form = $this->createForm( NewType::class, $ajust );
        $form->handleRequest( $request );
        if( $form->isSubmitted() && $form->isValid() ){
            $ajust->setOwner( $this->getUser() );
            
            $em = $this->getDoctrine()->getManager();
            $em->persist( $ajust );
            $em->flush();
            return $this->redirectToRoute( 'products_list', array(
                'id' => $ajust->getId(),
            ));
        }
           
        return $this->render( 'products/new.html.twig', array(
            'form' => $form->createView(),
        ));
    } */
} 
 
