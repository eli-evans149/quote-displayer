<?php

require_once 'Quote.php';

class Quotes
{
    private array $quotes;

    public function __construct()
    {
        $this->quotes = $this->getAllQuotes();
    }

    public function getAllQuotes()
    {
        $allQuotes = file_get_contents(__DIR__ . '/Quotes.txt');
        $allQuotesArray = explode("\n", $allQuotes);
    
        // Remove any empty lines
        $allQuotesArray = array_filter($allQuotesArray);
    
        // Create a new Quote object for each line
        $quotes = array();
        foreach ($allQuotesArray as $line) {
            $quotes[] = new Quote($line);
        }
    
        return $quotes;
    }

    public function getNumberOfQuotes() {
        return count($this->quotes);
    }

    public function getQuote($index) {
        return $this->quotes[$index];
    }
}