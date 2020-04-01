<?php

class QuizManager
{
    public function getData()
    {
        $dataFile = file_get_contents("data.json");
        $parsedData = json_decode($dataFile);

        return $parsedData;
    }
}
