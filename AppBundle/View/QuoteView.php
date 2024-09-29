<?php

class QuoteView
{
    public function render(Quote $quote)
    {
        echo '<h1>Your Quote Is:</h1>';
        echo '<p>' . $quote->getText() . '</p>';
    }
}