<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WarriControllerTest extends WebTestCase
{
    public function testsystem_add_user()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', 'api/addUsersyst',[],[],
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
    }

}
