<?php

namespace App\Service\Index;

use App\Interface\Index\IndexIndexerInterface;
use App\Service\Document\Document;
use App\Service\PorterStemmer\PorterStemmer;

class Indexer implements IndexIndexerInterface
{
    private Index $index;
    private Document $document;
    public $stemmercache = array();
    public PorterStemmer $porterStemmer;

    public function __construct(Index $index, Document $document)
    {
        $this->index = $index;
        $this->document = $document;
    }

    public function indexer(array $documents): bool
    {
        foreach ($documents as $document) {
            $id = $this->document->storeDocument(array($document));
            $con = $this->concordance($this->cleanDocument($document));
            foreach ($con as $word => $count) {
                $ind = $this->index->getDocuments($word);
                if (count($ind) == 0) {
                    $this->index->storeDocuments($word, array(array($id, $count, 0)));
                } else {
                    $ind[] = array($id, 0, 0);
                    $this->index->storeDocuments($word, $ind);
                }
            }
        }
        return true;
    }

    public function cleanDocument($document): array
    {
        $contents = $document[0] . ' ' . $document[1] . ' ' . $document[2];

        $cleandocument = strip_tags(strtolower($contents));
        $cleandocument = preg_replace('/\W/i', ' ', $cleandocument);
        $cleandocument = preg_replace('/\s\s+/', ' ', $cleandocument);
        if ($cleandocument != '') {
            return explode(' ', trim($cleandocument));
        }
        return array();
    }

    public function concordance(array $document)
    {

        $con = array();
        foreach ($document as $word) {
            if (array_key_exists($word, $this->stemmercache)) {
                $word = $this->stemmercache[$word];
            } else {
                $stem = PorterStemmer::Stem($word);
                $stemmercache[$word] = $stem;
                $word = $stem;
            }
            if (array_key_exists($word, $con)) {
                $con[$word] = $con[$word] + 1;
            } else {
                $con[$word] = 1;
            }
        }
        return $con;
    }

}
