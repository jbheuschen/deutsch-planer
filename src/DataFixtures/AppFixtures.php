<?php
/**
 * MIT License
 *
 * Copyright (c) 2019-2020 Julian B. Heuschen
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

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

        /*$imageA = new Image();
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
        $manager->persist($imageC);*/


        $manager->flush();
    }
}
