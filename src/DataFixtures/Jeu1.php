<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Artist;
use App\Entity\Disc;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $artist1 = new Artist();

        $artist1->setArtistName("Queens Of The Stone Age");
        $artist1->setArtistUrl("https://qotsa.com/");

        $manager->persist($artist1);

        $disc1 = new Disc();

        $disc1->setTitle("Song for the Deaf");
        $disc1->setPicture("https://en.wikipedia.org/wiki/Songs_for_the_Deaf#/media/File:Queens_of_the_Stone_Age_-_Songs_for_the_Deaf.png");
        $disc1->setLabel("Interscope Records");
        $disc1->setYear("1998");
        $manager->persist($disc1);
        $disc1->setArtist($artist1);

        $manager->flush();
    }
}
