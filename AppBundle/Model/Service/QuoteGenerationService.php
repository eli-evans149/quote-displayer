<?php

require_once 'E:\personal-projects-2024\quote-displayer\AppBundle\Model\Quotes.php';

class QuoteGenerationService
{
    private Quotes $quotesModel;

    public function __construct()
    {
        $this->quotesModel = new Quotes();
    }

    public function generateAQuote(): Quote
    {
        $quoteNumber = rand(0, $this->quotesModel->getNumberOfQuotes() - 1);
        $quote = $this->quotesModel->getQuote($quoteNumber);

        return $quote;
    }
}