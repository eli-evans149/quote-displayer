<?php

class QuoteGenerationService
{
    public function generateAQuote(): Quote
    {
        return new Quote('Hello World!');
    }
}