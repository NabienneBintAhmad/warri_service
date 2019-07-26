<?php

namespace App\Controller;


use App\Entity\User;
use App\Entity\UserSystem;
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
        $users = $this->getDoctrine()->getRepository(UserSystem::class)->findAll();
        $users_serialized =  $this->get('serializer')->serialize($users, 'json');
        $response = new Response($users_serialized);
        return($response);
    }

    /**
     * @Route("/system/show/{id}", name="one_user_system")
     */
    public function oneus(SerializerInterface $ser,$id){
        $users = $this->getDoctrine()->getRepository(UserSystem::class)->find($id);
        $users_serialized =  $this->get('serializer')->serialize($users, 'json');
        $response = new Response($users_serialized);
        return($response);
    }

    /**
     * @Route("/system/add", name="add_user_sys",methods={"POST"})
     */

    public function system_add_user (Request $request){
        
        $data = json_decode($request->getContent(),true);
        // $dump = $request->getContent();
        
        $dump = new UserSystem;
        $dump->setNom($data['nom']);
        $dump->setPrenom($data['prenom']);
        $dump->setEamil($data['eamil']);
        $dump->setTelephone($data['telephone']);
        $dump->setAdress($data['adress']);
        $dump->setPassword($data['pass']);
        $dump->setStatut($data['status']);

        // $ser = $this->get('serializer');
        // $data = $ser->deserialize($dump,UserSystem::class,'json');
        // var_dump($dump);
        // var_dump($data);

        $em = $this->getDoctrine()->getManager();
        $em->persist($dump);
        $em->flush();

        return new jsonResponse("succesfull !");
    }

    /**
     *@Route("/system/block/1",name="") 
     */

    public function delete_user_system($id){
        $userrep = $this->getDoctrine->getRepository(UserSystem::class);
        $user = $userrep->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
 
        return new JsonResponse("Deleted");
    }

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
        // print_r($maxidresult[0][1]);

        $data = json_decode($request->getContent(),true);
        $mat.="/P".$maxid;
        $prestataire = new EntreprisePrestataire;
        $prestataire->setMatricule($mat);
        $prestataire->setNomComplet($data['nom_complet']);
        $prestataire->setEmail($data['email']);
        $prestataire->setContact($data['contact']);
        $prestataire->setAdress($data['adress']);

        var_dump($prestataire);
        // echo($mat);

        $em = $this->getDoctrine()->getManager();
        $em->persist($prestataire);
        $em->flush();

        return new jsonResponse("succesfull !");
    }

    /**
     * @Route("/prest/user/add")
     */
    public function add_user_prestataire(){
     
        
        return new jsonResponse("Succes");
    }

    /**
     * @Route("/prest/user/show")
     */
    public function show_user_prestataire(){
     

        return new jsonResponse("Succes");
    }

    /**
     * @Route("/prest/user/show/{id}")
     */
    public function show_one_user_prestataire(){
     

        return new jsonResponse("Succes");
    }

// ============================================== Compte

    /**
     * @Route("/compte/show/")
     */
    public function show_compte(){
     

        return new jsonResponse("Succes");
    }

    /**
     * @Route("/compte/show/{id}")
     */
    public function show_one_compte(){
     

        return new jsonResponse("Succes");
    }

    
}
