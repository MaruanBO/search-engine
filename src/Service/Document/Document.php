<?php

namespace App\Service\Document;

use App\Interface\Document\IndexDocumentStoreInterface;

/**
 * How the documents look on disk
 */
class Document implements IndexDocumentStoreInterface
{
    private string $documentDir;
    const DOCUMENT_FILE_EXTENSION = '.txt';

    public function __construct(string $documentDir)
    {
        $this->documentDir = $documentDir;
    }

    public function storeDocument(array $document): int
    {
        $docid = $this->getNextDocumentId();
        $serialized = serialize($document);
        $fp = fopen($this->getFilePathName($docid), 'a');
        fwrite($fp, $serialized);
        fclose($fp);
        return $docid;
    }

    public function getNextDocumentId(): int
    {
        $countFile = $this->getFilePathName('count');
        $count = 0;
        if (file_exists($countFile)) {
            $fh = fopen($countFile, 'r');
            $count = (int)fgets($fh);
        }
        $fh = fopen($countFile, 'w');
        fputs($fh, $count + 1);
        fclose($fh);
        return $count;
    }

    public function getDocument($id)
    {
        if (!is_integer($id) || $id < 0) {
            return null;
        }
        $filename = $this->getFilePathName($id);
        if (!file_exists($filename)) {
            return null;
        }
        $handle = fopen($filename, 'r');
        $contents = fread($handle, filesize($filename));
        fclose($handle);
        return unserialize($contents);
    }

    public function clearDocuments()
    {
        $fp = opendir($this->getPath());
        while (false !== ($file = readdir($fp))) {
            if (is_file($this->getPath() . $file)) {
                unlink($this->getPath() . $file);
            }
        }
    }

    public function getFilePathName($name): string
    {
        $md5 = md5($name);
        $one = substr($md5, 0, 2);

        if (!file_exists($this->getPath() . '/' . $one . '/')) {
            mkdir($this->getPath() . '/' . $one . '/');
        }

        return $this->getPath() . '/' . $one . '/' . $name . self::DOCUMENT_FILE_EXTENSION;
    }

    public function getPath(): string
    {
        return $this->documentDir;
    }

}
