<?php

require_once 'E:\personal-projects-2024\quote-displayer\AppBundle\Model\Service\QuoteGenerationService.php';
require_once 'E:\personal-projects-2024\quote-displayer\AppBundle\Model\Quote.php';
require_once 'E:\personal-projects-2024\quote-displayer\AppBundle\View\QuoteView.php';

class QuoteGeneratorController
{
    private $quoteService;
    private $quoteView;

    public function __construct()
    {
        $this->quoteService = new QuoteGenerationService();
        $this->quoteView = new QuoteView();
    }

    public function index()
    {
        $quote = $this->quoteService->generateAQuote();
        return $this->quoteView->render($quote);
    }
}