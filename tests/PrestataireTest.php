<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PrestataireTest extends WebTestCase
{
    public function testPrestataire()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'nabienne@gmail.com',
            'PHP_AUTH_PW'=>'passer1'
         ]);
        $crawler = $client->request('POST', 'api/prest/add',[],[],
        ['CONTENT_TYPE' => 'application/json'],
        '{
            "denome":"Nabienne Services",
            "email": "gaye@hotmail.com",
            "adress":"Ouakam",
            "contact": 772145732
           
            
        }');
        $rep = $client->getResponse();
         var_dump($rep);
        $this->assertSame(200, $client->getResponse()->getStatusCode());
}
    }

