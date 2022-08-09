<?php

namespace App\Controller;

use App\Form\IndexType;
use App\Service\Document\Document;
use App\Service\Index\Index;
use App\Service\Index\Indexer;
use App\Service\Ranker\Ranker;
use App\Service\Search\Search;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function doSearch(Request $request): Response
    {
        $form = $this->createForm(IndexType::class, null, [
            'action' => $this->generateUrl('search'),
            'method' => 'GET',
        ]);

        $index = new Index($this->indexDir);
        $docStore = new Document($this->documentDir);
        $ranker = new Ranker();

        /*$indexer = new Indexer($index, $docStore);
        $indexer->indexer(array('Hi this is marouane indexing.. some..'));*/

        // do search..
        $search = new Search($index, $docStore, $ranker);
        $queryResult = array();
        $query = $request->query->all();

        $starttime = microtime(true);
        $result = '';
        $total = 0;
        if (!empty($query['index']['query'])) {
            $query = $query['index']['query'];
            foreach ($search->search($query) as $result) {
                $queryResult[] = $result;
            }
            $result = $queryResult[1];
            $total = $queryResult[0];
        }
        $endtime = microtime(true);

        $duration =  number_format(($endtime - $starttime), 2);

        return $this->render('search/search.html.twig', [
            'query' => $query,
            'result' => $result,
            'total' => $total,
            'timing' => $duration,
            'form' => $form->createView(),
        ]);

    }
}
