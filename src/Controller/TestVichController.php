<?php

namespace App\Controller;

use App\Entity\Projects;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestVichController extends AbstractController
{
    /**
     * @Route("/test/vich", name="app_test_vich")
     */
    public function index(EntityManagerInterface $entityManager)
    {
		$projects = $entityManager->getRepository(Projects::class)->findAll();
		foreach ($projects as $project)
		{
			//$project->setTitle("aa");
		}

		$entityManager->flush();


        return new Response("test");
    }
}
