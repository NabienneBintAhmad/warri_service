<?php

namespace App\Controller;


use App\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use phpDocumentor\Reflection\Types\This;

/**
     * @Route("/api")
     */
class WarriController extends AbstractController
{
    
    
    
    
    /**
     * @Route("/warri", name="warri")
     */
    public function index()
    {
        // $données = [
        //     'name' => 'iPhone X',
        //     'price' => 1000
        // ];

        return $this->render('warri/index.html.twig',[
            'controller_name'=>'WarriController',
        ]);
    }
   
        /**
         * @Route("/register", name="register", methods={"POST", "GET"})
         */
        public function register(Request $request,UserPasswordEncoderInterface $passwordEncoder,EntityManagerInterface $entityManager,SerializerInterface $serializer,ValidatorInterface $validator)
        {
            $values = json_decode($request->getContent());
            if(isset($values->email,$values->password)) 
            {
                $user = new User();

                //$form=$this->createForm(UserTypee::class, $user);
                //$form->handleRequest($request);
                
                $user->setEmail($values->email);
                $user->setPassword($passwordEncoder->encodePassword($user,$values->password));
                $user->setRoles($user->getRoles());
                $errors = $validator->validate($user);
                if(count($errors))
                 {
                    $errors = $serializer->serialize($errors, 'json');
                    return new Response($errors, 500, [
                        'Content-Type' => 'application/json'
                    ]);
                }
                $entityManager=$this->getDoctrine()->getManager(); 
                $entityManager->persist($user);
                $entityManager->flush();

                $data = [
                    'status' => 201,
                    'message' => 'bien insere'
                ];
                return new JsonResponse($data,201);
    
                $data = [
                    'status' => 500,
                    'message' => 'renseignez les champs'
                ];
                return new JsonResponse($data,500);
            }
        }

}
