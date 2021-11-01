<?php
namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use App\Entity\Category;
use App\Entity\Annonce;
use App\Entity\Marque;
use App\Entity\Modele;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class AnnonceController extends AbstractFOSRestController
{
    /**
     * @return Response
     */
    public function cgetAnnoncesAction(){
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository(Annonce::class)->findAll();
        $view = $this->view($annonces, Response::HTTP_OK , []);
        return $this->handleView($view);
    }


}