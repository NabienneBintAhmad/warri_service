<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserPrestataireTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'prestataire1@gmail.com',
            'PHP_AUTH_PW'=>'passe1'
         ]);
        $crawler = $client->request('POST', 'api/prest/user/add',[],[],
        ['CONTENT_TYPE' => 'application/json'],
        '{
            "matricule": "19-P1",
            "nom": "NDIONGUE",
            "prenom":"Lena",
            "tel": 772145732,
            "email": "lena@hotmail.com",
            "adress":"Ouakam"
           
           
            
        }');
        $rep = $client->getResponse();
         var_dump($rep);
        $this->assertSame(200, $client->getResponse()->getStatusCode());
}
    }

