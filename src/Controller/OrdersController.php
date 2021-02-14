<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Orders;
use App\Form\OrdersType;
use App\Services\Language;
use App\Services\Metas;

class OrdersController extends AbstractController
{
    #[Route('/application', name: 'form_orderid')]
    public function index(Request $request, Language $language, Metas $metas): Response
    {
        //SELECT LANGUAGE
        $route_name = $request->attributes->get('_route');
        $json_text = $language->set($route_name,"en_US"); 
        $json_metas = $metas->set($route_name,"en_US"); 

        $order = new Orders();
        
        $form = $this->createForm(OrdersType::class, $order,[
            'action' => $this->generateURL('form_orderid'),
            'method' => 'POST'
        ]);
        
        $form->handleRequest($request); 

        if ( $form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($order);
                $em->flush();
                return $this->redirect($this->generateUrl('form_orderid')); 
                //Validation and PhoneType
                //This application is a simple demo from prod.
                //Next STEP should be INGENICO PAYMENT
                //STATUS ORER
                //EMAIL SETTINGS
                //ORDER STEPS
                //Admin Panel 
                //AUTOMATIC SELENIUM TEST
                //HOTJAR IMPLEMENTATION 
        }
        return $this->render('orders/index.html.twig', [
            'json_text' => $json_text,
            'json_metas' => $json_metas,
            'custom_css' => "application",
            'hide_header_button' => "hide",
            'hide_footer' => "hide",
            'order_form' => $form->createView()
        ]);
    }
}