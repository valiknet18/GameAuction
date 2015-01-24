<?php
namespace Valiknet\LotBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LotControllerTest extends WebTestCase
{
    public function testIndexAction()
    {
        $client = static::createClient();

        $client->request('GET', '/app_dev.php');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
 