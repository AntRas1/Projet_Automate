<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Entity\Echantillon;
use App\Entity\Resultats;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class controller1 extends AbstractController{

    #[Route(path:'ajout',methods: ['POST'])]

public function ajout_P (Request $request, EntityManagerInterface $entityManager, $nouvPatient): Response
    {
    $data=json_decode($request->getContent());
    $o = new patient(
        $nouvPatient->nomP = $data->nom,
        $nouvPatient->prenomP = $data->prenom,
        $nouvPatient->Genre = $data->genre,
        $nouvPatient->age = $data->age,
        $nouvPatient->GrpSang = $data->grpsang,
        $nouvPatient->N_SecSoc = $data->SecSoc);

    $entityManager->persist($o);
    $entityManager-> flush();
    $bidule = $entityManager->getRepository(Patient::class)->findall();
    return new Response($bidule->getNom());
    return $this->render();
}

}