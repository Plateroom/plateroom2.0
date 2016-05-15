<?php

namespace MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlateControllerTest extends WebTestCase
{
    public function testPlate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '{id}');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/home');
    }

    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/create');
    }

}
