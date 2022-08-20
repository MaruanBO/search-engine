<?php

namespace App\Controller;

use App\Form\IndexType;
use App\Service\Document\Document;
use App\Service\Index\Index;
use App\Service\Index\Indexer;
use App\Service\Ranker\Ranker;
use App\Service\Search\Search;
use Exception;
use PhpParser\Comment\Doc;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    private string $indexDir;
    private string $documentDir;

    public function __construct(string $indexDir, string $documentDir)
    {
        $this->indexDir = $indexDir;
        $this->documentDir = $documentDir;
    }

    /**
     * @Route("/", name="index", methods={"POST|GET"})
     * @param Request $request
     * @return Response
     */

    public function index(Request $request): Response
    {
        $form = $this->createForm(IndexType::class, null, [
            'action' => $this->generateUrl('search'),
            'method' => 'GET',
        ]);
        return $this->renderForm('search/index.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/search", name="search", methods={"GET"})
     *
     * Should make search and return result and rank..
     *
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function doSearch(Request $request): Response
    {


        $form = $this->createForm(IndexType::class, null, [
            'action' => $this->generateUrl('search'), // send get request to search route..
            'method' => 'GET',
        ]);

        $index = new Index($this->indexDir); // create index to store, should return bin file
        $doc = new Document($this->documentDir); // create document to search and store document
        $ranker = new Ranker();
        $search = new Search($index, $doc, $ranker);

        $query = $request->query->all(); // get all query to verify if make rigth call

        /*$indexer = new Indexer($index, $doc);
        $indexer->indexer('Hi youtube!');*/

        // micro time - calculate how time take to do search
        $startTime = microtime(true);
        $result = ''; // get array result
        $total = 0; // get total of result

        if (!empty($query['index']['query'])) {
            $query = $query['index']['query'];
            // loop to make search, should get binary files and search inside document txt files.
            foreach ($search->search($query) as $result) {
                $queryResult[] = $result;
            }
            $result = $queryResult[1];
            $total = $queryResult[0];
        }

        $endTime = microtime(true);

        // calc time
        $duration = number_format(($endTime - $startTime), 2);

        return $this->render('search/search.html.twig', [
            'form' => $form->createView(),
            'result' => $result,
            'total' => $total,
            'timing' => $duration,
            'query' => $query
        ]);

    }
}
