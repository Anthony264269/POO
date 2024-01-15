<?php

class Answer
{
    private string $content;

    private bool $isCorrect;
    const BONNE_REPONSE = true;

    public function __construct($content, $isCorrect = false)
    {
        $this->content = $content;
        $this->isCorrect = $isCorrect;
    }

    public function getContent() : string
    {
        return $this->content;
    }

}

