<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo</title>
</head>

<body>
    <h1>Quiz</h1>
    <form action="index.php?action=quiz" method="POST">
        <?php foreach ($this->quizData->{'quiz'} as $category => $category_value) { ?>
            <h2><?= $category ?></h2>

            <?php foreach ($category_value as $question => $question_value) { ?>
                <h3><?= $question_value->{'question'} ?></h3>

                <?php foreach ($question_value->{'options'} as $choices) { ?>
                    <input type="radio" name="<?= "{$category}/{$question}" ?>" value="<?= $choices ?>" />
                    <label for="<?= "{$category}/{$question}" ?>"><?= $choices ?></label>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        <br>

        <button type="submit">Envoyer</button>
    </form>
</body>

</html>