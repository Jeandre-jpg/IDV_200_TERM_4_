<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
class AdminProfileController extends AbstractController
{
    /**
     * @Route("/adminProfile/{id}",name="admin_profile_view")
     */
    public function viewProfile($id = "1")
    {
    $userId = (int) $id;

    $george = new User();
    $george->setId(1);
    $george->setName("George");

    $melissa = new User();
    $melissa->setId(2);
    $melissa->setName("Melissa");

    $gemma = new User();
    $gemma->setId(3);
    $gemma->setName("Gemma");

    $matt = new User();
    $matt->setId(4);
    $matt->setName("Matt");

    $users = [$george, $melissa, $gemma, $matt];
    

    $model = array();
    $view = '/adminProfile.html.twig';
    
    foreach ($users as $user) {
        if ($userId === $user->getId()) {
            $model['user'] = $user;
            }
        }
        return $this->render($view, $model);
    }
    
}
?>