<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpKernel\EventListener\ExceptionListener;
use Symfony\Component\Security\Core\Encoder\SodiumPasswordEncoder;

class FonctionalTest extends WebTestCase
{
   
    public function testUserSystemok()
    {
        $client = static::createClient();
<<<<<<< HEAD
        $crawler = $client->request('POST', '/api/system/add', [],[],
        ['CONTENT_TYPE' => 'application/json'],
                '{
                    "nom":"Gaye",
                    "prenom":"Chekh",
                    "email": "gaye@hotmail.com",
                    "tel": 772145732,
                    "adress":"Ouakam",
                    "cni":"1234567",
                    "status": "debloquer"
                }');
                $rep = $client->getResponse();
                 var_dump($rep);
                $this->assertSame(201, $client->getResponse()->getStatusCode());
=======
        $crawler = $client->request('POST', 'api/addUsersyst',[],[],
        ['CONTENT_TYPE' => 'application/json'],
        '{"nom":"Gaye","prenom":"Chekh","email": "gaye@hotmail.com","tel": 772145732,"adress":"Ouakam":"cni":"1234567","status": "debloquer"}');
        $rep = $client->getResponse();
         var_dump($rep);
        $this->assertSame(200, $client->getResponse()->getStatusCode());
>>>>>>> aa00fbad4b65d2960acba7b2cb2fc861a3b2f57d
    }

    
}
