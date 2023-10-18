<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Artist; // Import the Artist entity

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $artist1 = new Artist();

        $artist1->setname("Queens Of The Stone Age");
        $artist1->seturl("https://qotsa.com");
        
        $manager->persist($artist1);
        $manager->flush();
    }
}


