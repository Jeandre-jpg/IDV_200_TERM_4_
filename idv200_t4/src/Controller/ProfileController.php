<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class ProfileController extends AbstractController
{
    public function viewProfile($id = "1")
    {
    $userId = (int) $id;
    $jane = new User();

    $jane->setId(1);
    $jane->setName("Jane");

    $john = new User();

    $john->setId(2);
    $john->setName("John");

    $bob = new User();

    $bob->setId(3);
    $bob->setName("Bob");

    $sam = new User();

    $sam->setId(4);
    $sam->setName("Sam");

    $users = [$jane, $john, $bob, $sam];
    return $this->render($view, $model);

    $model = array();
    $view = '/profile.html.twig';
    
    foreach ($users as $user) {
        if ($userId === $user->getId()) {
            $model['user'] = $user;
            }
        }
    }
}
?>