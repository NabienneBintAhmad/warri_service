<?php

namespace App\Controller;


use App\Entity\UserSystemes;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use phpDocumentor\Reflection\Types\This;
use App\Entity\UserPrestataire;
use App\Entity\ComptePrestataire;
use App\Entity\Transaction;
use App\Entity\EntreprisePrestataire;
use Symfony\Component\Validator\Constraints\Date;
use \DateTime;

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

    /**
     * @Route("/system/block/{id}",name="block_user_system")
     */

    public function block_user_sys(Request $req){
        $data = $req->getContent();
        $data = json_decode($data,true);
        $id = $data['id']; 
        $repos = $this->getDoctrine()->getRepository(UserSystemes::class)->find($id);
        $repos->setStatus('0');
        var_dump($repos);
        
        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return new jsonResponse('well');
    }

    /**
     * @Route("/system/edit/{id}",name="edit_user_system")
     */

    public function edit_user_sys(Request $req){
        $data = $req->getContent();
        $data = json_decode($data,true);
        $id = $data['id'];
        $repos = $this->getDoctrine()->getRepository(UserSystemes::class)->find($id);
        
        $repos->setNom($data['nom']);
        $repos->setPrenom($data['prenom']);
        $repos->setEmail($data['email']);
        $repos->setTelephone($data['tel']);
        $repos->setAdresse($data['adress']);
        $repos->setCni($data['cni']);
        $repos->setStatus($data['status']);

        var_dump($repos);
        
        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return new jsonResponse('well');
    }

// ============================================== PRESTATAIRE

    /**
     * @Route("/prest/add", name="add_prestataire",methods={"POST"}) 
     * @IsGranted("ROLE_ADMIN")
     */
    public function add_prestataire(Request $request){
        $mat = date('y');
        $idrep = $this->getDoctrine()->getRepository(EntreprisePrestataire::class)->CreateQueryBuilder('a')
            ->select('Max(a.id)')
            ->getQuery();
        $maxidresult = $idrep ->getResult();
        $maxid = ($maxidresult[0][1] + 1);

        $data = json_decode($request->getContent(),true);
        $mat.="-P".$maxid;
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
     * @IsGranted("ROLE_ADMIN")
     */
    public function show_prestataire(Request $request){
        $prestatairerep = $this->getDoctrine()->getRepository(EntreprisePrestataire::class);
        $prestataires = $prestatairerep->findAll();

        $prest_serialized = $this->get('serializer')->serialize($prestataires,'json');

        $response = new Response($prest_serialized);
        $response->headers->set('content-type','application/json');
        // $response->setStatusCode(Response::HTTP_CREATED);

        return($response);
    } // done !

     /**
     * @Route("/prest/show/{id}", name="show_one_prestataire")
     * @IsGranted("ROLE_ADMIN")
     */
    public function show_one_prestataire(Request $request,$id){
        $prestatairerep = $this->getDoctrine()->getRepository(EntreprisePrestataire::class);
        $prestataires = $prestatairerep->find($id);

        $prest_serialized = $this->get('serializer')->serialize($prestataires,'json');

        return new JsonResponse($prest_serialized);
    } // done !


    /**
     * @Route("/prest/user/add",name="add_user_prestataire",methods={"POST"})
     * @IsGranted("ROLE_PRESTATAIRE")
     */
    public function add_user_prestataire(Request $request){
        $data = $request->getContent();
        $data = json_decode($data,true);

        $the_id = $this->getDoctrine()->getRepository(EntreprisePrestataire::class)->findByMatricule($data['matricule']);
        // $the_id_serialized = $this->get('serializer')->serialize($the_id,'json');
        // $mat_id = ($the_id);
        $mat_id = ($the_id[0]);

        $user = new UserPrestataire;
        $user->setMatricule($mat_id);
        $user->setNom($data['nom']);
        $user->setPrenom($data['prenom']);
        $user->setTelephone($data['tel']);
        $user->setEmail($data['email']);
        $user->setAdresse($data['adress']);

        // var_dump($user->getMatricule()->GetEmail());

        $em = $this->getDoctrine()->getManager();
        $em->persist($user); 
        $em->flush(); 
       
        return new jsonResponse("Succes");

    }// done !



    /**
     * @Route("/prest/user/show")
     * @IsGranted("ROLE_PRESTATAIRE")
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
     * @IsGranted("ROLE_PRESTATAIRE")
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
     * @IsGranted("ROLE_PRESTATAIRE")
     */
    public function show_compte(){
        $compterep = $this->getDoctrine()->getRepository(ComptePrestataire::class);
        $compte = $compterep->findAll();

        $compte_serialized = $this->get('serializer')->serialize($compte,'json');
        return new Response($compte_serialized);
    } // done !

    /**
     * @Route("/compte/add",name="add_compte")
     * @IsGranted("ROLE_ADMIN")
     */
    public function add_compte(Request $request){
        $data = $request->getContent();
        $data = json_decode($data,true);
        $the_mat = $this->getDoctrine()->getRepository(EntreprisePrestataire::class)->findByMatricule($data['matricule'] );
        // var_dump($the_mat);
        // var_dump($the_mat[0]->getEmail());

        $compte = new ComptePrestataire;

        $compte->setMatricule($the_mat[0]);
        $compte->setSolde($data['solde']);
        // var_dump($compte);

        $em = $this->getDoctrine()->getmanager();
        $em->persist($compte);

        if($em->flush()){
            return new Response ("error");
        }else{
            return new Response ("sucessfull");
        }

    }//done !



    /**
     * @Route("/transaction/add",name="add_transaction",methods={"POST"})
     * @IsGranted("ROLE_PRESTATAIRE")
     */
    public function add_transaction(Request $request){
        $data = $request->getContent();
        $data = json_decode($data,true);
        // var_dump($data);
        // $date = ($data['date']);
        // var_dump($date);http://127.0.0.1:8000/api/prest/show

        $trans = new Transaction;
        $trans->setCompte($data['compte']);
        $trans->setType($data['type']);
        $trans->setMontant($data['montant']);
        // $trans->setDate( new \DateTime ($data['date']));
        $trans->setDate( new \DateTime('now'));
        // var_dump($trans);

        $em = $this->getDoctrine()->getmanager();
        $em->persist($trans);
        $em->flush();

        return new Response ("response ");
    }// done !


    /**
     * @Route("/transaction/show/{cmpt}",name="show_transaction")
     * @IsGranted("ROLE_PRESTATAIRE")
     */

     public function show_trans(Request $req,$cmpt){
        //  $data = $req->getContent();
         $transactions = $this->getDoctrine()->getRepository(Transaction::class)->findByCompte($cmpt);
         var_dump($transactions);

         return new Response("ok");
     }// done !

    
    // public function block(Request $request, $mat)
    // {
    //     $user = $this->getDoctrine()->getManager()->getRepository()->find($mat);

    //     $form = $this->createForm(UserSystemes::class,$user);

    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {

    //         $em->flush();

    //         return $this->redirectToRoute('form_add_example');
    //     }

    //     return new resonse ("ok");
    // }
}
