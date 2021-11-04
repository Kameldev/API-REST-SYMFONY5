<?php
namespace App\Controller;

use App\Exception\FormException;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use App\Entity\Category;
use App\Entity\Annonce;
use App\Form\AnnonceType;
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
    /** get list of announcements
     * @return Response
     */
    public function cgetAnnoncesAction(){
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository(Annonce::class)->findAll();
        $view = $this->view($annonces, Response::HTTP_OK , []);
        return $this->handleView($view);
    }


    /** Get announcement by id
     * @param $id
     * @return Response
     */
    public function getAnnonceAction($id){
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->find($id);

        if (!$annonce) {
            throw new ResourceNotFoundException( "Resource $id not found");
        }

        $view = $this->view($annonce, Response::HTTP_OK , []);
        return $this->handleView($view);
    }

    /** Add announcement
     * @param Request $request
     * @throws FormException
     * @return Response
     */
    public function postAnnonceAction(Request $request){

        $annonce = new Annonce();
        $body=json_decode($request->getContent(), true);
        return $this->save($annonce, $body['data']);
    }

    /** Modify annoncement
     * @param int $id
     * @param Request $request
     * @throws FormException
     * @return Response
     */
    public function putAnnonceAction($id, Request $request){

        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->find($id);

        if (!$annonce) {
            throw new ResourceNotFoundException("Resource $id not found");
        }

        $body=json_decode($request->getContent(), true);
        return $this->save($annonce, $body['data']);
    }


    /** Delete announcement
     * @param Request $request
     * @throws FormException
     * @return Response
     */
    public function deleteAnnonceAction($id){

        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->find($id);

        if (!$annonce) {
            throw new ResourceNotFoundException( "Resource $id not found");
        }
        $em->remove($annonce);
        $em->flush();
        $view = $this->view([], Response::HTTP_OK , []);
        return $this->handleView($view);
    }


    /**
     * @param Annonce $annonce
     * @param $data
     * @return Response
     */
    private function save(Annonce $annonce, array $data){

        $form = $this->createForm(AnnonceType::class, $annonce);
        $requestBody = $data;

        $form->submit($requestBody);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository(Category::class);
            $modele = isset($requestBody['modele']) ?   $requestBody['modele'] : '';
            $categorie = $repository->findOneBy(['id' =>$requestBody['category_id']]);
            //Si on affaire à la categorie Autombile et que le champ modele est renseigné, on cherche la marque associée
            if($categorie->getName() === "Automobile" && !empty($modele)) {
               $words  = preg_replace('/\s+/', '', $modele);
               $modele = new Modele();
               $m = $em->getRepository(Modele::class)->findByName($words);
               var_dump('>>> ', $m);die();


            }
            $annonce->setCategorie($categorie);
            $em->persist($annonce);
            $em->flush();

            $view = $this->view($annonce, Response::HTTP_OK);
            return $this->handleView($view);

        } else {
            throw new FormException($form);
        }
    }


}