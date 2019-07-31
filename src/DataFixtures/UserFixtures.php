<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $encoder)
{
    $this->encoder = $encoder;
}
    public function load(ObjectManager $manager)
    {
      
            $user = new User();
            $user->setUsername("fixture@gmail.com");
            $password= $this->encoder->encodePassword($user, 'passer1');
            $user->setPassword($password);
            $user->setRoles(["ROLE_SUPERADMIN"]);
            
           
            $manager->persist($user);
            $manager->flush();

        
    }
}
