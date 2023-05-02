<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminspaceController extends AbstractController
{
    /**
     * @Route("/adminspace", name="adminspace")
     */
    public function index(ContactRepository $contactRepository)

    {
        return $this->render('adminspace/index.html.twig', [
            'controller_name' => 'AdminspaceController',
            'contacts' => $contactRepository->findBy(array(), array('id' => 'desc' )),
        ]);
    }
}
