<?php

namespace App\Service\Search;

use App\Interface\Document\IndexDocumentStoreInterface;
use App\Interface\Index\indexInterface;
use App\Interface\Ranker\RankerInterface;
use App\Interface\Search\SearchInterface;
use App\Service\Document\Document;
use App\Service\Index\Index;
use App\Service\Ranker\Ranker;

class Search implements SearchInterface
{
    private Index $index;
    private Document $document;
    private Ranker $ranker;
    const FILTER = '/porn|naked|teens|pussy|sex|nasty|mature|crossdresser|couples|girlfriend|wives|pornstar|cock|fuck|shit|cunt|nude|lesbian|sexy|ass|ladyboy|granny|cum|boob|breast|exposing|milf|erotic|bdsm|live|penis|horny|slut|nudist|upskirt|boobs|tits|amateur|hottest|adult|teen|babe|1yo|2yo|3yo|4yo|5yo|6yo|7yo|8yo|9yo|10yo|11yo|12yo|13yo|14yo|15yo|16yo|17yo|incest|jailbait|kdv|kiddie|kiddy|kinder|Lolita|lsm|mbla|molested|ninfeta|pedo|phat|pjk|pthc|ptsc|premature|preteen|pthc|qsh|qwerty|r@ygold|raped|teensex|yovo|Pr0nStarS|tranny|transvest|XXX|Anal|Asshole|Bangbros|Barely|Blow|Blowjob|Bondage|brazzers|Camera_Phone|Centerfold|Clitoris|Cock|Cum|Cunt|Deepthroat|Diaper|Drilled|EROTRIX|Facial|Femjoy|Fetish|Fisting|fotos|FTV|Fuck|Gangbang|Gay|Handjob|Hardcore|Headjob|hidden_cam|Hustler|Jenna|Lesbo|Masturbat|MILF|nackte|naken|Naturals|Nipple|Nubile|Onlytease|Orgasm|Orgy|Penis|Penthouse|Playboy|Porn|Profileasian|Profileblond|Pussy|Scroops|selfpic|spunky_teens|strapon|strappon|Suck|TeenTraps|tittie|titty|tranny|transvest|twat|vagina|webcam|Whore|XPUSS|Amateur|Blonde|Brunette|Naked|Naughty|Private|Redhead|Sex|Slut|Strips|Teen|Young|wet|girl|video|taboo|nastiest/i';
    const DISPLAY_FILTER = false;
    const DOCUMENT_RETURN = 10;
    public function __construct(indexInterface $index, IndexDocumentStoreInterface $document, RankerInterface $ranker)
    {
        $this->index = $index;
        $this->document = $document;
        $this->ranker = $ranker;
    }

    /**
     * @throws \Exception
     */
    public function search($searchterms, $seeporn=self::DISPLAY_FILTER): array
    {
        $indresult = array(); // AND results
        $indorresult = array(); // OR results IE everything

        $interlists = array();

        $cleansearchterms = $this->cleanSearchTerms($searchterms);

        foreach($cleansearchterms as $term) {
            $ind = $this->index->getDocuments($term);
            if($ind != null) {
                $tmp = array();
                foreach($ind as $i) {
                    $indorresult[$i[0]] = $i[0];
                    $tmp[] = $i[0];
                }
                $interlists[] = $tmp;
            }
        }

        // Get the intersection of the lists
        if(!empty($interlists)) {
            $indresult = $interlists[0];
            foreach ($interlists as $lst) {
                $indresult = array_intersect($indresult, $lst);
            }
        }


        $doc = array();
        $count = 0;
        foreach($indresult as $i) {

            $document = $this->document->getDocument($i);
            $document = $document[0];

            // Rank the documents based on all the terms
            $rank = 0;
            foreach($cleansearchterms as $term) {
                $rank = $rank + $this->ranker->rankDocument($term, $document);
            }
            $document[3] = $rank;

            preg_match_all(self::FILTER, $document[1].$document[2], $matches);

            // if they want to see porn, or its not porn
            if($seeporn || count($matches[0]) <= 1) {
                $doc[] = $document;
                $count++;
                if($count == self::DOCUMENT_RETURN) {
                    break;
                }
            }
        }

        usort($doc, array($this->ranker, 'rankDocuments'));

        if($count != self::DOCUMENT_RETURN) { // If we dont have enough results to AND default to OR
            foreach($indorresult as $i) {
                $document = $this->document->getDocument($i);
                $document = $document[0];

                // Rank the documents based on all the terms
                $rank = 0;
                foreach($cleansearchterms as $term) {
                    $rank = $rank + $this->ranker->rankDocument($term, $document);
                }
                $document[3] = $rank;

                if(!in_array($document, $doc)) { # not already in there

                    preg_match_all(self::FILTER, $document[1].$document[2], $matches);

                    if($seeporn || count($matches[0]) <= 1) {
                        $doc[] = $document;
                        $count++;
                        if($count == self::DOCUMENT_RETURN) {
                            break;
                        }
                    }
                }
            }
        }

        return ['count' => count($indresult), 'result' => $doc];
    }

    public function cleanSearchTerms($searchterms): array
    {
        $cleansearchterms = strtolower($searchterms);
        $cleansearchterms = preg_replace('/\W/i', ' ', $cleansearchterms);
        $cleansearchterms = preg_replace('/\s\s+/', ' ', $cleansearchterms);
        return explode(' ', trim($cleansearchterms));
    }
}
