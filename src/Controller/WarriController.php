<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserSystemes;
use App\Entity\EntreprisePrestataire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;;
use Symfony\Component\Serializer\SerializerInterface;
Use App\Repository\UserSystemRepository;
use Doctrine\ORM\EntityManager;
// ========================================== ASTA
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use phpDocumentor\Reflection\Types\This;
use App\Entity\UserPrestataire;
use App\Entity\ComptePrestataire;

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

// ============================================== SYSTEM

    /**
     * @Route("/system/show/", name="all_user_system")
     */
    public function allus(SerializerInterface $ser){
        $users = $this->getDoctrine()->getRepository(UserSystemes::class)->findAll();
        $users_serialized =  $this->get('serializer')->serialize($users, 'json');
        $response = new Response($users_serialized);
        return($response);
    } // done !

    /**
     * @Route("/system/show/{id}", name="one_user_system")
     */
    public function one_us(SerializerInterface $ser,$id){
        $users = $this->getDoctrine()->getRepository(UserSystemes::class)->find($id);
        $users_serialized =  $this->get('serializer')->serialize($users, 'json');
        $response = new Response($users_serialized);
        return($response);
    } // done !

    /**
     * @Route("/system/add", name="add_user_sys",methods={"POST"})
     */

    public function system_add_user (Request $request){
        
        $data = $request->getContent();
        $data = json_decode($data,true);
        // var_dump($data);
        
        $dump = new UserSystemes;
        $dump->setNom($data['nom']);
        $dump->setPrenom($data['prenom']);
        $dump->setEmail($data['email']);
        $dump->setTelephone($data['tel']);
        $dump->setAdresse($data['adress']);
        $dump->setCni($data['cni']);
        $dump->setStatus($data['status']);

        // $ser = $this->get('serializer');
        // $data = $ser->deserialize($dump,UserSystem::class,'json');
        // var_dump($dump);
        // var_dump($data);

        $em = $this->getDoctrine()->getManager();
        $em->persist($dump);
        $em->flush();

        return new jsonResponse("succesfull !");
    } // done !

// ============================================== PRESTATAIRE

    /**
     * @Route("/prest/add", name="add_prestataire",methods={"POST"}) 
     */
    public function add_prestataire(Request $request){
        $mat = date('y');
        $idrep = $this->getDoctrine()->getRepository(EntreprisePrestataire::class)->CreateQueryBuilder('a')
            ->select('Max(a.id)')
            ->getQuery();
        $maxidresult = $idrep ->getResult();
        $maxid = ($maxidresult[0][1] + 1);

        $data = json_decode($request->getContent(),true);
        $mat.="/P".$maxid;
        $prestataire = new EntreprisePrestataire;
        $prestataire->setMatricule($mat);
        $prestataire->setDenomination($data['denome']);
        $prestataire->setEmail($data['email']);
        $prestataire->setContacte($data['contact']);
        $prestataire->setAdress($data['adress']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($prestataire);
        $em->flush();

        return new jsonResponse("succesfull !");
    } // done !

    /**
     * @Route("/prest/show", name="show_prestataire") 
     */
    public function show_prestataire(Request $request){
        $prestatairerep = $this->getDoctrine()->getRepository(EntreprisePrestataire::class);
        $prestataires = $prestatairerep->findAll();

        $prest_serialized = $this->get('serializer')->serialize($prestataires,'json');

        // var_dump($prestataires);
        return new Response($prest_serialized);
    } // done !

    /**
     * @Route("/prest/user/add",name="add_user_prestataire",methods={"POST"})
     */
    public function add_user_prestataire(Request $request){
       
        return new jsonResponse("Succes");
    }



    /**
     * @Route("/prest/user/show")
     */
    public function show_user_prestataire(){
        $userrep = $this->getDoctrine()->getRepository(UserPrestataire::class);
        $user = $userrep->findAll();

        $user_serialized = $this->get('serializer')->serialize($user,'json');

        // var_dump($prestataires);
        return new Response($user_serialized);
    } // done !

    

    /**
     * @Route("/prest/user/show/{id}",name="one_user_show")
     */
    public function show_one_user_prestataire($id){
        $userrep = $this->getDoctrine()->getRepository(UserPrestataire::class);
        $user = $userrep->find($id);

        $user_serialized = $this->get('serializer')->serialize($user,'json');

        // var_dump($prestataires);
        return new Response($user_serialized);
    } // done !

// ============================================== Compte
    
    /**
     * @Route("/compte/show",name="show_compte")
     */
    public function show_compte(){
        $compterep = $this->getDoctrine()->getRepository(ComptePrestataire::class);
        $compte = $compterep->findAll();

        $compte_serialized = $this->get('serializer')->serialize($compte,'json');
        return new Response($compte_serialized);
    } // done !

}