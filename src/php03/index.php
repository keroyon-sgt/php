<?php

require_once('config/status_codes.php');

$random_numbers = array_rand($status_codes, 4);

// echo('<pre>');
// var_dump($random_numbers);
// echo('</pre>');

foreach ($random_numbers as $index_number){
    $options[] = $status_codes[$index_number];
}

$question = $options[mt_rand(0, 3)];

// echo('<pre>');
// var_dump($options);
// echo('</pre>');

// echo('<pre>');
// var_dump($question);
// echo('</pre>');


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css?123">
    <link rel="stylesheet" href="css/common.css?123">
    <link rel="stylesheet" href="css/index.css?123">
    <link rel="icon" href="./img/favicon.ico" />

</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                    <?php echo $question['description']; ?>
                </p>
            </div>
            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>" />
                <div class="quiz-form__item">
                    <?php foreach ($options as $option):  ?>
                        <div class="quiz-form__group">
                            <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">
                            <label class="quiz-form__label" for="<?php echo $option['code'] ?>">
                                <?php echo $option['code'] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>