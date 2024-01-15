<?php


class Question
{
    private string $title;
    private array $answers = [];
    private string $explanation;

    // public function __construct($title)
    // {
    //     $this->title = $title;
    // }
    public function __construct(array $data) { // je récupère un tableau qui correspond à une ligne de ma BDD
       
        $this->question = $data['question'];
        $this->explication = $data['explication']; 

    }

    public function addAnswer(Answer $answer): void
    {
        $this->answers[] = $answer;
    }

    public function setExplanation($explanation): void
    {
        $this->explanation = $explanation;
    }

    // public function getTitle(): string
    // {
    //     return $this->title;
    // }

    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function getExplanation(): string
    {
        return $this->explanation;
    }
}
