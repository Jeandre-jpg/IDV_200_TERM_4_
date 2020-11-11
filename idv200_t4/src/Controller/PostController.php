<?php 

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\PostFormType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;

class PostController extends AbstractController
{
    /**
     * @Route("/feed/createPost")
     */
    public function createPost(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $post = new Post();

        $form = $this->createForm(PostFormType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $post = $form->getData();

            $entityManager->persist($post);

            $entityManager->flush();
            
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            return $this->redirectToRoute('app_homepage');
        }
        return $this->render('pages/createPost.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/feed", name="feed")
     */
    public function feed(PostRepository $postRepository)
    {
        $post = $postRepository
            ->findAll();


        if (!$post) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
    
        return $this->render('pages/feed.html.twig', ['post' => $post]);
    }
}


?>