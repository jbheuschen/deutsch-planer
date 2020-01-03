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

namespace App\Controller;


use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Configuration\ConfigManager;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;
use EasyCorp\Bundle\EasyAdminBundle\Form\Filter\FilterRegistry;
use EasyCorp\Bundle\EasyAdminBundle\Search\Autocomplete;
use EasyCorp\Bundle\EasyAdminBundle\Search\Paginator;
use EasyCorp\Bundle\EasyAdminBundle\Search\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Security\AuthorizationChecker;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminController extends EasyAdminController
{

    public static function getSubscribedServices(): array
    {
        return array_merge(parent::getSubscribedServices(), [
            "security.encoder_interface" => UserPasswordEncoderInterface::class
        ]);
    }

    protected function persistUserEntity($user)
    {
        $encodedPassword = $this->encodePassword($user, $user->getPassword());
        $user->setPassword($encodedPassword);

        parent::persistEntity($user);
    }

    protected function updateUserEntity($user)
    {
        $encodedPassword = $this->encodePassword($user, $user->getPassword());
        $user->setPassword($encodedPassword);

        parent::updateEntity($user);
    }

    private function encodePassword($user, $password)
    {
        //$passwordEncoderFactory = $this->get('security.encoder_factory');

        $encoder = $this->get('security.encoder_interface');

        return $encoder->encodePassword($user, $user->getPassword());
    }
}