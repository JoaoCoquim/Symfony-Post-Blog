<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/post', name: 'post.')]
class PostController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(PostRepository $repository): Response
    {

        //There's no need to use the EntityManager
        //$repository = $em->getRepository(Post::class);
        $posts = $repository->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts
        ]);
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request, EntityManagerInterface $em){
        // create a new Post
        $post = new Post();
        $post->setTitle("My 5th title");

        //entity manager
        $em->persist($post);
        $em->flush();

        return $this->redirect($this->generateUrl('post.index'));
    }

    #[Route('/show/{id}', name: 'show')]
    public function show(Post $post)
    {

        //Symfony does all this work just by autowiring 'Post'
        //$post = $em->getRepository(Post::class)->find($id);

        // create the show view
        return $this->render('post/show.html.twig', [
            'post' => $post
        ]);
    }


    #[Route('/delete/{id}', name: 'delete')]
    public function remove(Post $post, EntityManagerInterface $em){

        $em->remove($post);
        $em->flush();

        $this->addFlash(
            'success',
            'Post was successfully removed'
        );

        return $this->redirect($this->generateUrl('post.index'));
    }


}
