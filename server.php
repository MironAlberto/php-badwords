<?php

    $text = $_GET['text'];
    $badword = $_GET['badword'];
    $censored = str_replace($badword, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bad Word</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="container">
            <div>
                <p>
                    <?php
                        echo $text;
                    ?>
                </p>

                <h3>
                    Text Length: <?php echo strlen($text); ?>
                </h3>
            </div>

            <div>
                <p>
                    <?php
                        echo $censored;
                    ?>
                </p>

                <h3>
                    Censored Length: <?php echo strlen($censored); ?>
                </h3>
            </div>
        </div>
    </body>
</html>