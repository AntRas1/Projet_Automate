<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Entity\Echantillon;
use App\Entity\Resultats;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class controller1 extends AbstractController{

    #[Route(path:'ajout',methods: ['POST'])]

public function ajout_P (Request $request, EntityManagerInterface $entityManager, $nouvPatient)
    {
    $data=json_decode($request->getContent());
    $o = new patient(
        $nouvPatient->NomP = $data->nom,
        $nouvPatient->PrenomP = $data->prenom,
        $nouvPatient->Genre = $data->genre,
        $nouvPatient->Age = $data->age,
        $nouvPatient->GroupeSanguin = $data->grpsang,
        $nouvPatient->NSecuriteSocial = $data->SecSoc);

    $entityManager->persist($o);
    $entityManager-> flush();
    $bidule = $entityManager->getRepository(Patient::class)->findall();
    return new Response($bidule->getNomP());
    return $this->render();
}

    #[Route(path:'voir')]
    public function see (EntityManagerInterface $entityManager)
    {
        $entity=$entityManager->getRepository(Patient::class)->find(1);

        $entity-> flush();
        return new Response($entity->getNomP());
        //return $this->render();
    }

}