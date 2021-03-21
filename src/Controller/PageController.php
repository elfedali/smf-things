<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\VarDumper;

class PageController extends AbstractController
{
    private $category_list;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->category_list = $categoryRepository->findAll();
    }

    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
            'category_list' => $this->category_list,
        ]);
    }

    /**
     *  @Route("/view/category/{category_slug}",name="category_view")
     */
    public function category_view(CategoryRepository $categoryRepository,string $category_slug): Response
    {
        $category = $categoryRepository->findOneBySlug($category_slug);
        $businesses = $category->getBusinesses();
         
         
        return $this->render('page/single_category.html.twig', [
            'category' => $category,
            'businesses'=> $businesses,
            'category_list' => $this->category_list,
        ]);
    }
}
