<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserSystemTest extends WebTestCase
{
    public function testsystem_add_user()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'nabienne@gmail.com',
            'PHP_AUTH_PW'=>'passer1'
         ]);
        $crawler = $client->request('POST', 'api/addUsersyst',[],[],
        ['CONTENT_TYPE' => 'application/json'],
        '{
            "nom":"Gaye",
            "prenom":"Chekh",
            "email": "gaye@hotmail.com",
            "telephone": 772145732,
            "adresse":"Ouakam",
            "cni": 1234567,
            "status": "debloquer"
            
        }');
        $rep = $client->getResponse();
         var_dump($rep);
        $this->assertSame(200, $client->getResponse()->getStatusCode());
}

   public function testUserSystemko()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'nabienne@gmail.com',
            'PHP_AUTH_PW'=>'passer1'
         ]);
        $crawler = $client->request('POST', 'api/addUsersyst',[],[],
        ['CONTENT_TYPE' => 'application/json'],
        '{
            "nom" : "Gaye",
            "prenom" : 12345,
            "email" : gaye@hotmail.com,
            "telephone" : 772145732,
            "adresse" : "Ouakam",
            "cni" : "1234567",
            "status" : "debloquer"
        }'
    );
        $rep = $client->getResponse();
         var_dump($rep);
        $this->assertSame(400, $client->getResponse()->getStatusCode());
    } 


}