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

        $firstAlbum  = ['id' => 0, 'name' => 'first Album' ];        
        $secondAlbum = ['id' => 1, 'name' => 'second Album'];        
        $thirdAlbum  = ['id' => 2, 'name' => 'third Album' ];        
        $fourthAlbum = ['id' => 3, 'name' => 'fourth Album'];        
        $fifthAlbum  = ['id' => 4, 'name' => 'fifth Album' ];        

        $albums = [
            $firstAlbum,
            $secondAlbum,
            $thirdAlbum,
            $fourthAlbum,
            $fifthAlbum
        ];

        return new JsonResponse($albums);
    }

    /**
     * @Route("/api/album/{id}", name="album")
     * @Method("GET")
     */
    public function albumAction($id)
    {
        $album[0]  = array(
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/a9/3e/39/a93e39e8f4246908df8927eda1f6d852.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/e2/f6/e9/e2f6e9da6aa5b687a65eaee349fdffe6.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/5d/6c/9f/5d6c9f29d041f3089ef9a9c8e6684315.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/ad/60/1b/ad601b80822a35f5b642a0ba9b4672ca.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/3b/3c/43/3b3c43658eda4ed81e57488ebdc560ce.jpg", "name" => "item"]
        );        

        $album[1] = array(
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/a9/3e/39/a93e39e8f4246908df8927eda1f6d852.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/e2/f6/e9/e2f6e9da6aa5b687a65eaee349fdffe6.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/5d/6c/9f/5d6c9f29d041f3089ef9a9c8e6684315.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/ad/60/1b/ad601b80822a35f5b642a0ba9b4672ca.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/3b/3c/43/3b3c43658eda4ed81e57488ebdc560ce.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/fe/15/7f/fe157f9bc49e2ba228569812726c9b9f.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/63/ff/f1/63fff100d0d9570ca905683aee2611fe.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/97/4b/1e/974b1e6a9a1a6f97c8446d2205dfea2c.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/8d/31/1d/8d311d942a1b8836f5d377721a3c971e.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/1c/d1/7e/1cd17eee86d481be9b7f7fe786cf4d83.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/64/28/2e/64282eb80efb6dc13d0280107bc47da1.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/05/c1/94/05c19481fe5dcb3e784094e70b53cc82.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/3f/e3/29/3fe329a966307ce6074bf286bb591115.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/13/be/f1/13bef158947583b1a886e0662f1e3562.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/b7/9e/68/b79e68d69794bd28fd68d7cd98a288c0.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/8d/31/1d/8d311d942a1b8836f5d377721a3c971e.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/97/4b/1e/974b1e6a9a1a6f97c8446d2205dfea2c.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/63/ff/f1/63fff100d0d9570ca905683aee2611fe.jpg", "name" => "item"]
        );  

        $album [2] = array(
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/a9/3e/39/a93e39e8f4246908df8927eda1f6d852.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/e2/f6/e9/e2f6e9da6aa5b687a65eaee349fdffe6.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/5d/6c/9f/5d6c9f29d041f3089ef9a9c8e6684315.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/ad/60/1b/ad601b80822a35f5b642a0ba9b4672ca.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/3b/3c/43/3b3c43658eda4ed81e57488ebdc560ce.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/fe/15/7f/fe157f9bc49e2ba228569812726c9b9f.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/63/ff/f1/63fff100d0d9570ca905683aee2611fe.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/97/4b/1e/974b1e6a9a1a6f97c8446d2205dfea2c.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/8d/31/1d/8d311d942a1b8836f5d377721a3c971e.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/1c/d1/7e/1cd17eee86d481be9b7f7fe786cf4d83.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/64/28/2e/64282eb80efb6dc13d0280107bc47da1.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/05/c1/94/05c19481fe5dcb3e784094e70b53cc82.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/3f/e3/29/3fe329a966307ce6074bf286bb591115.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/13/be/f1/13bef158947583b1a886e0662f1e3562.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/b7/9e/68/b79e68d69794bd28fd68d7cd98a288c0.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/8d/31/1d/8d311d942a1b8836f5d377721a3c971e.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/97/4b/1e/974b1e6a9a1a6f97c8446d2205dfea2c.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/63/ff/f1/63fff100d0d9570ca905683aee2611fe.jpg", "name" => "item"]
        );        

        $album [3] = array(
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/a9/3e/39/a93e39e8f4246908df8927eda1f6d852.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/e2/f6/e9/e2f6e9da6aa5b687a65eaee349fdffe6.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/5d/6c/9f/5d6c9f29d041f3089ef9a9c8e6684315.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/ad/60/1b/ad601b80822a35f5b642a0ba9b4672ca.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/3b/3c/43/3b3c43658eda4ed81e57488ebdc560ce.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/fe/15/7f/fe157f9bc49e2ba228569812726c9b9f.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/63/ff/f1/63fff100d0d9570ca905683aee2611fe.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/97/4b/1e/974b1e6a9a1a6f97c8446d2205dfea2c.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/8d/31/1d/8d311d942a1b8836f5d377721a3c971e.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/1c/d1/7e/1cd17eee86d481be9b7f7fe786cf4d83.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/64/28/2e/64282eb80efb6dc13d0280107bc47da1.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/05/c1/94/05c19481fe5dcb3e784094e70b53cc82.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/3f/e3/29/3fe329a966307ce6074bf286bb591115.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/13/be/f1/13bef158947583b1a886e0662f1e3562.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/b7/9e/68/b79e68d69794bd28fd68d7cd98a288c0.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/8d/31/1d/8d311d942a1b8836f5d377721a3c971e.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/97/4b/1e/974b1e6a9a1a6f97c8446d2205dfea2c.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/63/ff/f1/63fff100d0d9570ca905683aee2611fe.jpg", "name" => "item"]
        );        

        $album [4] = array(
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/a9/3e/39/a93e39e8f4246908df8927eda1f6d852.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/e2/f6/e9/e2f6e9da6aa5b687a65eaee349fdffe6.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/5d/6c/9f/5d6c9f29d041f3089ef9a9c8e6684315.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/ad/60/1b/ad601b80822a35f5b642a0ba9b4672ca.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/3b/3c/43/3b3c43658eda4ed81e57488ebdc560ce.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/fe/15/7f/fe157f9bc49e2ba228569812726c9b9f.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/63/ff/f1/63fff100d0d9570ca905683aee2611fe.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/97/4b/1e/974b1e6a9a1a6f97c8446d2205dfea2c.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/8d/31/1d/8d311d942a1b8836f5d377721a3c971e.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/1c/d1/7e/1cd17eee86d481be9b7f7fe786cf4d83.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/64/28/2e/64282eb80efb6dc13d0280107bc47da1.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/05/c1/94/05c19481fe5dcb3e784094e70b53cc82.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/3f/e3/29/3fe329a966307ce6074bf286bb591115.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/13/be/f1/13bef158947583b1a886e0662f1e3562.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/b7/9e/68/b79e68d69794bd28fd68d7cd98a288c0.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/8d/31/1d/8d311d942a1b8836f5d377721a3c971e.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/97/4b/1e/974b1e6a9a1a6f97c8446d2205dfea2c.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/63/ff/f1/63fff100d0d9570ca905683aee2611fe.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/8d/31/1d/8d311d942a1b8836f5d377721a3c971e.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/1c/d1/7e/1cd17eee86d481be9b7f7fe786cf4d83.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/64/28/2e/64282eb80efb6dc13d0280107bc47da1.jpg", "name" => "item"],['src' => "https://s-media-cache-ak0.pinimg.com/236x/8d/31/1d/8d311d942a1b8836f5d377721a3c971e.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/1c/d1/7e/1cd17eee86d481be9b7f7fe786cf4d83.jpg", "name" => "item"],
            ['src' => "https://s-media-cache-ak0.pinimg.com/236x/64/28/2e/64282eb80efb6dc13d0280107bc47da1.jpg", "name" => "item"]
        );        

        return new JsonResponse($album[$id]);
    }
}
