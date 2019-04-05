<?php

namespace App\Controller;

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\service\ProductService;
use App\Entity\Product;
use App\Entity\User;
use App\Form\NewType;


class ProductController extends AbstractController
{
    /**
     * @Route("/products/list", name="product_list")
     */
    
    public function list()
    {
        $query = $request->query->get( 'query' );
    
        $sort = $request->query->get( 'sort', 'id' );

        if( !empty( $query ) ){
            $products = $productService->search( $query, $sort );
        }else{
            $products = $productService->getAll( $sort );
        }


        return $this->render('product/list.html.twig', array(
            
            'product' => $products,
            'incomingCounter' => $productsService->countIncoming(),
        ));
    }
      /**
     * @Route("/products/{id}", name="product_show", requirements={"id"="\d+"})
     */
    
        public function show( ProductService $productService, $id ){
            $products = $productService->get( $id );
            if( empty( $products ) ){
                return new Response( 'product Not Found', 404 );
            }
            return $this->render( 'product/show.html.twig', array(
                'product' => $products,
            ));
        } 
    } 
 
