<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
class AuthorFeedController extends AbstractController
{
    /**
     * @Route("/authorFeed/{id}",name="author_feed_view")
     */
    public function viewProfile($id = "1")
    {

    $model = array();
    $view = '/authorFeed.html.twig';
    
    foreach ($users as $user) {
        if ($userId === $user->getId()) {
            $model['user'] = $user;
            }
        }
        return $this->render($view, $model);
    }
    
}
?>