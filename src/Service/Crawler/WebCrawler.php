<?php

namespace App\Service\Crawler;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class WebCrawler
{
    private Filesystem $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     *
     */
    public function parser($crawlerDir): bool
    {
        try {

            $resultFile = $crawlerDir . '_result/url_list.txt';

            if($this->filesystem->exists($resultFile)){
                $this->filesystem->remove($resultFile);
            }

            $file_handle = fopen($crawlerDir . '/top10.csv', "r");
            while (!feof($file_handle)) {
                $line = fgets($file_handle);
                if (preg_match('/^\d+/', $line)) { # validate if is rank
                    $row = explode(",", $line); // TODO: Implements auto detect delimiter and enclosure
                    $rank = trim($row[0]);
                    $url = trim($row[1]);
                    if ($url != 'Hidden profile') { # Hidden profile appears sometimes just ignore then
                        $this->filesystem->appendToFile($resultFile, # Write result into file
                            $rank . ' http://' . $url . "/\n");
                    }
                }
            }
            fclose($file_handle);
            return true;
        } catch (FileException $exception) {
            throw new FileException($exception->getMessage());
        }
    }
}
