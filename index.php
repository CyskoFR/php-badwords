<?php
    $text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit.';

    $censored_word = $_GET['badword'];
    var_dump($censored_word);

    $modified_text = str_replace($censored_word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <p>
        <strong>Text:</strong> <?php echo $text; ?>
    </p>
    <p>
        <strong>Text length:</strong> <?php echo strlen($text)?>
    </p>


    <p>
        <strong>Modified text:</strong> <?php echo $modified_text; ?>
    </p>
    <p>
        <strong>Modified text length:</strong> <?php echo strlen($modified_text)?>
    </p>

</body>
</html>