<?php


class Qcm
{

    private array $questions = [];

    public function __construct() {

    }

        public function addQuestion(Question $question) : void
        {
            $this->questions[] = $question;
        }
         public function generate() : void
         {
             foreach ($this->questions as $question) {
                 echo "<p>" . $question->getTitle() . "</p>";
                    foreach ($question->getAnswers() as $answer) {
                        echo "<input type='radio' name='" . $question->getTitle() . "' value='" . $answer->getContent() . "'>";
                        echo "<label for='" . $answer->getContent() . "'>" . $answer->getContent() . "</label>";
                        echo "<br>";
                    }
             }
     }

}