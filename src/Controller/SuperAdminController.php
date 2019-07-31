<?php

namespace App\Controller;
use App\Entity\Superadmin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\SuperAdminRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


 /**
     * @Route("/api", name="api",methods={"POST"})
     */

class SuperAdminController extends AbstractController
{
    /**
     * @Route("/superadmin", name="superadmin",methods={"POST"})
     */
    public function SuperAdmin(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager, SerializerInterface $serializer, ValidatorInterface $validator)
    {
        $values = json_decode($request->getContent());
     
            $user = new Superadmin();
            $user->setNom($values->nom);
            $user->setStatut($values->statut);
            $user->setPrenom($values->prenom);
            $user->setCni($values->cni);
            $user->setTelephone($values->telephone);
            $user->setAdresse($values->adresse);
            $user->setEmail($values->email);
            $errors = $validator->validate($user);
            if(count($errors)) {
                $errors = $serializer->serialize($errors, 'json');
                return new Response($errors, 500, [
                    'Content-Type' => 'application/json'
                ]);
            }
            $entityManager->persist($user);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'SuperAdmin bien insérré'
            ];

            return new JsonResponse($data, 201);
        
        $data = [
            'status' => 500,
            'message' => 'Pas insertion!!!!'
        ];
        return new JsonResponse($data, 500);
}
}