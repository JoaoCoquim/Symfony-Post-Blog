<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function main(){

        return new Response('<h1>Welcome to Symfony 6.3.1 :)</h1>');
    }

    #[Route('/main/{slug?}', name: 'app_main_slug')]
    public function indexSlug(Request $request): JsonResponse
    {

        $slug = $request->get('slug');
        $variable = "whatever I want here";

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MainController.php',
            'yeah' => $variable,
            'slug' => $slug
        ]);
    }

}
