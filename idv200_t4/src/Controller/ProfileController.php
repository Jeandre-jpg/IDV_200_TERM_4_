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
    $mark = new User();

    $mark->setId(1);
    $mark->setName("Mark");

    $grace = new User();

    $grace->setId(2);
    $grace->setName("Grace");

    $bill = new User();

    $bill->setId(3);
    $bill->setName("Bill");

    $dennis = new User();

    $dennis->setId(4);
    $dennis->setName("Dennis");

    $users = [$mark, $grace, $bill, $dennis];
    return $this->render($view, $model);

    $model = array();
    $view = './templates/profile.html.twig';
    
    foreach ($users as $user) {
        if ($userId === $user->getId()) {
            $model['user'] = $user;
            }
        }
    }
}
?>