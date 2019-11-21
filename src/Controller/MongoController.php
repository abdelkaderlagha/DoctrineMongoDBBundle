<?php

namespace App\Controller;

use App\Document\Article;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ODM\MongoDB\DocumentManager as DocumentManager;

class MongoController
{   


    /**
     * @Route("/mongoTest", methods={"GET"})
     * @Route("/main/report/create" , name="blog_create")
     */
    public function mongoTest(DocumentManager $dm , Article $article =null , Request $request)
    {
        
                
        $article->setTitle("How Alaska fixed its earthquake-shattered roads in just days");
        $article->setContent("All that preparation readied Alaska residents to spring into action as soon as the shaking from the initial quake subsided. Bridge inspectors based in Alaska’s capital, Juneau, packed and got on a plane that night. Arriving before midnight, they immediately started checking on the 243 bridges that had been impacted by the shaking. After checking in on damaged homes and offices, government employees and contractors within the quake zone also got to work, readying themselves to do a job that wouldn’t be easy during this time of year. ");
        $article->setImage("https://cdn.vox-cdn.com/thumbor/ntt9EmGqkjSxnsAfDqIFL-w73Nw=/0x0:2048x1536/920x613/filters:focal(861x605:1187x931):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/62647964/45266462095_a4494c059a_k__1_.0.jpg");
       
        $article->setLattitude("mohsen");
        $article->setLongitude("mohsen");
        
        $dm->persist($article);
        $dm->flush();
        return new JsonResponse(array('Status' => 'OK'));
    }
}