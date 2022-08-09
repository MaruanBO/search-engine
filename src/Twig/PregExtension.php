<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class PregExtension extends AbstractExtension
{

    public function getFilters()
    {
        return [
            new TwigFilter('preg_replace', [$this, '_preg_replace']),
        ];
    }

    /**
     * Perform a regular expression search and replace.
     *
     * @param string $subject
     * @param string $pattern
     * @param string $replacement
     * @return string
     */
    public function _preg_replace($subject, $pattern, $replacement = '')
    {

        if (!isset($subject)) {
            return null;
        } else {
            return preg_replace($pattern, $replacement, $subject);
        }
    }
}