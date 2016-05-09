<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/api/albums", name="albums")
     * @Method("GET")
     */
    public function albumsAction(Request $request)
    {

        $firstAlbum = "{id:0, name:'firstAlbum'}";        
        $secondAlbum = "{id:1, name:'secondAlbum'}";        
        $thirdAlbum = "{id:2, name:'thirdAlbum'}";        
        $fourthAlbum = "{id:3, name:'fourthAlbum'}";        

        $albums = [
            $firstAlbum,
            $secondAlbum,
            $thirdAlbum,
            $fourthAlbum
        ];

        return new JsonResponse($albums);
    }
}
