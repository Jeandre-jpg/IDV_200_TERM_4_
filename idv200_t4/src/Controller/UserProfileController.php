<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
class UserProfileController extends AbstractController
{
    /**
     * @Route("/userProfile/{id}",name="user_profile_view")
     */
    public function viewProfile($id = "1")
    {
    $userId = (int) $id;

    $jim = new User();
    $jim->setId(1);
    $jim->setName("Jim");

    $harry = new User();
    $harry->setId(2);
    $harry->setName("Harry");

    $sarah = new User();
    $sarah->setId(3);
    $sarah->setName("Sarah");

    $kate = new User();
    $kate->setId(4);
    $kate->setName("Kate");

    $users = [$jim, $harry, $sarah, $kate];
    

    $model = array();
    $view = '/userProfile.html.twig';
    
    foreach ($users as $user) {
        if ($userId === $user->getId()) {
            $model['user'] = $user;
            }
        }
        return $this->render($view, $model);
    }
    
}
?>