<?php
require_once "models/Quiz.php";

class QuizController
{
    private $quizManager;
    private $quizData;

    public function __construct()
    {
        $this->quizManager = new QuizManager();
        $this->quizData = $this->quizManager->getData();
    }

    public function getQuiz()
    {
        require_once("views/Quiz.php");
    }

    public function postQuiz()
    {
        $score = 0;
        $questionNumber = sizeof($_POST);

        foreach ($_POST as $answer => $answer_value) {
            list($category, $question) = explode("/", $answer);
            $goodAnswer = $this->quizData->{'quiz'}->$category->$question->{'answer'};

            if ($answer_value == $goodAnswer) {
                $score++;
            } else {
                $score--;
            }
        }

        if ($score < $questionNumber) {
            require("views/Loose.php");
        } else {
            require("views/Win.php");
        }
    }
}
