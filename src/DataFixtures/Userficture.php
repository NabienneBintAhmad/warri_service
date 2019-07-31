<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

class Userficture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $em = $this->getDoctrine()->getManager();
        $dump = new User;

        $dump->setUsername("superadmin@gmail.com");
        $dump->setRoles(["ROLE_SUPERADMIN"]);
        $dump->setPassword("admin");

        // $em->persist($dump);
        $manager->persist($dump);
        $manager->flush();
    
    }
}
