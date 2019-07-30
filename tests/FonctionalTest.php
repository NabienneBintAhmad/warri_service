<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FonctionalTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
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
    }
}
