<?php


class Qcm
{
    private PDO $db;

    private array $questions = [];

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getQuestions() : array
    {
        $request = $this->db->query('SELECT * FROM question'); // je récupère tous mes utilisateurs dans ma BDD
        $questions = $request->fetchAll();
        $this->hydrate($questions);
        return $this->questions; // je retourne un tableau de tous mes utilisateurs dans ma BDD
      
    } 

    public function hydrate(array $data) : void // je récupère le tableau de ma requête SQL
    {
        // j'instancie un nouvel objet User pour chaque ligne de mon tableau
        foreach ($data as $question) {
            $newQuestion = new Question($question); // je passe en paramètre de mon constructeur une ligne de mon tableau
            $this->questions[] = $newQuestion; // j'ajoute mon nouvel objet User dans mon tableau d'objets User
        
        }
    }

  

    public function addQuestion(Question $question): void
    {
        $this->questions[] = $question;
    }
    public function generate(): void
    {
        foreach ($this->questions as $question) {
            // echo "<p>" . $question->getTitle() . "</p>";
            foreach ($question->getAnswers() as $answer) {
                echo "<input type='radio' name='" . $question->getTitle() . "' value='" . $answer->getContent() . "'>";
                echo "<label for='" . $answer->getContent() . "'>" . $answer->getContent() . "</label>";
                
                echo "<br>";
            }
        }
    }
}
