<?php

namespace App\DataFixtures;

use App\Entity\Greeting;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $greeting = new Greeting();
        $greeting->setMessage('Hello World!');
        $manager->persist($greeting);


        $manager->flush();
    }
}
