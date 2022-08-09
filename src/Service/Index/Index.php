<?php

namespace App\Service\Index;

use App\Interface\Index\indexInterface;
use Exception;

class Index implements indexInterface
{

    const DOCUMENT_COUNT = 3;
    const DOCUMENT_BY_SIZE = 12;
    const DOCUMENT_INTEGER_BY_SIZE = 4;
    const DOCUMENT_FILE_EXTENSION = '.bin';
    const DOCUMENT_RETURN = 1500;

    private string $indexDir;

    public function __construct(string $indexDir)
    {
        $this->indexDir = $indexDir;
    }

    public function storeDocuments(string $name, array $documents): bool
    {
        if (trim($name) == '') {
            return false;
        }

        foreach ($documents as $doc) {
            if (!$this->validateDocument($doc)) {
                return false;
            }
        }
        $fp = fopen($this->getFilePathName($name), 'w');
        foreach ($documents as $doc) {
            $bindata1 = pack('i', intval($doc[0]));
            $bindata2 = pack('i', intval($doc[1]));
            $bindata3 = pack('i', intval($doc[2]));
            fwrite($fp, $bindata1);
            fwrite($fp, $bindata2);
            fwrite($fp, $bindata3);
        }
        fclose($fp);
        return true;
    }

    /**
     * @throws Exception
     */
    public function getDocuments($name): array
    {
        if (!file_exists($this->getFilePathName($name))) {
            return array();
        }
        $fp = fopen($this->getFilePathName($name), 'r');

        $filesize = filesize($this->getFilePathName($name));
        if ($filesize % self::DOCUMENT_BY_SIZE != 0) {
            throw new Exception('Filesize not correct index is corrupt!');
        }
        $ret = array();
        $count = 0;
        for ($i = 0; $i < $filesize / self::DOCUMENT_BY_SIZE; $i++) {
            $bigdata1 = fread($fp, self::DOCUMENT_INTEGER_BY_SIZE);
            $bigdata2 = fread($fp, self::DOCUMENT_INTEGER_BY_SIZE);
            $bigdata3 = fread($fp, self::DOCUMENT_INTEGER_BY_SIZE);
            $data1 = unpack('i', $bigdata1);
            $data2 = unpack('i', $bigdata2);
            $data3 = unpack('i', $bigdata3);
            $ret[] = array(
                $data1[1],
                $data2[1],
                $data3[1]
            );
            $count++;
            if ($count == self::DOCUMENT_RETURN) {
                break;
            }
        }
        fclose($fp);
        return $ret;
    }

    public function validateDocument(array $document): bool
    {
        if (count($document) != self::DOCUMENT_COUNT) {
            return false;
        }
        for ($i = 0; $i < self::DOCUMENT_COUNT; $i++) {
            if (!is_int($document[$i]) || $document[$i] < 0) {
                return false;
            }
        }
        return true;
    }

    public function clearIndex()
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
        return $this->indexDir;
    }
}
