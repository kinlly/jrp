<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use App\Services\Language;
use App\Services\Metas;

class MainController extends AbstractController
{
    
   
     #[Route('/', name:"home")]
    public function index(Request $request, Language $language, Metas $metas)
    {
        //SELECT LANGUAGE
        $route_name = $request->attributes->get('_route');
        $json_text = $language->set($route_name,"en_US"); 
        $json_metas = $metas->set($route_name,"en_US"); 
        
        return $this->render('home/index.html.twig',[
            'json_text' => $json_text,
            'json_metas' => $json_metas,
            'custom_css' => 'home'
        ]);
    }

    //aqui va el about us , terms, information
    #[Route('/custom/{name?}', name:"custom", methods: ['GET'])]  
    
    public function custom(Request $request)
    {
        $name = $request->get('name');
        
        return $this->render('home/custom.html.twig', [
            'name' => $name
            ]);
    }

    
}
