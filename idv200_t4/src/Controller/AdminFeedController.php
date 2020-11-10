<?php

namespace App\Controller;
use App\Entity\UserProfile;
use App\Repository\UserProfileRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
class AdminFeedController extends AbstractController
{
    /**
     * @Route("/adminFeed/{id}",name="admin_feed_view")
     */
    public function succesProfile(UserProfileRepository $userprofilerepository)
    {

        // return $this->render('/adminFeed.html.twig'[

        // ])

        }}

    // $userId = (int) $id;

    // $jane = new User();
    // $jane->setId(1);
    // $jane->setName("Jane");

    // $john = new User();
    // $john->setId(2);
    // $john->setName("John");

    // $bob = new User();
    // $bob->setId(3);
    // $bob->setName("Bob");

    // $sam = new User();
    // $sam->setId(4);
    // $sam->setName("Sam");

    // $users = [$jane, $john, $bob, $sam];
    

    // $model = array();
    // $view = '/adminFeed.html.twig';
    
    // foreach ($users as $user) {
    //     if ($userId === $user->getId()) {
    //         $model['user'] = $user;
    //         }
    //     }
    //     return $this->render($view, $model);
    // }
    


// $form->handleRequest($request);
// if ($form->isSubmitted() && $form->isValid()) {
// $userProfile = $form->getData();
// $entityManager = $this->getDoctrine()->getManager();
// $entityManager->persist($userProfile);
// $entityManager->flush();
// return $this->redirectToRoute('profile_success');
// }
// $view = 'register.html.twig';
// $model = array('form' => $form->createView());
// return $this->render($view, $model);
?>