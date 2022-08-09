<?php

namespace App\Interface\Ranker;

interface RankerInterface
{
    public function rankDocuments(array $document, array $document2);

    public function rankIndex($document, $document2);

    public function rankDocument($term, $document);
}