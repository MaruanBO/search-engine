<?php

namespace App\Interface\Index;

interface indexInterface
{
    public function storeDocuments(string $name,array $documents);
    public function getDocuments(string $name);
    public function clearIndex();
    public function validateDocument(array $document);
}
