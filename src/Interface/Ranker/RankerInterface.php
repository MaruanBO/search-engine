<?php

namespace App\Interface\Ranker;

interface RankerInterface
{
    /**
     * Rank documents
     * @param array $document
     * @param array $document2
     */
    public function rankDocuments(array $document, array $document2);

    /**
     * Rank index
     * @param $document
     * @param $document2
     */
    public function rankIndex($document, $document2);

    /**
     * Rank document with term (search - get query)
     * @param $document
     * @param $term
    */
    public function rankDocument($term, $document);

}