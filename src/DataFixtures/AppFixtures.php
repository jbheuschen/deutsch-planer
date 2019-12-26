<?php

namespace App\DataFixtures;

use App\Entity\Image;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setEmail("postmaster@fheuschen.de");
        $user->setPassword('$2y$12$dos52VwXQTW6kb7tdJBH3O1OqnPc6uw3BvobSZ5WcPRyW/QfP3aF2');


        $manager->persist($user);

        $imageA = new Image();
        $imageA->setPath("/Library/WebServer/Documents/d-planer/uploads/hubble.jpg");
        $imageA->setFilename("hubble.jpg");
        $imageA->setMime("image/jpeg");
        $manager->persist($imageA);

        $imageB = new Image();
        $imageB->setPath("/Library/WebServer/Documents/d-planer/uploads/hubble_emitting.jpg");
        $imageB->setFilename("hubble_emitting.jpg");
        $imageB->setMime("image/jpeg");
        $manager->persist($imageB);

        $imageC = new Image();
        $imageC->setPath("/Library/WebServer/Documents/d-planer/uploads/s80-37406.jpg");
        $imageC->setFilename("s80-37406.jpg");
        $imageC->setMime("image/jpeg");
        $manager->persist($imageC);


        $manager->flush();
    }
}
