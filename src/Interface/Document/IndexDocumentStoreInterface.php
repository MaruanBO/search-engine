<?php

namespace App\Interface\Document;

interface IndexDocumentStoreInterface
{
    public function storeDocument(array $document);
    public function getDocument($id);
    public function clearDocuments();
}
