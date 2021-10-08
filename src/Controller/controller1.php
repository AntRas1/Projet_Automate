<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Entity\Resultats;
use App\Entity\Resultats;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class controller1 extends AbstractController{
#[Route(path:'ajout')]

public function Ajout_P(Request $request, EntityManagerInterface $entityManager){
    //$o = new patient(@data);
    $data=json_decode($request->getContent());
    $nouvPatient = $entityManager -> getRepository(Patient::class)->find();
    $nouvPatient->nomP = $data->nom;
    $nouvPatient->prenomP = $data->prenom;
    $nouvPatient->Genre = $data->genre;
    $nouvPatient->age = $data->age;
    $nouvPatient->GrpSang = $data->grpsang;
    $nouvPatient->N_SecSoc = $data->SecSoc;

    $em->persist($o); //sert à $em de se souvenir de l'objet $o.
    $em-> flush();
    $bidule = $em->getRepository(test::class)->find(1);
    return new Response($bidule->getNom());
    return $this->render();
}

}