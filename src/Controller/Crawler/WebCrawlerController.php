<?php

namespace App\Controller\Crawler;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Crawler\WebCrawler;

class WebCrawlerController extends AbstractController
{

    private string $crawlerDir;

    public function __construct(string $crawlerDir)
    {
        $this->crawlerDir = $crawlerDir;
    }

    /**
     * @Route("/crawler", name="app_crawler")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/WebCrawlerController.php',
        ]);
    }

    /**
     * @Route("/crawler/parser", name="app_crawler_parser")
     * Parse file with list of top webs.
     * @param WebCrawler $webCrawler
     * @return Response
     */
    public function parser(WebCrawler $webCrawler): Response
    {
        if (true === $webCrawler->parser($this->crawlerDir)) {
            return new Response('success');
        }
        return new Response('error');
    }

}
