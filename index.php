<?php
require_once("controllers/Quiz.php");

$quizManager = new QuizController();

if (isset($_GET['action'])) {
    if ($_GET['action'] == "quiz") {
        $quizManager->postQuiz();
    }
} else {
    $quizManager->getQuiz();
}
