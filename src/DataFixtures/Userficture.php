<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\UserSystemes;

class Userficture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $em = getDoctrine()->getManager();
        for ($i = 0;$i = 5;$i++){
            $dump = new UserSystemes;
            $dump->setNom("Nom n".$i);
            $dump->setPrenom("PreNom n".$i);
            $dump->setEmail("Nom".$i."@gmail.com");
            $dump->setTelephone(775785698);
            $dump->setAdresse("Adresse n".$i);
            $dump->setCni("Nom n".$i);
            $dump->setStatus("1");

            $em->persit($dump);
        }

        
        $em->flush();
        
    }
}
